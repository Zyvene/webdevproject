<!--
The form to update details or upload a new PDF resume.
-->
@extends('layouts.app')

@section('content')
    <div>Placeholder Edit Profile Form Header</div>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <div>Name Input Text Placeholder: <input type="text" name="name"></div>
        <div>Bio Textarea Placeholder: <textarea name="bio"></textarea></div>
        <div>File Upload Input Placeholder: <input type="file" name="resume"></div>
        <input type="submit" value="Submit Button Placeholder">
    </form>
@endsection