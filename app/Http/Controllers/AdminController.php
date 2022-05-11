<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use App\Models\admin;

class AdminController extends Controller
{
    public function postLoginA(Request $request){
        $rules = [
            'Admin_Username' => 'required', 
            'Admin_Pass' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
        else{

            $userInfo = admin::where('Admin_Username','=',$request->Admin_Username)->first();

            if(!$userInfo){
                return back()->with('Fail','Invalid Username');
            }   
            else{
                if(Hash::check($request->Admin_Pass, $userInfo->Admin_Pass)){
                    return redirect('admin/address');
                }
                else{
                    return back()->with('Fail','Invalid Password');
                }
            }
        }
    }
}
