<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use DB;

class HomepageController extends Controller
{
    public function index(){
        return view('front/Homepage');
    }

    public function postGet(Request $request){
        
        //Validate
        $rules = [
            'checkOut' => 'required',
            'checkIn' => 'required',
            'numberAdult' => 'required',
            'numberChild' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
        else{

            try{                
                $checkIn = $request->checkIn;
                $checkOut = $request->checkOut;
                $numberAdult = $request->numberAdult;
                $numberChild = $request->numberChild;

                $resorts = DB::select('select * from resort_register');

                return View::make('front/SearchResort', compact("resorts")) ->with('checkin', $checkIn)
                                                                            ->with('checkout', $checkOut)
                                                                            ->with('numberAdult', $numberAdult)
                                                                            ->with('numberChild', $numberChild);   
            }
            catch(Exception $e){
                return back()->with('Fail', 'Something went wrong, try again');
            }
        }
    }

    
 
}


