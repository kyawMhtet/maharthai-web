<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generalworker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GeneralworkerController extends Controller
{
    //

    public function generalworkerPage()
    {
        $generalworkers = Generalworker::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $generalworkers->appends(request()->all());

        return view('admin.category.Type2.generalworker.generalworker', compact('generalworkers'));
        // return view('admin.category.generalworker.generalworker');
    }

    public function generalworkerCreate(Request $request)
    {
        // dd($request->all);
        $this->generalworkerValidationCheck($request);
        $data = $this->requestGeneralworkerData($request);

        $fileName = uniqid() . '_' . $request->file('generalworkerPhoto')->getClientOriginalName();
        $request->file('generalworkerPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Generalworker::create($data);

        return redirect()->route('generalworker#page')->with(['createSuccess' => 'generalworker Created...']);
    }

    public function generalworkerDelete($id)
    {
        Generalworker::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'generalworker Deleted...']);
    }

    // generalworker edit
    public function generalworkerEdit($id)
    {
        $generalworker = Generalworker::where('id', $id)->first();
        return view('admin.category.Type2.generalworker.generalworkerupdate', compact('generalworker'));
    }

    // generalworker edit page
    public function editPage($id)
    {
        $generalworker = Generalworker::where('id', $id)->first();
        return view('admin.category.Type2.generalworker.generalworkereditPage', compact('generalworker'));
    }

    // generalworker update
    public function generalworkerUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->generalworkerValidationCheck($request);
        $data = $this->requestGeneralworkerData($request);

        // photo
        if ($request->hasFile('generalworkerPhoto')) {
            $dbPhoto = Generalworker::where('id', $id)->first();
            $dbPhoto = $dbPhoto->generalworkerPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('generalworkerPhoto')->getClientOriginalName();
            $request->file('generalworkerPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Generalworker::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Generalworker::where('id', $id)->update($data);
        return redirect()->route('generalworker#page');
    }



    // generalworker validation check
    private function generalworkerValidationCheck($request)
    {
        Validator::make($request->all(), [
            'generalworkerCode' => 'required|unique:generalworkers,code,' . $request->generalworkerId,
            'generalworkerPhoto' => 'mimes:jpg,jpeg,png|file',
            'generalworkerName' => 'required',
            'generalworkerDoB' => 'required',
            // 'generalworkerPosition' => 'required',
            'generalworkerNationality' => 'required',
            'generalworkerReligion' => 'required',
            'generalworkerWeight' => 'required',
            'generalworkerHeight' => 'required',
            'generalworkerStatus' => 'required',
            'generalworkerSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'generalworkerSkill' => 'required',
            'generalworkerVaccine' => 'required',
            'generalworkerExperience' => 'required',
            'generalworkerLanguage' => 'required',
            'pets' => 'required',
            'generalworkerStock' => 'required',
            // 'generalworkerRemark' => 'required',
        ],)->validate();
    }



    // request generalworker Data
    private function requestGeneralworkerData($request)
    {
        return [
            'code' => $request->generalworkerCode,
            // 'instock_status' => $request->generalworkerInstock,
            'name' => $request->generalworkerName,
            'photo' => $request->generalworkerPhoto,
            'position' => $request->generalworkerPosition,
            'date_of_birth' => $request->generalworkerDoB,
            'nationality' => $request->generalworkerNationality,
            'religion' => $request->generalworkerReligion,
            'weight' => $request->generalworkerWeight,
            'height' => $request->generalworkerHeight,
            'salary' => $request->generalworkerSalary,
            'language' => $request->generalworkerLanguage,
            'status' => $request->generalworkerStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->generalworkerExperience,
            'pet' => $request->pets,
            'skill' => $request->generalworkerSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->generalworkerVaccine,
            'remark' => $request->generalworkerRemark,
            'note' => $request->note,
            'stockstatus' => $request->generalworkerStock,
        ];
    }
}
