<?php

namespace App\Http\Controllers;

use App\Models\Maidcook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MaidcookController extends Controller
{
    //

    public function maidcookPage()
    {
        $maidcooks = Maidcook::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $maidcooks->appends(request()->all());

        return view('admin.category.maid_cook.maidcook', compact('maidcooks'));
    }


    // maidcook after create
    public function maidcookCreate(Request $request)
    {
        // dd($request->all());
        $this->maidcookValidationCheck($request);
        $data = $this->requestMaidcookData($request);

        // dd($data);

        // for photo
        // if($request->hasFile('maidcookPhoto')){
        $fileName = uniqid() . '_' . $request->file('maidcookPhoto')->getClientOriginalName();
        $request->file('maidcookPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;
        // dd($data);


        // }
        Maidcook::create($data);

        return redirect()->route('maidcook#page')->with(['createSuccess' => 'Maid, Cook Created...']);
    }


    // maidcook delete
    public function maidcookDelete($id)
    {
        Maidcook::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'Maid, Cook Deleted...']);
    }

    // maidcook edit
    public function maidcookEdit($id)
    {
        $maidcook = Maidcook::where('id', $id)->first();
        return view('admin.category.maid_cook.maidcookupdate', compact('maidcook'));
    }

    // maidcook edit page
    public function editPage($id)
    {
        $maidcook = Maidcook::where('id', $id)->first();
        return view('admin.category.maid_cook.editPage', compact('maidcook'));
    }


    // maidcook update
    public function maidcookUpdate(Request $request)
    {
        //    dd('id', $request->all());
        $this->maidcookValidationCheck($request);
        $data = $this->requestMaidcookData($request);

        // photo
        if ($request->hasFile('maidcookPhoto')) {
            $dbPhoto = Maidcook::where('id', $request->maidcookId)->first();
            $dbPhoto = $dbPhoto->maidcookPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }
        }

        $fileName = uniqid() . $request->file('maidcookPhoto')->getClientOriginalName();
        $request->file('maidcookPhoto')->storeAs('public', $fileName);
        $data['photo'] = $fileName;

        Maidcook::where('id', $request->maidcookId)->update($data);
        return redirect()->route('maidcook#page');
    }

    // maidcook validation check
    private function maidcookValidationCheck($request)
    {
        // dd("validae");
        Validator::make($request->all(), [
            'maidcookCode' => 'required|unique:maidcooks,code,' . $request->maidcookId,
            'maidcookPhoto' => 'required|mimes:jpg,jpeg,png|file',
            'maidcookName' => 'required',
            'maidcookDoB' => 'required',
            // 'maidcookPosition' => 'required',
            'maidcookNationality' => 'required',
            'maidcookReligion' => 'required',
            'maidcookWeight' => 'required',
            'maidcookHeight' => 'required',
            'maidcookStatus' => 'required',
            'maidcookSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'maidcookSkill' => 'required',
            'maidcookExperience' => 'required',
            'maidcookLanguage' => 'required',
            'pets' => 'required',
            'maidcookStock' => 'required',
            // 'maidcookRemark' => 'required',

        ], [
            // 'maidcookCode.required' => 'u need to fill'
        ])->validate();
    }

    // request maidcook Data
    private function requestMaidcookData($request)
    {
        return [
            'code' => $request->maidcookCode,
            // 'instock_status' => $request->maidcookInstock,
            'name' => $request->maidcookName,
            'photo' => $request->maidcookPhoto,
            'position' => $request->maidcookPosition,
            'date_of_birth' => $request->maidcookDoB,
            'nationality' => $request->maidcookNationality,
            'religion' => $request->maidcookReligion,
            'weight' => $request->maidcookWeight,
            'height' => $request->maidcookHeight,
            'salary' => $request->maidcookSalary,
            'language' => $request->maidcookLanguage,
            'status' => $request->maidcookStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->maidcookExperience,
            'pet' => $request->pets,
            'skill' => $request->maidcookSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->maidcookVaccine,
            'remark' => $request->maidcookRemark,
            'note' => $request->note,
            'stockstatus' => $request->maidcookStock,
        ];
    }
}
