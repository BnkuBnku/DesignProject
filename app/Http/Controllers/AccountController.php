<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Illuminate\Support\Facades\View;
use App\Models\receptionist;
use DB;

class AccountController extends Controller
{
    public function index(){
        if(session()->has('LoggedUser')){
            return redirect('admin/accounts');
        }
    }

    public function navi(){
        $accounts = DB::select('select * from receptionist');
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/accounts', compact("accounts"))->with($data);
    }

}
