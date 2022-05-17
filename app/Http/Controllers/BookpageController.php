<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Models\resort_register;
use App\Models\transaction;
use App\Models\customer;
use App\Models\booking;
use DB;

class BookpageController extends Controller
{

    public function test(){
        return view('test');
    }

    public function success(){
        return view('SPage/SuccessBook');
    }

    public function overview(){
        return view('SPage/OverviewBook');
    }

    public function book($id){
        return view('SPage/OverviewBook');
    }

    public function gmaps($id){
        $resorts = resort_register::find($id);
        return View::make('front/ResortMap', compact('resorts'));
    }

    public function booking(Request $request, $id,$checkin, $checkout, $numberAdult, $numberChild){
    
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

        $resorts = resort_register::find($id);

        return View::make('front/Book', compact('resorts')) ->with('checkIn', $checkin)
                                                            ->with('checkOut', $checkout)
                                                            ->with('numberAdult', $numberAdult)
                                                            ->with('numberChild', $numberChild)
                                                            ->with('MyrandomString', $randomString);
    }

    public function transact(Request $request){
        $checkIn = $request->checkIn;
        $checkOut = $request->checkOut;
        $numberAdult = $request->numberAdult;
        $numberChild = $request->numberChild;

        $resortfind = $request->Resort_name;

        $resort = DB::table('resort_register')->where('Resort_name', $resortfind)->first();
        
        $email = $request->email;
        $username = $request->username;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $address = $request->address;
        $phoneNumber = $request->phoneNumber;
        $referralNum = $request->referralNum;

        //Calculate Durations
        $datetime1 = strtotime($checkIn);
        $datetime2 = strtotime($checkOut);

        $diff = abs($datetime2 - $datetime1);

        $years = floor($diff / (365*60*60*24));

        $months = floor(($diff - $years * 365*60*60*24)
        / (30*60*60*24));

        $days = floor(($diff - $years * 365*60*60*24 -
               $months*30*60*60*24)/ (60*60*24));

        //Get each column price
        $services = DB::table('resort_register')->where('Resort_name', $resortfind)->pluck('Services')->first();
        $cottages = DB::table('resort_register')->where('Resort_name', $resortfind)->pluck('Cottages')->first();
        $essentials = DB::table('resort_register')->where('Resort_name', $resortfind)->pluck('Essentials')->first();
        $perstay = DB::table('resort_register')->where('Resort_name', $resortfind)->pluck('PerStay')->first();
        $peradult = DB::table('resort_register')->where('Resort_name', $resortfind)->pluck('PerAdult')->first();
        $perchild = DB::table('resort_register')->where('Resort_name', $resortfind)->pluck('PerChild')->first();

        //Calculation
        $total = $services + $cottages + $essentials + ($peradult*$numberAdult) + ($perchild * $numberChild)+ ($perstay * $days);

        return View::make('front/FinalBook', compact('resort')) ->with('checkIn', $checkIn)
                                                                ->with('checkOut', $checkOut)
                                                                ->with('numberAdult', $numberAdult)
                                                                ->with('numberChild', $numberChild)

                                                                ->with('email', $email)
                                                                ->with('username', $username)
                                                                ->with('firstname', $firstname)
                                                                ->with('lastname', $lastname)
                                                                ->with('address', $address)
                                                                ->with('phoneNumber', $phoneNumber)
                                                                ->with('referralNum', $referralNum)

                                                                ->with('total', $total)
                                                                ->with('duration', $days);
    }

    public function finalbook(Request $request){

        //Get Value
            //OverView Details
            $checkIn = $request->checkIn;
            $checkOut = $request->checkOut;
            $numberAdult = $request->numberAdult;
            $numberChild = $request->numberChild;

            //Selected resort
            $Resort_name = $request->Resort_name;
            $Resort_Address = $request->Resort_Address;
            $Services = $request->Services;
            $Cottages = $request->Cottages;
            $Essentials = $request->Essentials;
            $PerStay = $request->PerStay;
            $PerAdult = $request->PerAdult;
            $PerChild = $request->PerChild;
            $payment_total = $request->payment_total;

            //Guest Info
            $email = $request->email;
            $username = $request->username;
            $firstname = $request->firstname;
            $lastname = $request->lastname;
            $address = $request->address;
            $phoneNumber = $request->phoneNumber;
            $referralNum = $request->referralNum;
            
            //Resortname
            $Resort_name = $request->Resort_name;

            //Finaldetails
            $payment_type = $request->payment_type;


        try{
            //Insert data into database

            //Customer table
            $customer = new customer;
            $customer->Cus_Email = $email;
            $customer->Cus_Username = $username;
            $customer->Cus_Fname = $firstname;
            $customer->Cus_Lname = $lastname;
            $customer->Cus_Address = $address;
            $customer->Cus_Number = $phoneNumber;
            $customer->save();


            $customerId = DB::table('customer')->where('Cus_Username', $username)->first();
            $status = "Pending";

            //Booking table
            $booking = new booking;
            $booking->customer_id = $customerId->id;
            $booking->Cus_Username = $username;
            $booking->HAdult_Count = $numberAdult;
            $booking->HChild_Count = $numberChild;
            $booking->Check_In = $checkIn;
            $booking->Check_Out = $checkOut;
            $booking->Referral_Num = $referralNum;
            $booking->Status = $status;
            $booking->save();


            
            $resortId = resort_register::find($Resort_name);

            //Transaction table
            $transaction = new transaction;
            $transaction->customer_id = $customerId->id;
            $transaction->resort_register_id = $resortId->id;
            $transaction->Estimation_Fare = "0";
            $transaction->Standard_Payment = $payment_total;
            $transaction->VAT = "0";
            $transaction->Total_Payment = $payment_total;
            $transaction->Payment_Method = $payment_type;
            $transaction->save();

            
            return view('SPage/SuccessBook');
        }
        catch(Exception $e){
            return back()->with('Fail', 'Something went wrong, try again');
        }


    }
}
