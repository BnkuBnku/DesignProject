<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\View;
use App\Models\receptionist;
use App\Models\resort_register;

class AddressConController extends Controller
{
    public function index(){
        if(session()->has('LoggedUser')){
            return redirect('admin/resort');
        }
    }

    public function create(){
        if(session()->has('LoggedUser')){
            $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
            return View::make('admin/createaddress')->with($data);
        }
    }

    public function navi(){
        $resorts = DB::select('select * from resort_register');
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/resort', compact("resorts"))->with($data);
    }

    public function edit($id){
        $resorts = resort_register::find($id);
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/address', compact("resorts"))->with($data);
    }

    public function destroy($id){
        try{
            resort_register::find($id)->delete();
            return redirect()->route('resort')->with('Success', 'Delete Successfully');
        }
        catch(Exception $e){
            return back()->with('Fail', 'Configuration Changes Unsuccessfully');
        }
    }

    public function postCreate(Request $request){
        
        //Validate
        $rules = [
            'Resort_name' => 'required',
            'Resort_Address' => 'required',
            'resort_pic_url' => 'required',
            'ResortLatitude_Coor' => 'required',
            'ResortLongitude_Coor' => 'required',
            'Services' => 'required',
            'Cottages' => 'required',
            'Essentials' => 'required',
            'PerStay' => 'required',
            'PerAdult' => 'required',
            'PerChild' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
        else{

            try{
                
                //Insert data into database
                $resort_register = new resort_register;
                $resort_register->Resort_name = $request->Resort_name;
                $resort_register->Resort_Address = $request->Resort_Address;
                $resort_register->resort_pic_url = $request->resort_pic_url;
                $resort_register->ResortLatitude_Coor = $request->ResortLatitude_Coor;
                $resort_register->ResortLongitude_Coor = $request->ResortLongitude_Coor;
                $resort_register->Services = $request->Services;
                $resort_register->Cottages = $request->Cottages;
                $resort_register->Essentials = $request->Essentials;
                $resort_register->PerStay = $request->PerStay;
                $resort_register->PerAdult = $request->PerAdult;
                $resort_register->PerChild = $request->PerChild;
                $resort_register->save();
                return back()->with('Success','New Resort has been successfully added');
            }
            catch(Exception $e){
                return back()->with('Fail', 'Something went wrong, try again');
            }
        }
    }



    public function save(Request $request, $id){
        $rules = [
            'Resort_name' => 'required', 
            'ResortLatitude_Coor' => 'required', 
            'ResortLongitude_Coor' => 'required',
            'Resort_Address' => 'required', 
            'Services' => 'required',
            'Cottages' => 'required', 
            'Essentials' => 'required',
            'PerStay' => 'required', 
            'PerAdult' => 'required',
            'PerChild' => 'required',  
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
        else{
            try{
                $resorts = resort_register::find($id);
                $resorts->Resort_name = $request->input('Resort_name');
                $resorts->Resort_Address = $request->input('Resort_Address');
                $resorts->ResortLatitude_Coor = $request->input('ResortLatitude_Coor');
                $resorts->ResortLongitude_Coor = $request->input('ResortLongitude_Coor');
                $resorts->Services = $request->input('Services');
                $resorts->Cottages = $request->input('Cottages');
                $resorts->Essentials = $request->input('Essentials');
                $resorts->PerStay = $request->input('PerStay');
                $resorts->PerAdult = $request->input('PerAdult');
                $resorts->PerChild = $request->input('PerChild');
                $resorts->update();

                return back()->with('Success', 'Configuration Changes Successfully');
            }
            catch(Exception $e){
                return back()->with('Fail', 'Configuration Changes Unsuccessfully');
            }
        }
    }
}
