<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function postLoginA(Request $request)
    {
        $validatedData = $request->validate([
            'Admin_Username' => 'required',
            'Admin_Pass' => 'required',
        ]);

        $credentials = $request->only('Admin_Username', 'Admin_Pass');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('admin/address');
        } else {
            return back()->with('Fail', 'Invalid username or password');
        }
    }
}
