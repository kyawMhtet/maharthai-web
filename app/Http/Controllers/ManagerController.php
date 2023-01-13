<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{
    //

    public function managerPage()
    {
        $managers = Manager::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $managers->appends(request()->all());

        return view('admin.category.Type3.manager.manager', compact('managers'));
        // return view('admin.category.cashier.cashier');
    }

    public function managerCreate(Request $request)
    {
        // dd($request->all);
        $this->managerValidationCheck($request);
        $data = $this->requestManagerData($request);

        $fileName = uniqid() . '_' . $request->file('managerPhoto')->getClientOriginalName();
        $request->file('managerPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Manager::create($data);

        return redirect()->route('manager#page')->with(['createSuccess' => 'manager Created...']);
    }

    public function managerDelete($id)
    {
        Manager::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'manager Deleted...']);
    }

    // manager edit
    public function managerEdit($id)
    {
        $manager = Manager::where('id', $id)->first();
        return view('admin.category.Type3.manager.managerupdate', compact('manager'));
    }

    // manager edit page
    public function editPage($id)
    {
        $manager = Manager::where('id', $id)->first();
        return view('admin.category.Type3.manager.editPage', compact('manager'));
    }

    // manager update
    public function managerUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->managerValidationCheck($request);
        $data = $this->requestManagerData($request);

        // photo
        if ($request->hasFile('managerPhoto')) {
            $dbPhoto = Manager::where('id', $id)->first();
            $dbPhoto = $dbPhoto->managerPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('managerPhoto')->getClientOriginalName();
            $request->file('managerPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Manager::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Manager::where('id', $id)->update($data);
        return redirect()->route('manager#page');
    }



    // manager validation check
    private function managerValidationCheck($request)
    {
        Validator::make($request->all(), [
            'managerCode' => 'required|unique:managers,code,' . $request->managerId,
            'managerPhoto' => 'mimes:jpg,jpeg,png|file',
            'managerName' => 'required',
            'managerDoB' => 'required',
            // 'managerPosition' => 'required',
            'managerNationality' => 'required',
            'managerReligion' => 'required',
            'managerWeight' => 'required',
            'managerHeight' => 'required',
            'managerStatus' => 'required',
            'managerSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'managerSkill' => 'required',
            'managerVaccine' => 'required',
            'managerExperience' => 'required',
            'managerLanguage' => 'required',
            'pets' => 'required',
            'managerStock' => 'required',
            // 'managerRemark' => 'required',
        ],)->validate();
    }



    // request manager Data
    private function requestManagerData($request)
    {
        return [
            'code' => $request->managerCode,
            // 'instock_status' => $request->managerInstock,
            'name' => $request->managerName,
            'photo' => $request->managerPhoto,
            'position' => $request->managerPosition,
            'date_of_birth' => $request->managerDoB,
            'nationality' => $request->managerNationality,
            'religion' => $request->managerReligion,
            'weight' => $request->managerWeight,
            'height' => $request->managerHeight,
            'salary' => $request->managerSalary,
            'language' => $request->managerLanguage,
            'status' => $request->managerStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->managerExperience,
            'pet' => $request->pets,
            'skill' => $request->managerSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->managerVaccine,
            'remark' => $request->managerRemark,
            'note' => $request->note,
            'stockstatus' => $request->managerStock,
        ];
    }
}
