<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maideldercare;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MaideldercareController extends Controller
{
    //
    public function maideldercarePage()
    {
        $maideldercares = Maideldercare::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $maideldercares->appends(request()->all());

        return view('admin.category.maid_eldercare.maideldercare', compact('maideldercares'));
    }


    // maideldercare after create
    public function maideldercareCreate(Request $request)
    {
        // dd($request->all());
        $this->maideldercareValidationCheck($request);
        $data = $this->requestMaideldercareData($request);

        // dd($data);

        // for photo
        // if($request->hasFile('maideldercarePhoto')){
        $fileName = uniqid() . '_' . $request->file('maideldercarePhoto')->getClientOriginalName();
        $request->file('maideldercarePhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;
        // dd($data);


        // }
        Maideldercare::create($data);

        return redirect()->route('maideldercare#page')->with(['createSuccess' => 'Maid, Eldercare Created...']);
    }


    // maideldercare delete
    public function maideldercareDelete($id)
    {
        Maideldercare::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'Maid, Eldercare Deleted...']);
    }

    // maideldercare edit
    public function maideldercareEdit($id)
    {
        $maideldercare = Maideldercare::where('id', $id)->first();
        return view('admin.category.maid_eldercare.maideldercareupdate', compact('maideldercare'));
    }

    // maideldercare edit page
    public function editPage($id)
    {
        $maideldercare = Maideldercare::where('id', $id)->first();
        return view('admin.category.maid_eldercare.editPage', compact('maideldercare'));
    }


    // maideldercare update
    public function maideldercareUpdate(Request $request)
    {
        //    dd('id', $request->all());
        $this->maideldercareValidationCheck($request);
        $data = $this->requestMaideldercareData($request);

        // photo
        if ($request->hasFile('maideldercarePhoto')) {
            $dbPhoto = Maideldercare::where('id', $request->maideldercareId)->first();
            $dbPhoto = $dbPhoto->maideldercarePhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }
        }

        $fileName = uniqid() . $request->file('maideldercarePhoto')->getClientOriginalName();
        $request->file('maideldercarePhoto')->storeAs('public', $fileName);
        $data['photo'] = $fileName;

        Maideldercare::where('id', $request->maideldercareId)->update($data);
        return redirect()->route('maideldercare#page');
    }

    // maideldercare validation check
    private function maideldercareValidationCheck($request)
    {
        // dd("validae");
        Validator::make($request->all(), [
            'maideldercareCode' => 'required|unique:maideldercares,code,' . $request->maideldercareId,
            'maideldercarePhoto' => 'required|mimes:jpg,jpeg,png|file',
            'maideldercareName' => 'required',
            'maideldercareDoB' => 'required',
            // 'maideldercarePosition' => 'required',
            'maideldercareNationality' => 'required',
            'maideldercareReligion' => 'required',
            'maideldercareWeight' => 'required',
            'maideldercareHeight' => 'required',
            'maideldercareStatus' => 'required',
            'maideldercareSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'maideldercareSkill' => 'required',
            'maideldercareExperience' => 'required',
            'maideldercareLanguage' => 'required',
            'pets' => 'required',
            'maideldercareStock' => 'required',
            // 'maideldercareRemark' => 'required',

        ], [
            // 'maideldercareCode.required' => 'u need to fill'
        ])->validate();
    }

    // request maideldercare Data
    private function requestMaideldercareData($request)
    {
        return [
            'code' => $request->maideldercareCode,
            // 'instock_status' => $request->maideldercareInstock,
            'name' => $request->maideldercareName,
            'photo' => $request->maideldercarePhoto,
            'position' => $request->maideldercarePosition,
            'date_of_birth' => $request->maideldercareDoB,
            'nationality' => $request->maideldercareNationality,
            'religion' => $request->maideldercareReligion,
            'weight' => $request->maideldercareWeight,
            'height' => $request->maideldercareHeight,
            'salary' => $request->maideldercareSalary,
            'language' => $request->maideldercareLanguage,
            'status' => $request->maideldercareStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->maideldercareExperience,
            'pet' => $request->pets,
            'skill' => $request->maideldercareSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->maideldercareVaccine,
            'remark' => $request->maideldercareRemark,
            'note' => $request->note,
            'stockstatus' => $request->maideldercareStock,
        ];
    }
}
