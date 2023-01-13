<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chiefassistant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ChiefassistantController extends Controller
{
    //

    public function chiefassistantPage()
    {
        $chiefassistants = Chiefassistant::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $chiefassistants->appends(request()->all());

        return view('admin.category.Type3.chiefassistant.chiefassistant', compact('chiefassistants'));
        // return view('admin.category.chiefassistant.chiefassistant');
    }

    public function chiefassistantCreate(Request $request)
    {
        // dd($request->all);
        $this->chiefassistantValidationCheck($request);
        $data = $this->requestchiefassistantData($request);

        $fileName = uniqid() . '_' . $request->file('chiefassistantPhoto')->getClientOriginalName();
        $request->file('chiefassistantPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Chiefassistant::create($data);

        return redirect()->route('chiefassistant#page')->with(['createSuccess' => 'chiefassistant Created...']);
    }

    public function chiefassistantDelete($id)
    {
        Chiefassistant::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'chiefassistant Deleted...']);
    }

    // chiefassistant edit
    public function chiefassistantEdit($id)
    {
        $chiefassistant = Chiefassistant::where('id', $id)->first();
        return view('admin.category.Type3.chiefassistant.chiefassistantupdate', compact('chiefassistant'));
    }

    // chiefassistant edit page
    public function editPage($id)
    {
        $chiefassistant = Chiefassistant::where('id', $id)->first();
        return view('admin.category.Type3.chiefassistant.editPage', compact('chiefassistant'));
    }

    // chiefassistant update
    public function chiefassistantUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->chiefassistantValidationCheck($request);
        $data = $this->requestchiefassistantData($request);

        // photo
        if ($request->hasFile('chiefassistantPhoto')) {
            $dbPhoto = Chiefassistant::where('id', $id)->first();
            $dbPhoto = $dbPhoto->chiefassistantPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('chiefassistantPhoto')->getClientOriginalName();
            $request->file('chiefassistantPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Chiefassistant::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Chiefassistant::where('id', $id)->update($data);
        return redirect()->route('chiefassistant#page');
    }



    // chiefassistant validation check
    private function chiefassistantValidationCheck($request)
    {
        Validator::make($request->all(), [
            'chiefassistantCode' => 'required|unique:chiefassistants,code,' . $request->chiefassistantId,
            'chiefassistantPhoto' => 'mimes:jpg,jpeg,png|file',
            'chiefassistantName' => 'required',
            'chiefassistantDoB' => 'required',
            // 'chiefassistantPosition' => 'required',
            'chiefassistantNationality' => 'required',
            'chiefassistantReligion' => 'required',
            'chiefassistantWeight' => 'required',
            'chiefassistantHeight' => 'required',
            'chiefassistantStatus' => 'required',
            'chiefassistantSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'chiefassistantSkill' => 'required',
            'chiefassistantVaccine' => 'required',
            'chiefassistantExperience' => 'required',
            'chiefassistantLanguage' => 'required',
            'pets' => 'required',
            'chiefassistantStock' => 'required',
            // 'chiefassistantRemark' => 'required',
        ],)->validate();
    }



    // request chiefassistant Data
    private function requestchiefassistantData($request)
    {
        return [
            'code' => $request->chiefassistantCode,
            // 'instock_status' => $request->chiefassistantInstock,
            'name' => $request->chiefassistantName,
            'photo' => $request->chiefassistantPhoto,
            'position' => $request->chiefassistantPosition,
            'date_of_birth' => $request->chiefassistantDoB,
            'nationality' => $request->chiefassistantNationality,
            'religion' => $request->chiefassistantReligion,
            'weight' => $request->chiefassistantWeight,
            'height' => $request->chiefassistantHeight,
            'salary' => $request->chiefassistantSalary,
            'language' => $request->chiefassistantLanguage,
            'status' => $request->chiefassistantStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->chiefassistantExperience,
            'pet' => $request->pets,
            'skill' => $request->chiefassistantSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->chiefassistantVaccine,
            'remark' => $request->chiefassistantRemark,
            'note' => $request->note,
            'stockstatus' => $request->chiefassistantStock,
        ];
    }
}

