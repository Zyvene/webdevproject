<!--
Detailed view of a single job with an "Apply Now" button.
-->
@extends('layouts.app')

@section('content')
    <div>Placeholder Single Job Detail View Header</div>
    <form action="{{ route('applications.store', 1) }}" method="POST">
        @csrf
        <button type="submit">Apply Action Button Placeholder</button>
    </form>
@endsection