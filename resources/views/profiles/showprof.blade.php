<!--
Displays the user's profile.
If it's an applicant, this is their resume page. If it's an employer, it's their company bio.
-->
@extends('layouts.app')

@section('content')
    <div>Placeholder Profile Read View Header</div>
    <a href="{{ route('profile.edit') }}">Edit Profile Link Placeholder</a>
@endsection