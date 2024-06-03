<?php 
namespace app\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Loginresult;
class LoginController {
    public function login(){
        return view("login",['logincheck' => false]);
    }
    public function creataccount(){
        return view("creataccount",['creatcheck'=> false]);
    }
    public function datauserverification(){
     if ((request()->all())['submit'] == 'log in'){
        $logininput = request()->all();
        session()->put('email',$logininput['email']);
        session()->put('password',$logininput['password']);
        $result = Loginresult::loginresult();

        if (empty($result)){
            session()->flush();
            return view('login',['logincheck' => true]);
        }
        else {
        session()->put("status",($result[0])->status);
        session()->put("id",($result[0])->user_id);
            return view('homeaftersignin');
        }

    }
    else {
        $accountdata = request()->all();
        foreach($accountdata as $key => $value){
          session()->put($key,$value);
        }
        $result = Loginresult::accountexist();
        if (empty($result)){
            $codeverif = rand(100000,999999);
            session()->put('codeverif',$codeverif);
            return view('verificationemail',['email' => $accountdata['email'],'password' => $accountdata['password'],'firstname' => $accountdata['firstname'],
            'lastname' => $accountdata['lastname'],'checkcode' => false,'codeverif' => $codeverif]);
        }
        else {
            session()->flush();
           return view('creataccount',['creatcheck'=> true]);
        }
    }}
}