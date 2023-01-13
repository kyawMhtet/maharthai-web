<?php

namespace App\Http\Controllers;

use App\Models\Gardener;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GardenerController extends Controller
{
    //

    public function gardenerPage()
    {
        $gardeners = Gardener::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $gardeners->appends(request()->all());

        return view('admin.category.Type2.gardener.gardener', compact('gardeners'));
        // return view('admin.category.gardener.gardener');
    }

    public function gardenerCreate(Request $request)
    {
        // dd($request->all);
        $this->gardenerValidationCheck($request);
        $data = $this->requestGardenerData($request);

        $fileName = uniqid() . '_' . $request->file('gardenerPhoto')->getClientOriginalName();
        $request->file('gardenerPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Gardener::create($data);

        return redirect()->route('gardener#page')->with(['createSuccess' => 'gardener Created...']);
    }

    public function gardenerDelete($id)
    {
        Gardener::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'gardener Deleted...']);
    }

    // gardener edit
    public function gardenerEdit($id)
    {
        $gardener = Gardener::where('id', $id)->first();
        return view('admin.category.Type2.gardener.gardenerupdate', compact('gardener'));
    }

    // gardener edit page
    public function editPage($id)
    {
        $gardener = Gardener::where('id', $id)->first();
        return view('admin.category.Type2.gardener.editPage', compact('gardener'));
    }

    // gardener update
    public function gardenerUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->gardenerValidationCheck($request);
        $data = $this->requestGardenerData($request);

        // photo
        if ($request->hasFile('gardenerPhoto')) {
            $dbPhoto = Gardener::where('id', $id)->first();
            $dbPhoto = $dbPhoto->gardenerPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('gardenerPhoto')->getClientOriginalName();
            $request->file('gardenerPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Gardener::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Gardener::where('id', $id)->update($data);
        return redirect()->route('gardener#page');
    }



    // gardener validation check
    private function gardenerValidationCheck($request)
    {
        Validator::make($request->all(), [
            'gardenerCode' => 'required|unique:gardeners,code,' . $request->gardenerId,
            'gardenerPhoto' => 'mimes:jpg,jpeg,png|file',
            'gardenerName' => 'required',
            'gardenerDoB' => 'required',
            // 'gardenerPosition' => 'required',
            'gardenerNationality' => 'required',
            'gardenerReligion' => 'required',
            'gardenerWeight' => 'required',
            'gardenerHeight' => 'required',
            'gardenerStatus' => 'required',
            'gardenerSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'gardenerSkill' => 'required',
            'gardenerVaccine' => 'required',
            'gardenerExperience' => 'required',
            'gardenerLanguage' => 'required',
            'pets' => 'required',
            'gardenerStock' => 'required',
            // 'gardenerRemark' => 'required',
        ],)->validate();
    }



    // request gardener Data
    private function requestGardenerData($request)
    {
        return [
            'code' => $request->gardenerCode,
            // 'instock_status' => $request->gardenerInstock,
            'name' => $request->gardenerName,
            'photo' => $request->gardenerPhoto,
            'position' => $request->gardenerPosition,
            'date_of_birth' => $request->gardenerDoB,
            'nationality' => $request->gardenerNationality,
            'religion' => $request->gardenerReligion,
            'weight' => $request->gardenerWeight,
            'height' => $request->gardenerHeight,
            'salary' => $request->gardenerSalary,
            'language' => $request->gardenerLanguage,
            'status' => $request->gardenerStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->gardenerExperience,
            'pet' => $request->pets,
            'skill' => $request->gardenerSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->gardenerVaccine,
            'remark' => $request->gardenerRemark,
            'note' => $request->note,
            'stockstatus' => $request->gardenerStock,
        ];
    }
}
