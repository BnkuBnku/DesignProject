<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookpageController extends Controller
{
    public function index(){
        return view('front/Book');
    }

    public function success(){
        return view('SPage/SuccessBook');
    }

    public function overview(){
        return view('SPage/OverviewBook');
    }

    public function booking(Request $request){

        $checkin = $request->checkin;
        $checkout = $request->checkout;
        $numberAdult = $request->numberAdult;
        $numberChild = $request->numberChild;

        //Validate
        $rules = [
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'referralNum' => 'required',
            'phoneNumber' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
        else{

            try{
                
                $email = $request->email;
                $username = $request->username;
                $firstname = $request->firstname;
                $lastname = $request->lastname;
                $address = $request->address;
                $phoneNum = $request->phoneNumber;
                $referralNum = $request->referralNum;

                return view('SPage/OverviewBook')   ->with('checkin', $checkin)
                                            ->with('checkout', $checkout)
                                            ->with('numberAdult', $numberAdult)
                                            ->with('numberChild', $numberChild)
                                            ->with('email', $email)
                                            ->with('firstname', $firstname)
                                            ->with('lastname', $lastname)
                                            ->with('username', $username)
                                            ->with('address', $address)
                                            ->with('phoneNum', $phoneNum)
                                            ->with('referralNum', $referralNum);   
            }
            catch(Exception $e){
                return back()->with('Fail', 'Something went wrong, try again');
            }
        }
    }

    public function finalbook(Request $request){
        
        $year = $request->get('year');
        $month = $request->get('month');
        $day = $request->get('day');
        
        try{
            
            //Insert data into database
            $receptionist = new receptionist;
            $receptionist->Rec_Email = $request->Rec_Email;
            $receptionist->Rec_Username = $request->Rec_Username;
            $receptionist->Rec_Lastname = $request->Rec_Lastname;
            $receptionist->Rec_Firstname = $request->Rec_Firstname;
            $receptionist->Rec_Pass = Hash::make($request->Rec_Pass);
            $receptionist->Rec_Gender = $request->Rec_Gender;
            $receptionist->Rec_PhoneNum = $request->Rec_PhoneNum;
            $receptionist->Rec_Birthday = $birthday;
            $receptionist->save();
            return back()->with('Success','New User has been successfully added');
        }
        catch(Exception $e){
            return back()->with('Fail', 'Something went wrong, try again');
        }
    }
}
