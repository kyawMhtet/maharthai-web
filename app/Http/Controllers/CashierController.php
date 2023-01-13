<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CashierController extends Controller
{
    //

    public function cashierPage()
    {
        $cashiers = Cashier::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $cashiers->appends(request()->all());

        return view('admin.category.Type3.cashier.cashier', compact('cashiers'));
        // return view('admin.category.cashier.cashier');
    }

    public function cashierCreate(Request $request)
    {
        // dd($request->all);
        $this->cashierValidationCheck($request);
        $data = $this->requestCashierData($request);

        $fileName = uniqid() . '_' . $request->file('cashierPhoto')->getClientOriginalName();
        $request->file('cashierPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Cashier::create($data);

        return redirect()->route('cashier#page')->with(['createSuccess' => 'cashier Created...']);
    }

    public function cashierDelete($id)
    {
        Cashier::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'cashier Deleted...']);
    }

    // cashier edit
    public function cashierEdit($id)
    {
        $cashier = Cashier::where('id', $id)->first();
        return view('admin.category.Type3.cashier.cashierupdate', compact('cashier'));
    }

    // cashier edit page
    public function editPage($id)
    {
        $cashier = Cashier::where('id', $id)->first();
        return view('admin.category.Type3.cashier.editPage', compact('cashier'));
    }

    // cashier update
    public function cashierUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->cashierValidationCheck($request);
        $data = $this->requestCashierData($request);

        // photo
        if ($request->hasFile('cashierPhoto')) {
            $dbPhoto = Cashier::where('id', $id)->first();
            $dbPhoto = $dbPhoto->cashierPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('cashierPhoto')->getClientOriginalName();
            $request->file('cashierPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Cashier::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Cashier::where('id', $id)->update($data);
        return redirect()->route('cashier#page');
    }



    // cashier validation check
    private function cashierValidationCheck($request)
    {
        Validator::make($request->all(), [
            'cashierCode' => 'required|unique:cashiers,code,' . $request->cashierId,
            'cashierPhoto' => 'mimes:jpg,jpeg,png|file',
            'cashierName' => 'required',
            'cashierDoB' => 'required',
            // 'cashierPosition' => 'required',
            'cashierNationality' => 'required',
            'cashierReligion' => 'required',
            'cashierWeight' => 'required',
            'cashierHeight' => 'required',
            'cashierStatus' => 'required',
            'cashierSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'cashierSkill' => 'required',
            'cashierVaccine' => 'required',
            'cashierExperience' => 'required',
            'cashierLanguage' => 'required',
            'pets' => 'required',
            'cashierStock' => 'required',
            // 'cashierRemark' => 'required',
        ],)->validate();
    }



    // request cashier Data
    private function requestCashierData($request)
    {
        return [
            'code' => $request->cashierCode,
            // 'instock_status' => $request->cashierInstock,
            'name' => $request->cashierName,
            'photo' => $request->cashierPhoto,
            'position' => $request->cashierPosition,
            'date_of_birth' => $request->cashierDoB,
            'nationality' => $request->cashierNationality,
            'religion' => $request->cashierReligion,
            'weight' => $request->cashierWeight,
            'height' => $request->cashierHeight,
            'salary' => $request->cashierSalary,
            'language' => $request->cashierLanguage,
            'status' => $request->cashierStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->cashierExperience,
            'pet' => $request->pets,
            'skill' => $request->cashierSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->cashierVaccine,
            'remark' => $request->cashierRemark,
            'note' => $request->note,
            'stockstatus' => $request->cashierStock,
        ];
    }
}
