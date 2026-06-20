<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // applications: Lists applied jobs (for Applicants) OR lists applicants for a job (for Employers).

    // store: Submitting an application (Applicant).

    // update: Changing the status of an application (Employer).

    public function index() { return view('applications.applications'); }
    public function store(Request $request, $id) { return redirect()->route('applications.index'); }
    public function review($id) { return view('applications.review'); }
    public function updateStatus(Request $request, $id) { return redirect()->route('applications.index'); }
}