<!-- resources/views/files/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload and Share Files</h2>

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- File Upload Form -->
    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose File:</label>
            <input type="file" name="file" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="shared_with_user_id">Share with:</label>
            <select name="shared_with_user_id" class="form-control" required>
                <option value="" disabled selected>Select a user</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Upload and Share</button>
    </form>

    <!-- Display Uploaded Files -->
    <h3 class="mt-5">Your Files</h3>
    <table class="table">
        <thead>
            <tr>
                <th>File Name</th>
                <th>Owner</th>
                <th>Shared With</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->file_name }}</td>
                    <td>{{ $file->UserId->name }}</td>
                    <td>{{ $file->SharedToUser->name }}</td>
                    <td>
                        <a href="{{ route('file.download', $file->id) }}" class="btn btn-success">Download</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
