<?php

namespace App\Http\Controllers;

// use Storage;
use App\Models\Nanny;
use Illuminate\Http\Request;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class NannyController extends Controller
{
    // nanny page
    public function nannyPage()
    {
        $nannies = Nanny::when(request('key'), function ($query) {
            $query->where('code', 'like', '%' . request('key') . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(9);
        $nannies->appends(request()->all());

        return view('admin.category.nanny', compact('nannies'));
    }

    // nanny after create
    public function nannyCreate(Request $request)
    {
        // dd($request->all());
        $this->nannyValidationCheck($request);
        $data = $this->requestNannyData($request);

        // dd($data);

        // for photo
        // if($request->hasFile('nannyPhoto')){
        $fileName = uniqid() . '_' . $request->file('nannyPhoto')->getClientOriginalName();
        $request->file('nannyPhoto')->storeAs('public', $fileName);

        $data['photo'] = $fileName;
        // dd($data);

        // }
        Nanny::create($data);

        return redirect()->route('nanny#page')->with(['createSuccess' => 'Nanny Created...']);
    }


    // nanny delete
    public function nannyDelete($id)
    {
        Nanny::where('id', $id)->delete();
        return back()->with(['deleteSuccess' => 'Nanny Deleted...']);
    }

    // nanny edit
    public function nannyEdit($id)
    {
        $nanny = Nanny::where('id', $id)->first();
        return view('admin.category.nannyupdate', compact('nanny'));
    }

    // nanny edit page
    public function editPage($id)
    {
        $nanny = Nanny::where('id', $id)->first();
        return view('admin.category.editPage', compact('nanny'));
    }

    // nanny update
    public function nannyUpdate(Request $request, $id)
    {
        $this->nannyValidationCheck($request);
        $data = $this->requestNannyData($request);

        // photo
        if ($request->hasFile('nannyPhoto')) {


            $dbPhoto = Nanny::where('id', $id)->first();
            $dbPhoto = $dbPhoto->photo;

            // dd($dbPhoto);
            if ($dbPhoto != null) {
                Storage::delete('public/' . $dbPhoto);
            }

            $fileName = uniqid() . $request->file('nannyPhoto')->getClientOriginalName();
            $request->file('nannyPhoto')->storeAs('public', $fileName);
            $data['photo'] = $fileName;
        } else {

            $dbPhoto = Nanny::where('id', $id)->first();

            $dbPhoto = $dbPhoto->photo;


            $data['photo'] = $dbPhoto;

        }

        Nanny::where('id', $id)->update($data);
        return redirect()->route('nanny#page');
    }



    // nanny validation check
    private function nannyValidationCheck($request)
    {
        // dd("validae");
        Validator::make($request->all(), [
            'nannyCode' => 'required|unique:nannies,code,' . $request->nannyId,
            'nannyPhoto' => 'mimes:jpg,jpeg,png|file',
            'nannyName' => 'required',
            'nannyDoB' => 'required',
            // 'nannyPosition' => 'required',
            'nannyNationality' => 'required',
            'nannyReligion' => 'required',
            'nannyWeight' => 'required',
            'nannyHeight' => 'required',
            'nannyStatus' => 'required',
            'nannySalary' => 'required',
            'full_part' => 'required',
            'live_in_out' => 'required',
            'nannySkill' => 'required',
            'nannyExperience' => 'required',
            'nannyLanguage' => 'required',
            'pets' => 'required',
            'nannyStock' => 'required',

            // 'nannyRemark' => 'required',

        ], [
            // 'nannyCode.required' => 'u need to fill'
        ])->validate();
    }

    // request nanny Data
    private function requestNannyData($request)
    {
        return [
            'code' => $request->nannyCode,
            // 'instock_status' => $request->nannyInstock,
            'name' => $request->nannyName,
            'photo' => $request->nannyPhoto,
            'position' => $request->nannyPosition,
            'date_of_birth' => $request->nannyDoB,
            'nationality' => $request->nannyNationality,
            'religion' => $request->nannyReligion,
            'weight' => $request->nannyWeight,
            'height' => $request->nannyHeight,
            'salary' => $request->nannySalary,
            'language' => $request->nannyLanguage,
            'status' => $request->nannyStatus,
            'full_part' => $request->full_part,
            'live_in_out' => $request->live_in_out,
            'experience' => $request->nannyExperience,
            'pet' => $request->pets,
            'skill' => $request->nannySkill,
            'pet_note' => $request->petNote,
            // 'dog_small' => $request->smallDog,
            // 'dog_big' => $request->bigDog,
            'vaccine' => $request->nannyVaccine,
            'remark' => $request->nannyRemark,
            'note' => $request->note,
            'stockstatus' => $request->nannyStock,

        ];
    }
}
