<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    //

    public function driverPage()
    {
        $drivers = Driver::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $drivers->appends(request()->all());

        return view('admin.category.Type2.driver.driver', compact('drivers'));
        // return view('admin.category.driver.driver');
    }

    public function driverCreate(Request $request)
    {
        // dd($request->all);
        $this->driverValidationCheck($request);
        $data = $this->requestDriverData($request);

        $fileName = uniqid() . '_' . $request->file('driverPhoto')->getClientOriginalName();
        $request->file('driverPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Driver::create($data);

        return redirect()->route('driver#page')->with(['createSuccess' => 'driver Created...']);
    }

    public function driverDelete($id)
    {
        Driver::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'driver Deleted...']);
    }

    // driver edit
    public function driverEdit($id)
    {
        $driver = Driver::where('id', $id)->first();
        return view('admin.category.Type2.driver.driverupdate', compact('driver'));
    }

    // driver edit page
    public function editPage($id)
    {
        $driver = Driver::where('id', $id)->first();
        return view('admin.category.Type2.driver.editPage', compact('driver'));
    }

    // driver update
    public function driverUpdate(Request $request)
    {
        //    dd('id', $request->all());
        $this->driverValidationCheck($request);
        $data = $this->requestdriverData($request);

        // photo
        if ($request->hasFile('driverPhoto')) {
            $dbPhoto = Driver::where('id', $request->driverId)->first();
            $dbPhoto = $dbPhoto->driverPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }
        }

        $fileName = uniqid() . $request->file('driverPhoto')->getClientOriginalName();
        $request->file('driverPhoto')->storeAs('public', $fileName);
        $data['photo'] = $fileName;

        Driver::where('id', $request->driverId)->update($data);
        return redirect()->route('driver#page');
    }



    // driver validation check
    private function driverValidationCheck($request)
    {
        Validator::make($request->all(), [
            'driverCode' => 'required|unique:drivers,code,' . $request->driverId,
            'driverPhoto' => 'required|mimes:jpg,jpeg,png|file',
            'driverName' => 'required',
            'driverDoB' => 'required',
            // 'driverPosition' => 'required',
            'driverNationality' => 'required',
            'driverReligion' => 'required',
            'driverWeight' => 'required',
            'driverHeight' => 'required',
            'driverStatus' => 'required',
            'driverSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'driverSkill' => 'required',
            'driverVaccine' => 'required',
            'driverExperience' => 'required',
            'driverLanguage' => 'required',
            'pets' => 'required',
            'driverStock' => 'required',
            // 'driverRemark' => 'required',
        ],)->validate();
    }



    // request driver Data
    private function requestDriverData($request)
    {
        return [
            'code' => $request->driverCode,
            // 'instock_status' => $request->driverInstock,
            'name' => $request->driverName,
            'photo' => $request->driverPhoto,
            'position' => $request->driverPosition,
            'date_of_birth' => $request->driverDoB,
            'nationality' => $request->driverNationality,
            'religion' => $request->driverReligion,
            'weight' => $request->driverWeight,
            'height' => $request->driverHeight,
            'salary' => $request->driverSalary,
            'language' => $request->driverLanguage,
            'status' => $request->driverStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->driverExperience,
            'pet' => $request->pets,
            'skill' => $request->driverSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->driverVaccine,
            'remark' => $request->driverRemark,
            'note' => $request->note,
            'stockstatus' => $request->driverStock,
        ];
    }
}
