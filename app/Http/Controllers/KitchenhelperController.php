<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kitchenhelper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KitchenhelperController extends Controller
{
    //

    public function kitchenhelperPage()
    {
        $kitchenhelpers = Kitchenhelper::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $kitchenhelpers->appends(request()->all());

        return view('admin.category.Type3.kitchenhelper.kitchenhelper', compact('kitchenhelpers'));
        // return view('admin.category.kitchenhelper.kitchenhelper');
    }

    public function kitchenhelperCreate(Request $request)
    {
        // dd($request->all);
        $this->kitchenhelperValidationCheck($request);
        $data = $this->requestkitchenhelperData($request);

        $fileName = uniqid() . '_' . $request->file('kitchenhelperPhoto')->getClientOriginalName();
        $request->file('kitchenhelperPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Kitchenhelper::create($data);

        return redirect()->route('kitchenhelper#page')->with(['createSuccess' => 'kitchenhelper Created...']);
    }

    public function kitchenhelperDelete($id)
    {
        Kitchenhelper::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'kitchenhelper Deleted...']);
    }

    // kitchenhelper edit
    public function kitchenhelperEdit($id)
    {
        $kitchenhelper = Kitchenhelper::where('id', $id)->first();
        return view('admin.category.Type3.kitchenhelper.kitchenhelperupdate', compact('kitchenhelper'));
    }

    // kitchenhelper edit page
    public function editPage($id)
    {
        $kitchenhelper = Kitchenhelper::where('id', $id)->first();
        return view('admin.category.Type3.kitchenhelper.editPage', compact('kitchenhelper'));
    }

    // kitchenhelper update
    public function kitchenhelperUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->kitchenhelperValidationCheck($request);
        $data = $this->requestkitchenhelperData($request);

        // photo
        if ($request->hasFile('kitchenhelperPhoto')) {
            $dbPhoto = Kitchenhelper::where('id', $id)->first();
            $dbPhoto = $dbPhoto->kitchenhelperPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('kitchenhelperPhoto')->getClientOriginalName();
            $request->file('kitchenhelperPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Kitchenhelper::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Kitchenhelper::where('id', $id)->update($data);
        return redirect()->route('kitchenhelper#page');
    }



    // kitchenhelper validation check
    private function kitchenhelperValidationCheck($request)
    {
        Validator::make($request->all(), [
            'kitchenhelperCode' => 'required|unique:kitchenhelpers,code,' . $request->kitchenhelperId,
            'kitchenhelperPhoto' => 'mimes:jpg,jpeg,png|file',
            'kitchenhelperName' => 'required',
            'kitchenhelperDoB' => 'required',
            // 'kitchenhelperPosition' => 'required',
            'kitchenhelperNationality' => 'required',
            'kitchenhelperReligion' => 'required',
            'kitchenhelperWeight' => 'required',
            'kitchenhelperHeight' => 'required',
            'kitchenhelperStatus' => 'required',
            'kitchenhelperSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'kitchenhelperSkill' => 'required',
            'kitchenhelperVaccine' => 'required',
            'kitchenhelperExperience' => 'required',
            'kitchenhelperLanguage' => 'required',
            'pets' => 'required',
            'kitchenhelperStock' => 'required',
            // 'kitchenhelperRemark' => 'required',
        ],)->validate();
    }



    // request kitchenhelper Data
    private function requestkitchenhelperData($request)
    {
        return [
            'code' => $request->kitchenhelperCode,
            // 'instock_status' => $request->kitchenhelperInstock,
            'name' => $request->kitchenhelperName,
            'photo' => $request->kitchenhelperPhoto,
            'position' => $request->kitchenhelperPosition,
            'date_of_birth' => $request->kitchenhelperDoB,
            'nationality' => $request->kitchenhelperNationality,
            'religion' => $request->kitchenhelperReligion,
            'weight' => $request->kitchenhelperWeight,
            'height' => $request->kitchenhelperHeight,
            'salary' => $request->kitchenhelperSalary,
            'language' => $request->kitchenhelperLanguage,
            'status' => $request->kitchenhelperStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->kitchenhelperExperience,
            'pet' => $request->pets,
            'skill' => $request->kitchenhelperSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->kitchenhelperVaccine,
            'remark' => $request->kitchenhelperRemark,
            'note' => $request->note,
            'stockstatus' => $request->kitchenhelperStock,
        ];
    }
}
