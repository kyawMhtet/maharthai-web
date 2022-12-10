<?php

namespace App\Http\Controllers;

use App\Models\Housekeeping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HousekeepingController extends Controller
{
    //
        // housekeeping Page
        public function housekeepingPage()
        {
            $housekeepings = Housekeeping::when(request('key'), function ($query) {
                $query->where('code', 'like', '%' . request('key') . '%');
            })
                ->orderBy('id', 'desc')
                ->paginate(9);
            $housekeepings->appends(request()->all());

            return view('admin.category.housekeeping.housekeeping', compact('housekeepings'));
        }

        // housekeeping create
        public function housekeepingCreate(Request $request)
        {
            // dd($request->all);
            $this->housekeepingValidationCheck($request);
            $data = $this->requesthousekeepingData($request);

            $fileName = uniqid() . '_' . $request->file('housekeepingPhoto')->getClientOriginalName();
            $request->file('housekeepingPhoto')->storeAs('public', $fileName);

            $data['photo'] = $fileName;


            // }
            Housekeeping::create($data);

            return redirect()->route('housekeeping#page')->with(['createSuccess' => 'HouseKeeping Created...']);
        }

        // delete
        public function housekeepingDelete($id)
        {
            Housekeeping::where('id', $id)->delete();
            return back()->with(['deleteSuccess' => 'housekeeping Deleted...']);
        }

        // housekeeping edit
        public function housekeepingEdit($id)
        {
            $housekeeping = Housekeeping::where('id', $id)->first();
            return view('admin.category.housekeeping.housekeepingupdate', compact('housekeeping'));
        }

        // housekeeping edit page
        public function editPage($id)
        {
            $housekeeping = Housekeeping::where('id', $id)->first();
            return view('admin.category.housekeeping.editPage', compact('housekeeping'));
        }

        // housekeeping update
        public function housekeepingUpdate(Request $request)
        {
            //    dd('id', $request->all());
            $this->housekeepingValidationCheck($request);
            $data = $this->requesthousekeepingData($request);

            // photo
            if ($request->hasFile('housekeepingPhoto')) {
                $dbPhoto = Housekeeping::where('id', $request->housekeepingId)->first();
                $dbPhoto = $dbPhoto->housekeepingPhoto;

                if ($dbPhoto != null) {
                    Storage::delete('public/' . $dbPhoto);
                }
            }

            $fileName = uniqid() . $request->file('housekeepingPhoto')->getClientOriginalName();
            $request->file('housekeepingPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;

            Housekeeping::where('id', $request->housekeepingId)->update($data);
            return redirect()->route('housekeeping#page');
        }



        // housekeeping validation check
        private function housekeepingValidationCheck($request)
        {
            Validator::make($request->all(), [
                'housekeepingCode' => 'required|unique:housekeepings,code,' . $request->housekeepingId,
                'housekeepingPhoto' => 'required|mimes:jpg,jpeg,png|file',
                'housekeepingName' => 'required',
                'housekeepingDoB' => 'required',
                // 'housekeepingPosition' => 'required',
                'housekeepingNationality' => 'required',
                'housekeepingReligion' => 'required',
                'housekeepingWeight' => 'required',
                'housekeepingHeight' => 'required',
                'housekeepingStatus' => 'required',
                'housekeepingSalary' => 'required',
                'full_part' => 'required',
                'live_in_out' => 'required',
                'housekeepingSkill' => 'required',
                'housekeepingVaccine' => 'required',
                'housekeepingExperience' => 'required',
                'housekeepingLanguage' => 'required',
                // 'housekeepingRemark' => 'required',
            ],)->validate();
        }


        // request housekeeping Data
        private function requesthousekeepingData($request)
        {
            return [
                'code' => $request->housekeepingCode,
                // 'instock_status' => $request->housekeepingInstock,
                'name' => $request->housekeepingName,
                'photo' => $request->housekeepingPhoto,
                'position' => $request->housekeepingPosition,
                'date_of_birth' => $request->housekeepingDoB,
                'nationality' => $request->housekeepingNationality,
                'religion' => $request->housekeepingReligion,
                'weight' => $request->housekeepingWeight,
                'height' => $request->housekeepingHeight,
                'salary' => $request->housekeepingSalary,
                'language' => $request->housekeepingLanguage,
                'status' => $request->housekeepingStatus,
                'full_part' => $request->full_part,
                'live_in_out' => $request->live_in_out,
                'experience' => $request->housekeepingExperience,
                'pet' => $request->pets,
                'skill' => $request->housekeepingSkill,
                'pet_note' => $request->petNote,
                // 'dog_small' => $request->smallDog,
                // 'dog_big' => $request->bigDog,
                'vaccine' => $request->housekeepingVaccine,
                'remark' => $request->housekeepingRemark,
                'note' => $request->note,

            ];
        }
}
