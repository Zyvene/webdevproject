<!--
The Homepage. Contains the search input, filter sidebar, and the list of jobs.
-->

@extends('layouts.app')

@section('content')
    <div>Placeholder Jobs List Title Header</div>
    <a href="{{ route('jobs.create') }}">Create Job Link Placeholder</a>
    
    <form method="GET" action="{{ route('jobs.index') }}">
        <input type="text" placeholder="Search Text Input Placeholder" name="param">
        <button type="submit">Search Button Placeholder</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Job Field Placeholder</th>
                <th>Action Link Placeholder</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="{{ route('jobs.show', 1) }}">Job View Link Placeholder</a></td>
                <td>
                    <a href="{{ route('jobs.edit', 1) }}">Edit Link Placeholder</a>
                    <form action="{{ route('jobs.destroy', 1) }}" method="POST">
                        @csrf
                        <button type="submit">Delete Button Placeholder</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection