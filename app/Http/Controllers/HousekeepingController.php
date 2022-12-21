<?php

namespace App\Http\Controllers;

// use Storage;

use App\Models\Housekeeping;

use Illuminate\Http\Request;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class HousekeepingController extends Controller
{
    // housekeeping page
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

    // housekeeping after create
    public function housekeepingCreate(Request $request)
    {
        // dd($request->all());
        $this->housekeepingValidationCheck($request);
        $data = $this->requestHousekeepingData($request);

        // dd($data);

        // for photo
        // if($request->hasFile('housekeepingPhoto')){
        $fileName = uniqid() . '_' . $request->file('housekeepingPhoto')->getClientOriginalName();
        $request->file('housekeepingPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;
        // dd($data);

        // }
        Housekeeping::create($data);

        return redirect()->route('housekeeping#page')->with(['createSuccess' => 'Housekeeping Created...']);
    }


    // housekeeping delete
    public function housekeepingDelete($id)
    {
        Housekeeping::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'Housekeeping Deleted...']);
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
    public function housekeepingUpdate(Request $request, $id)
    {
        $this->housekeepingValidationCheck($request);
        $data = $this->requestHousekeepingData($request);

        // photo
        if ($request->hasFile('housekeepingPhoto')) {


            $dbPhoto = Housekeeping::where('id', $id)->first();
            $dbPhoto = $dbPhoto->photo;

            // dd($dbPhoto);
            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('housekeepingPhoto')->getClientOriginalName();
            $request->file('housekeepingPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {

            $dbPhoto = Housekeeping::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;

        }

        Housekeeping::where('id', $id)->update($data);
        return redirect()->route('housekeeping#page');
    }



    // housekeeping validation check
    private function housekeepingValidationCheck($request)
    {
        // dd("validae");
        Validator::make($request->all(), [
            'housekeepingCode' => 'required|unique:housekeepings,code,' . $request->housekeepingId,
            'housekeepingPhoto' => 'mimes:jpg,jpeg,png|file',
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
            'housekeepingExperience' => 'required',
            'housekeepingLanguage' => 'required',
            'pets' => 'required',
            'housekeepingStock' => 'required',

            // 'housekeepingRemark' => 'required',

        ], [
            // 'housekeepingCode.required' => 'u need to fill'
        ])->validate();
    }

    // request housekeeping Data
    private function requestHousekeepingData($request)
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
            'stockstatus' => $request->housekeepingStock,

        ];
    }
}
