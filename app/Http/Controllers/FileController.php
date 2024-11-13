<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
            'shared_with_user_id' => 'required|exists:users,id',
        ]);

        // Store the file
        $path = $request->file('file')->store('uploads');

        // Save file info to database
        File::create([
            'file_name' => $request->file('file')->getClientOriginalName(),
            'file_path' => $path,
            'user_id' => Auth::id(),
            'shared_with_user_id' => $request->input('shared_with_user_id'),
            'read' => 0,
        ]);
        
        return back()->with('success', 'File uploaded and shared successfully.');
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

    public function index()
    {
        $files = File::where('user_id', Auth::id())
                    ->orWhere('shared_with_user_id', Auth::id())
                    ->get();

        $Sent_Files = File::where('user_id', Auth::id())->get();

        $Received_Files = File::where('shared_with_user_id', Auth::id())->get();

        $users = User::where('id', '!=', Auth::id())->get();

        // return view('Admin.Files.index', compact('files', 'users', 'Sent_Files', 'Received_Files'));
        return view('Admin.index', compact('files', 'users', 'Sent_Files', 'Received_Files'));
    }

    public function send()
    {
        $files = File::where('user_id', Auth::id())
                    ->orWhere('shared_with_user_id', Auth::id())
                    ->get();

        $Sent_Files = File::where('user_id', Auth::id())->get();

        $Received_Files = File::where('shared_with_user_id', Auth::id())->get();

        $users = User::where('id', '!=', Auth::id())->get();

        // return view('Admin.Files.index', compact('files', 'users', 'Sent_Files', 'Received_Files'));
        return view('Admin.Files.Send', compact('files', 'users', 'Sent_Files', 'Received_Files'));
    }
}
