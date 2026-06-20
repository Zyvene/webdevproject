<!--
A polymorphic list.
If logged in as an applicant, it shows "My Applications". If logged in as an employer, it shows "Received Applications".
-->
@extends('layouts.app')

@section('content')
    <div>Placeholder Applications Track List Table Header</div>
    <table border="1">
        <thead>
            <tr>
                <th>Application Column Placeholder</th>
                <th>Review Direct Link Hook Placeholder</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Application Info Text String</td>
                <td><a href="{{ route('applications.review', 1) }}">Review Single Application Link Placeholder</a></td>
            </tr>
        </tbody>
    </table>
@endsection