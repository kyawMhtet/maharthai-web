<?php

namespace App\Http\Controllers;

use App\Models\Premiumnanny;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PremiumnannyController extends Controller
{
    //
    public function premiumnannyPage()
    {
        $premiumnannies = Premiumnanny::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $premiumnannies->appends(request()->all());

        return view('admin.category.premium_nanny.premiumnanny', compact('premiumnannies'));
    }


    // premiumnanny after create
    public function premiumnannyCreate(Request $request)
    {
        // dd($request->all());
        $this->premiumnannyValidationCheck($request);
        $data = $this->requestPremiumnannyData($request);

        // dd($data);

        // for photo
        // if($request->hasFile('premiumnannyPhoto')){
        $fileName = uniqid() . '_' . $request->file('premiumnannyPhoto')->getClientOriginalName();
        $request->file('premiumnannyPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;
        // dd($data);


        // }
        Premiumnanny::create($data);

        return redirect()->route('premiumnanny#page')->with(['createSuccess' => 'Premium Nanny Created...']);
    }


    // premiumnanny delete
    public function premiumnannyDelete($id)
    {
        Premiumnanny::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'Premium Nanny Deleted...']);
    }

    // premiumnanny edit
    public function premiumnannyEdit($id)
    {
        $premiumnanny = Premiumnanny::where('id', $id)->first();
        return view('admin.category.premium_nanny.premiumnannyupdate', compact('premiumnanny'));
    }

    // premiumnanny edit page
    public function editPage($id)
    {
        $premiumnanny = Premiumnanny::where('id', $id)->first();
        return view('admin.category.premium_nanny.editPage', compact('premiumnanny'));
    }


    // premiumnanny update
    public function premiumnannyUpdate(Request $request, $id)
    {
        //    dd('id', $request->all());
        $this->premiumnannyValidationCheck($request);
        $data = $this->requestPremiumnannyData($request);

        // photo
        if ($request->hasFile('premiumnannyPhoto')) {


            $dbPhoto = Premiumnanny::where('id', $id)->first();
            $dbPhoto = $dbPhoto->photo;

            // dd($dbPhoto);
            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('premiumnannyPhoto')->getClientOriginalName();
            $request->file('premiumnannyPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {

            $dbPhoto = Premiumnanny::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;

        }

        Premiumnanny::where('id', $id)->update($data);
        return redirect()->route('premiumnanny#page');
    }

    // premiumnanny validation check
    private function premiumnannyValidationCheck($request)
    {
        // dd("validae");
        Validator::make($request->all(), [
            'premiumnannyCode' => 'required|unique:premiumnannies,code,' . $request->premiumnannyId,
            'premiumnannyPhoto' => 'mimes:jpg,jpeg,png|file',
            'premiumnannyName' => 'required',
            'premiumnannyDoB' => 'required',
            // 'premiumnannyPosition' => 'required',
            'premiumnannyNationality' => 'required',
            'premiumnannyReligion' => 'required',
            'premiumnannyWeight' => 'required',
            'premiumnannyHeight' => 'required',
            'premiumnannyStatus' => 'required',
            'premiumnannySalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'premiumnannySkill' => 'required',
            'premiumnannyExperience' => 'required',
            'premiumnannyLanguage' => 'required',
            'pets' => 'required',
            'premiumnannyStock' => 'required',
            // 'premiumnannyRemark' => 'required',

        ], [
            // 'premiumnannyCode.required' => 'u need to fill'
        ])->validate();
    }

    // request premiumnanny Data
    private function requestPremiumnannyData($request)
    {
        return [
            'code' => $request->premiumnannyCode,
            // 'instock_status' => $request->premiumnannyInstock,
            'name' => $request->premiumnannyName,
            'photo' => $request->premiumnannyPhoto,
            'position' => $request->premiumnannyPosition,
            'date_of_birth' => $request->premiumnannyDoB,
            'nationality' => $request->premiumnannyNationality,
            'religion' => $request->premiumnannyReligion,
            'weight' => $request->premiumnannyWeight,
            'height' => $request->premiumnannyHeight,
            'salary' => $request->premiumnannySalary,
            'language' => $request->premiumnannyLanguage,
            'status' => $request->premiumnannyStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->premiumnannyExperience,
            'pet' => $request->pets,
            'skill' => $request->premiumnannySkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->premiumnannyVaccine,
            'remark' => $request->premiumnannyRemark,
            'note' => $request->note,
            'stockstatus' => $request->premiumnannyStock,
        ];
    }
}
