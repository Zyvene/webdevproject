<!--
The detail view for an employer to look at a specific applicant's resume and change their status via a dropdown.
-->
@extends('layouts.app')

@section('content')
    <div>Placeholder Application Single Evaluation View Header</div>
    <form method="POST" action="{{ route('applications.updateStatus', 1) }}">
        @csrf
        <div>Status Selection Dropdown Placeholder: 
            <select name="status">
                <option value="pending">Pending Option</option>
                <option value="accepted">Accepted Option</option>
            </select>
        </div>
        <button type="submit">Update Status Button Placeholder</button>
    </form>
@endsection