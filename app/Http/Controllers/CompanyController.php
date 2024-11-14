<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    // public function __construct() {
    //     $this->middleware('permission:Can_View_All_Car_Category', ['only' => ['Index']]);
    // }

    public function Create(){
        return view('Admin.Company.Create');
    }

    public function Destroy($id)
    {
        try
        {
            $Company = Company::find($id);

            $DeletedCompany = $Company->company_name;

            $Company->delete();

            // Logs::create([
            //     'Action' => $DeletedCompany . ' ',
            //     'UserId' => Auth::id(),
            // ]);

            return redirect()->route('Admin.Company.Index') ->with('success', $DeletedCompany .' የተሽከርካሪ አይነትን በተሳካ ሁኔታ ሰርዟል');
        }
        catch(\Exception $e) {
            throw $e;
        }

    }
    public function Edit($id)
    {
        $Company = Company::find($id);
        return view('Admin.Company.Edit',compact('Company'));
    }

    public function Index()
    {
        $Companies = Company::orderByDesc('created_at')->paginate(50);
        return view('Admin.Company.Index',compact("Companies"));
    }

    public function Store(Request $request)
    {
        // dd("hello");
        $ValidatedData= $request->validate([
            'Name' => 'required|unique:companies,Name',
            'Description' => 'nullable|string',


        ], [
            'Name.required' => 'Company name is required',
            'Name.unique' => $request->company_name .  ' Can not be submitted again',
        ]);

        $Company = new Company($ValidatedData);
        $Company->Added_By = Auth::id();
        $Company->Updated_By=Auth::id();
        $Company->save();
        // Logs::create([
        //     'Action' => $ValidatedData['company_name'] . ' Is registered',
        //     'UserId' => Auth::id(),
        // ]);
        return redirect()->route('Admin.Company.Index')->with('success', $ValidatedData['Name'] . ' Is registered successfully');
    }

    public function Show($id){
        $Company = Company::find($id);
        return view('Admin.Company.Show',compact("Company"));
    }

    public function Update(Request $request, $id)
    {
        $Company = Company::find($id);

        $ValidatedData = $request->validate([
            'comapany_name' => 'required|unique:companies,Name,' . $Company->id,
        ], [
            'comapany_name.required' => 'Company Name is empty',
            'comapany_name.unique' => $request->comapany_name . ' This company name is already registered',
        ]);

        $Company->fill($ValidatedData);
        $Company->save();

        // Logs::create([
        //     'Action' => $ValidatedData['company_name'] . ' Is updated',
        //     'UserId' => Auth::id(),
        // ]);

        return redirect()->route('Admin.Company.Index')->with('success', 'Company is updated');
    }
}
