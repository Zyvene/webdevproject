<!--
The log-in / sign-in form
-->

@extends('layouts.app')

@section('content')
    <div>Placeholder Login Header</div>
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <div>Email Input Text Placeholder: <input type="text" name="email"></div>
        <div>Password Input Text Placeholder: <input type="text" name="password"></div>
        <input type="submit" value="Submit Button Placeholder">
    </form>
@endsection