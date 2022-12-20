<?php

namespace App\Http\Controllers;

use App\Models\Maidpetcare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MaidpetcareController extends Controller
{
    //
    public function maidpetcarePage()
    {
        $maidpetcares = Maidpetcare::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $maidpetcares->appends(request()->all());

        return view('admin.category.maid_petcare.maidpetcare', compact('maidpetcares'));
    }


    // maidpetcare after create
    public function maidpetcareCreate(Request $request)
    {
        // dd($request->all());
        $this->maidpetcareValidationCheck($request);
        $data = $this->requestMaidpetcareData($request);

        // dd($data);

        // for photo
        // if($request->hasFile('maidpetcarePhoto')){
        $fileName = uniqid() . '_' . $request->file('maidpetcarePhoto')->getClientOriginalName();
        $request->file('maidpetcarePhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;
        // dd($data);


        // }
        Maidpetcare::create($data);

        return redirect()->route('maidpetcare#page')->with(['createSuccess' => 'Maid, Pet Care Created...']);
    }


    // maidpetcare delete
    public function maidpetcareDelete($id)
    {
        Maidpetcare::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'Maid, Pet Care Deleted...']);
    }

    // maidpetcare edit
    public function maidpetcareEdit($id)
    {
        $maidpetcare = Maidpetcare::where('id', $id)->first();
        return view('admin.category.maid_petcare.maidpetcareupdate', compact('maidpetcare'));
    }

    // maidpetcare edit page
    public function editPage($id)
    {
        $maidpetcare = Maidpetcare::where('id', $id)->first();
        return view('admin.category.maid_petcare.editPage', compact('maidpetcare'));
    }


    // maidpetcare update
    public function maidpetcareUpdate(Request $request)
    {
        //    dd('id', $request->all());
        $this->maidpetcareValidationCheck($request);
        $data = $this->requestMaidpetcareData($request);

        // photo
        if ($request->hasFile('maidpetcarePhoto')) {
            $dbPhoto = Maidpetcare::where('id', $request->maidpetcareId)->first();
            $dbPhoto = $dbPhoto->maidpetcarePhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }
        }

        $fileName = uniqid() . $request->file('maidpetcarePhoto')->getClientOriginalName();
        $request->file('maidpetcarePhoto')->storeAs('public', $fileName);
        $data['photo'] = $fileName;

        Maidpetcare::where('id', $request->maidpetcareId)->update($data);
        return redirect()->route('maidpetcare#page');
    }

    // maidpetcare validation check
    private function maidpetcareValidationCheck($request)
    {
        // dd("validae");
        Validator::make($request->all(), [
            'maidpetcareCode' => 'required|unique:maidpetcares,code,' . $request->maidpetcareId,
            'maidpetcarePhoto' => 'required|mimes:jpg,jpeg,png|file',
            'maidpetcareName' => 'required',
            'maidpetcareDoB' => 'required',
            // 'maidpetcarePosition' => 'required',
            'maidpetcareNationality' => 'required',
            'maidpetcareReligion' => 'required',
            'maidpetcareWeight' => 'required',
            'maidpetcareHeight' => 'required',
            'maidpetcareStatus' => 'required',
            'maidpetcareSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'maidpetcareSkill' => 'required',
            'maidpetcareExperience' => 'required',
            'maidpetcareLanguage' => 'required',
            'pets' => 'required',
            'maidpetcareStock' => 'required',
            // 'maidpetcareRemark' => 'required',

        ], [
            // 'maidpetcareCode.required' => 'u need to fill'
        ])->validate();
    }

    // request maidpetcare Data
    private function requestMaidpetcareData($request)
    {
        return [
            'code' => $request->maidpetcareCode,
            // 'instock_status' => $request->maidpetcareInstock,
            'name' => $request->maidpetcareName,
            'photo' => $request->maidpetcarePhoto,
            'position' => $request->maidpetcarePosition,
            'date_of_birth' => $request->maidpetcareDoB,
            'nationality' => $request->maidpetcareNationality,
            'religion' => $request->maidpetcareReligion,
            'weight' => $request->maidpetcareWeight,
            'height' => $request->maidpetcareHeight,
            'salary' => $request->maidpetcareSalary,
            'language' => $request->maidpetcareLanguage,
            'status' => $request->maidpetcareStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->maidpetcareExperience,
            'pet' => $request->pets,
            'skill' => $request->maidpetcareSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->maidpetcareVaccine,
            'remark' => $request->maidpetcareRemark,
            'note' => $request->note,
            'stockstatus' => $request->maidpetcareStock,
        ];
    }
}
