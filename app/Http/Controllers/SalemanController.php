<?php

namespace App\Http\Controllers;

use App\Models\Saleman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SalemanController extends Controller
{
    //

    public function salemanPage()
    {
        $salemen = Saleman::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $salemen->appends(request()->all());

        return view('admin.category.Type2.saleman.saleman', compact('salemen'));
        // return view('admin.category.saleman.saleman');
    }

    public function salemanCreate(Request $request)
    {
        // dd($request->all);
        $this->salemanValidationCheck($request);
        $data = $this->requestSalemanData($request);

        $fileName = uniqid() . '_' . $request->file('salemanPhoto')->getClientOriginalName();
        $request->file('salemanPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;


        // }
        Saleman::create($data);

        return redirect()->route('saleman#page')->with(['createSuccess' => 'saleman Created...']);
    }

    public function salemanDelete($id)
    {
        Saleman::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'saleman Deleted...']);
    }

    // saleman edit
    public function salemanEdit($id)
    {
        $saleman = Saleman::where('id', $id)->first();
        return view('admin.category.Type2.saleman.salemanupdate', compact('saleman'));
    }

    // saleman edit page
    public function editPage($id)
    {
        $saleman = Saleman::where('id', $id)->first();
        return view('admin.category.Type2.saleman.salemaneditPage', compact('saleman'));
    }

    // saleman update
    public function salemanUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->salemanValidationCheck($request);
        $data = $this->requestSalemanData($request);

        // photo
        if ($request->hasFile('salemanPhoto')) {
            $dbPhoto = Saleman::where('id', $id)->first();
            $dbPhoto = $dbPhoto->salemanPhoto;

            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('salemanPhoto')->getClientOriginalName();
            $request->file('salemanPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {
            $dbPhoto = Saleman::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;
        }



        Saleman::where('id', $id)->update($data);
        return redirect()->route('saleman#page');
    }



    // saleman validation check
    private function salemanValidationCheck($request)
    {
        Validator::make($request->all(), [
            'salemanCode' => 'required|unique:salemen,code,' . $request->salemanId,
            'salemanPhoto' => 'mimes:jpg,jpeg,png|file',
            'salemanName' => 'required',
            'salemanDoB' => 'required',
            // 'salemanPosition' => 'required',
            'salemanNationality' => 'required',
            'salemanReligion' => 'required',
            'salemanWeight' => 'required',
            'salemanHeight' => 'required',
            'salemanStatus' => 'required',
            'salemanSalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'salemanSkill' => 'required',
            'salemanVaccine' => 'required',
            'salemanExperience' => 'required',
            'salemanLanguage' => 'required',
            'pets' => 'required',
            'salemanStock' => 'required',
            // 'salemanRemark' => 'required',
        ],)->validate();
    }



    // request saleman Data
    private function requestSalemanData($request)
    {
        return [
            'code' => $request->salemanCode,
            // 'instock_status' => $request->salemanInstock,
            'name' => $request->salemanName,
            'photo' => $request->salemanPhoto,
            'position' => $request->salemanPosition,
            'date_of_birth' => $request->salemanDoB,
            'nationality' => $request->salemanNationality,
            'religion' => $request->salemanReligion,
            'weight' => $request->salemanWeight,
            'height' => $request->salemanHeight,
            'salary' => $request->salemanSalary,
            'language' => $request->salemanLanguage,
            'status' => $request->salemanStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->salemanExperience,
            'pet' => $request->pets,
            'skill' => $request->salemanSkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->salemanVaccine,
            'remark' => $request->salemanRemark,
            'note' => $request->note,
            'stockstatus' => $request->salemanStock,
        ];
    }
}
