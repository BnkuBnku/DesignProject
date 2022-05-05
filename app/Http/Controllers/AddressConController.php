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
            return redirect('admin/address');
        }
    }

    public function navi(){
        $resort = DB::select('select * from resort_register');
        $data = ['LoggedUserInfo'=>receptionist::where('id','=', session('LoggedUser'))->first()];
        return View::make('admin/address', compact("resort"))->with($data);
    }



    public function save(Request $request, resort_register $resort_register){
        $rules = [
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
                DB::table('resort_register')
                ->update([
                    'ResortLatitude_Coor' => $request->ResortLatitude_Coor, 
                    'ResortLongitude_Coor' => $request->ResortLongitude_Coor, 
                    'Resort_Address' => $request->Resort_Address, 
                    'Services' => $request->Services, 
                    'Cottages' => $request->Cottages, 
                    'Essentials' => $request->Essentials, 
                    'PerStay' => $request->PerStay, 
                    'PerAdult' => $request->PerAdult, 
                    'PerChild' => $request->PerChild, 
                ]);

                return back()->with('Success', 'Configuration Changes Successfully');
            }
            catch(Exception $e){
                return back()->with('Fail', 'Configuration Changes Unsuccessfully');
            }
        }
    }
}
