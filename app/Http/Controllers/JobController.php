<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //index: Displays the job list with search filters (Public/Applicant).

    // show: Views a specific job details.

    // create / store / edit / update / destroy: Handled here but restricted to Employers via middleware.

    public function index() { return view('jobs.index'); }
    public function create() { return view('jobs.form', ['mode' => 'create']); }
    public function store(Request $request) { return redirect()->route('jobs.index'); }
    public function show($id) { return view('jobs.show'); }
    public function edit($id) { return view('jobs.form', ['mode' => 'edit']); }
    public function update(Request $request, $id) { return redirect()->route('jobs.show', $id); }
    public function destroy($id) { return redirect()->route('jobs.index'); }
}