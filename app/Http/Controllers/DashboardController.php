<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\receptionist;
use Illuminate\Support\Facades\View;
use DB;

class DashboardController extends Controller
{
    public function dashboard(){
        if(session()->has('LoggedUser')){
            return redirect('admin/admin');
        }
    }

    public function navi(){
        $guestDisplays = DB::select('CALL DisplayGuest');
        
        $pending = DB::select('CALL DisplayPending');

        $confirm = DB::select('CALL DisplayConfirm');

        $refund = DB::select('CALL DisplayRefund');

        //Count Pending
        $pendingCount = count($pending);

        //Count Confirmed
        $confirmCount = count($confirm);

        //Count Refunded
        $refundCount = count($refund);

        
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/admin',compact('guestDisplays'))   ->with($data)
                                                                    ->with('pendingCount', $pendingCount)
                                                                    ->with('confirmCount', $confirmCount)
                                                                    ->with('refundCount', $refundCount);
    }


}
