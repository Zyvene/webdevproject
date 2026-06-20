<!--
The register / sign-up form
-->

@extends('layouts.app')

@section('content')
    <div>Placeholder Register Header</div>
    <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        <div>Name Input Text Placeholder: <input type="text" name="name"></div>
        <div>Email Input Text Placeholder: <input type="text" name="email"></div>
        <div>Role Dropdown Placeholder: 
            <select name="role">
                <option value="applicant">Applicant Option Placeholder</option>
                <option value="employer">Employer Option Placeholder</option>
            </select>
        </div>
        <div>Password Input Text Placeholder: <input type="text" name="password"></div>
        <input type="submit" value="Submit Button Placeholder">
    </form>
@endsection