<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\receptionist;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function dashboard(){
        if(session()->has('LoggedUser')){
            return redirect('admin/admin');
        }
    }

    public function navi(){
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/admin')->with($data);
    }

}
