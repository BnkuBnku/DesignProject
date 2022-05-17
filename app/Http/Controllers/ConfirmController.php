<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Illuminate\Support\Facades\View;
use App\Models\receptionist;
use App\Models\booking;
use DB;

class ConfirmController extends Controller
{
    public function index(){
        if(session()->has('LoggedUser')){
            return redirect('admin/confirm');
        }
    }

    public function navi(){
        $books = DB::table('booking')->where('Status', 'Confirmed')->get();
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/confirm', compact("books"))->with($data);
    }
}
