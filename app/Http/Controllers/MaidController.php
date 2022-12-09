<?php

namespace App\Http\Controllers;

use App\Models\Maid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MaidController extends Controller
{
    //
    public function maidPage()
    {
        $maids = Maid::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $maids->appends(request()->all());

        return view('admin.category.maid.maid', compact('maids'));
        // return view('admin.category.maid.maid');
    }

    public function maidCreate(Request $request)
    {
        // dd($request->all);
        $this->maidValidationCheck($request);
        $data = $this->requestMaidData($request);

        $fileName = uniqid() . '_' . $request->file('maidPhoto')->getClientOriginalName();
        $request->file('maidPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Maid::create($data);

        return redirect()->route('maid#page')->with(['createSuccess' => 'maid Created...']);
    }

    public function maidDelete($id)
    {
        Maid::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'maid Deleted...']);
    }

    // maid edit
    public function maidEdit($id)
    {
        $maid = Maid::where('id', $id)->first();
        return view('admin.category.maid.maidupdate', compact('maid'));
    }

    // maid edit page
    public function editPage($id)
    {
        $maid = Maid::where('id', $id)->first();
        return view('admin.category.maid.editPage', compact('maid'));
    }

    // maid update
    public function maidUpdate(Request $request)
    {
        //    dd('id', $request->all());
        $this->maidValidationCheck($request);
        $data = $this->requestmaidData($request);

        // photo
        if ($request->hasFile('maidPhoto')) {
            $dbPhoto = Maid::where('id', $request->maidId)->first();
            $dbPhoto = $dbPhoto->maidPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }
        }

        $fileName = uniqid() . $request->file('maidPhoto')->getClientOriginalName();
        $request->file('maidPhoto')->storeAs('public', $fileName);
        $data['photo'] = $fileName;

        Maid::where('id', $request->maidId)->update($data);
        return redirect()->route('maid#page');
    }



    // maid validation check
    private function maidValidationCheck($request)
    {
        Validator::make($request->all(), [
            'maidCode' => 'required|unique:maids,code,' . $request->maidId,
            'maidPhoto' => 'required|mimes:jpg,jpeg,png|file',
            'maidName' => 'required',
            'maidDoB' => 'required',
            // 'maidPosition' => 'required',
            'maidNationality' => 'required',
            'maidReligion' => 'required',
            'maidWeight' => 'required',
            'maidHeight' => 'required',
            'maidStatus' => 'required',
            'maidSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'maidSkill' => 'required',
            'maidVaccine' => 'required',
            'maidExperience' => 'required',
            'maidLanguage' => 'required',
            'maidRemark' => 'required',
        ],)->validate();
    }



    // request maid Data
    private function requestMaidData($request)
    {
        return [
            'code' => $request->maidCode,
            // 'instock_status' => $request->maidInstock,
            'name' => $request->maidName,
            'photo' => $request->maidPhoto,
            'position' => $request->maidPosition,
            'date_of_birth' => $request->maidDoB,
            'nationality' => $request->maidNationality,
            'religion' => $request->maidReligion,
            'weight' => $request->maidWeight,
            'height' => $request->maidHeight,
            'salary' => $request->maidSalary,
            'language' => $request->maidLanguage,
            'status' => $request->maidStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->maidExperience,
            'pet' => $request->pets,
            'skill' => $request->maidSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->maidVaccine,
            'remark' => $request->maidRemark,
            'note' => $request->note,

        ];
    }
}
