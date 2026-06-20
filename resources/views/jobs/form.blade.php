<!--
A shared file used for both creating and editing a job post (Employer only).
-->
@extends('layouts.app')

@section('content')
    <div>Placeholder Job Form Create or Edit Header</div>
    <form method="POST" action="{{ route('jobs.store') }}">
        @csrf
        <div>Title Input Text Placeholder: <input type="text" name="title"></div>
        <div>Description Textarea Placeholder: <textarea name="description"></textarea></div>
        <input type="submit" value="Submit Button Placeholder">
    </form>
@endsection