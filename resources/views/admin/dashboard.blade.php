<!--
A single, tabbed page for managing the job queue and flagged items.
-->
@extends('layouts.app')

@section('content')
    <div>Placeholder Admin Management Main Screen Header</div>
    <table border="1">
        <thead>
            <tr>
                <th>Moderate Item Queue Placeholder</th>
                <th>Moderation Decision Action Form Placeholders</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pending Item Row Content Data</td>
                <td>
                    <form action="{{ route('admin.jobs.moderate', 1) }}" method="POST">
                        @csrf
                        <input type="hidden" name="action" value="approve">
                        <button type="submit">Approve Button Placeholder</button>
                    </form>
                    <form action="{{ route('admin.jobs.moderate', 1) }}" method="POST">
                        @csrf
                        <input type="hidden" name="action" value="reject">
                        <button type="submit">Reject Button Placeholder</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection