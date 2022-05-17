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

class PendingController extends Controller
{
    public function index(){
        if(session()->has('LoggedUser')){
            return redirect('admin/pending');
        }
    }

    public function navi(){
        $books = DB::table('booking')->where('Status', 'Pending')->get();
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/pending', compact("books"))->with($data);
    }

    public function confirm($id){
        try{
            $booking = booking::find($id);
            $status = "Confirmed";
            $booking->Status = $status;
            $booking->update();
            
            return redirect()->route('pending')->with('Success', 'Confirmation Successfully');
        }
        catch(Exception $e){
            return back()->with('Fail', 'Confirmation Unsuccessfully');
        }
    }

    public function refund($id){
        try{
            $booking = booking::find($id);
            $status = "Refunded";
            $booking->Status = $status;
            $booking->update();

            return redirect()->route('pending')->with('Success', 'Refunded Successfully');
        }
        catch(Exception $e){
            return back()->with('Fail', 'Refunding Unsuccessfully');
        }
    }

}
