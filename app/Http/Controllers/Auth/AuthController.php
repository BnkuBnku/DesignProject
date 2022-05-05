<?php

namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use App\Models\receptionist;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    public function loginA(){
        return view('auth.loginA');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  

        //get year-month-day
        $year = $request->get('year');
        $month = $request->get('month');
        $day = $request->get('day');

        $birthday = strftime("%F", strtotime($year."-".$month."-".$day));
        
        //Validate
        $rules = [
            'Rec_Firstname' => 'required',
            'Rec_Lastname' => 'required',
            'Rec_Username' => 'required|min:6|max:30',
            'Rec_Pass' => 'required|min:6|max:20',
            'Rec_Email' => 'required|email|unique:receptionist',
            'Rec_Gender' => 'required',
            'Rec_PhoneNum' => 'required',
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

          
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $rules = [
            'Rec_Username' => 'required', 
            'Rec_Pass' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
        else{
            
            $userInfo = receptionist::where('Rec_Username','=',$request->Rec_Username)->first();

            if(!$userInfo){
                return back()->with('Fail','Invalid Username');
            }   
            else{
                if(Hash::check($request->Rec_Pass, $userInfo->Rec_Pass)){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('admin/admin');
                }
                else{
                    return back()->with('Fail','Invalid Password');
                }
            }
        }
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }


}
