<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

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

                function generateRandomString($length = 25) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }
                
                
                $checkIn = $request->checkIn;
                $checkOut = $request->checkOut;
                $numberAdult = $request->numberAdult;
                $numberChild = $request->numberChild;
                $randomString = generateRandomString(5);


                return view('front/Book')   ->with('checkin', $checkIn)
                                            ->with('checkout', $checkOut)
                                            ->with('numberAdult', $numberAdult)
                                            ->with('numberChild', $numberChild)
                                            ->with('MyrandomString', $randomString);   
            }
            catch(Exception $e){
                return back()->with('Fail', 'Something went wrong, try again');
            }
        }
    }

    
 
}


