<?php

namespace App\Http\Controllers;

use App\Models\Helper;
// use App\Models\helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HelperController extends Controller
{
    //

    public function helperPage()
    {
        $helpers = Helper::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $helpers->appends(request()->all());

        return view('admin.category.Type3.helperworker.helper', compact('helpers'));
        // return view('admin.category.helper.helper');
    }

    public function helperCreate(Request $request)
    {
        // dd($request->all);
        $this->helperValidationCheck($request);
        $data = $this->requesthelperData($request);

        $fileName = uniqid() . '_' . $request->file('helperPhoto')->getClientOriginalName();
        $request->file('helperPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Helper::create($data);

        return redirect()->route('helper#page')->with(['createSuccess' => 'helper Created...']);
    }

    public function helperDelete($id)
    {
        Helper::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'helper Deleted...']);
    }

    // helper edit
    public function helperEdit($id)
    {
        $helper = Helper::where('id', $id)->first();
        return view('admin.category.Type3.helperworker.helperupdate', compact('helper'));
    }

    // helper edit page
    public function editPage($id)
    {
        $helper = Helper::where('id', $id)->first();
        return view('admin.category.Type3.helperworker.editPage', compact('helper'));
    }

    // helper update
    public function helperUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->helperValidationCheck($request);
        $data = $this->requesthelperData($request);

        // photo
        if ($request->hasFile('helperPhoto')) {
            $dbPhoto = Helper::where('id', $id)->first();
            $dbPhoto = $dbPhoto->helperPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('helperPhoto')->getClientOriginalName();
            $request->file('helperPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Helper::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Helper::where('id', $id)->update($data);
        return redirect()->route('helper#page');
    }



    // helper validation check
    private function helperValidationCheck($request)
    {
        Validator::make($request->all(), [
            'helperCode' => 'required|unique:helpers,code,' . $request->helperId,
            'helperPhoto' => 'mimes:jpg,jpeg,png|file',
            'helperName' => 'required',
            'helperDoB' => 'required',
            // 'helperPosition' => 'required',
            'helperNationality' => 'required',
            'helperReligion' => 'required',
            'helperWeight' => 'required',
            'helperHeight' => 'required',
            'helperStatus' => 'required',
            'helperSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'helperSkill' => 'required',
            'helperVaccine' => 'required',
            'helperExperience' => 'required',
            'helperLanguage' => 'required',
            'pets' => 'required',
            'helperStock' => 'required',
            // 'helperRemark' => 'required',
        ],)->validate();
    }



    // request helper Data
    private function requesthelperData($request)
    {
        return [
            'code' => $request->helperCode,
            // 'instock_status' => $request->helperInstock,
            'name' => $request->helperName,
            'photo' => $request->helperPhoto,
            'position' => $request->helperPosition,
            'date_of_birth' => $request->helperDoB,
            'nationality' => $request->helperNationality,
            'religion' => $request->helperReligion,
            'weight' => $request->helperWeight,
            'height' => $request->helperHeight,
            'salary' => $request->helperSalary,
            'language' => $request->helperLanguage,
            'status' => $request->helperStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->helperExperience,
            'pet' => $request->pets,
            'skill' => $request->helperSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->helperVaccine,
            'remark' => $request->helperRemark,
            'note' => $request->note,
            'stockstatus' => $request->helperStock,
        ];
    }
}
