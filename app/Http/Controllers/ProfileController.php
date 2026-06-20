<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //show: Displays the profile/resume.

    // edit / update: Editing profile details or uploading a resume file.

    public function show() { return view('profiles.showprof'); }
    public function edit() { return view('profiles.editprof'); }
    public function update(Request $request) { return redirect()->route('profile.show'); }
}