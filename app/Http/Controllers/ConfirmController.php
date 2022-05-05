<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use App\Models\receptionist;

class ConfirmController extends Controller
{
    public function index(){
        if(session()->has('LoggedUser')){
            return redirect('admin/confirm');
        }
    }

    public function navi(){
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];

        return view('admin/confirm', $data);
    }
}
