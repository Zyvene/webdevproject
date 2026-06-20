<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // admin: The master moderation dashboard.

    // update: Approving/rejecting jobs or moderating users.

    public function index() { return view('admin.dashboard'); }
    public function moderateJob(Request $request, $id) { return redirect()->route('admin.dashboard'); }
}