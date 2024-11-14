<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{


    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'Company_Id' => 'required|string',
            'Description' => 'nullable|string',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ], [
            'Company_Id.required' => 'Company is required.',
            'file_path.mimes' => 'The file type must be one of the following: PDF, DOC, DOCX, JPG, or PNG.',
            'file_path.max' => 'The file size must not exceed 2MB.',
        ]);

        try {
            // Create a new Requests instance
            $report = new Requests();
            $report->Added_By = Auth::id();
            $report->Updated_By = Auth::id();
            $report->Company_Id = $validatedData['Company_Id'];
            $report->Description = $validatedData['Description'];

            // Handle the file upload if it exists
            if ($request->hasFile('file_path')) {
                $file = $request->file('file_path');
                $filename = 'Requests_' . uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension(); // Unique filename
                $path = $file->storeAs('Requests_', $filename, 'public'); // Store file in storage/app/public/reports
                $report->file_path = 'storage/Requests_/' . $filename; // Save the file path in the database
            }

            $report->save();

            // Redirect to the index page with a success message
            return redirect()->route('Admin.Requests.Index')->with('success', 'Request added successfully!');
        } catch (\Exception $e) {
            // If there's an error, redirect back to the create page with an error message
            return redirect()->route('Admin.Requests.Create')->with('error', 'Failed to store the request: ' . $e->getMessage());
        }
    }



    public function download($id)
    {
        $file = File::where('id', $id)
            ->where(function ($query) {
                $query->where('user_id', Auth::id())
                      ->orWhere('shared_with_user_id', Auth::id());
            })
            ->firstOrFail();

        return Storage::download($file->file_path, $file->file_name);
    }

    public function Index()
    {

        $Requests=Requests::all();
        // return view('Admin.Files.index', compact('files', 'users', 'Sent_Files', 'Received_Files'));
        return view('Admin.Requests.Index', compact('Requests'));
    }
    public function ApproveIndex()
    {
        $Requests = Requests::where('Status', 'Pending')->get();
        return view('Admin.Requests.Approve', compact('Requests'));
    }
    public function ApproveCreate($id){
        $Request = Requests::find($id);
        return view('Admin.Requests.ApproveCreate',compact("Request"));
    }

    public function ApproveStatus($id)
    {
        try {
            $request = Requests::findOrFail($id);
            $request->status = 'Approved';
            $request->Approved_By = Auth::id();
            $request->save();

            return redirect()->route('Admin.Requests.Index', $id)->with('success', 'Request approved successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to approve the request: ' . $e->getMessage());
        }
    }

    public function Create(){
        $Companies = Company::all();

        return view('Admin.Requests.Create',compact("Companies"));
    }
}
