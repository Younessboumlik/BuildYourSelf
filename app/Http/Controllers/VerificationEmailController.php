<?php
namespace App\Http\Controllers;

use App\Models\Loginresult;

class VerificationEmailController{
  public function verificationemail(){
    $resultcode = request()->all();
    $codeverif = session()->get('codeverif');
    if ($resultcode['codeinput'] == (string)$codeverif){
        Loginresult::insertuserdata();
        return view('la_une',[]);
    }
    else {
        $codeverif = rand(100000,999999);
        $accountdata = session();
        session()->put('codeverif',$codeverif);
        return view('verificationemail',['email'=>$accountdata['email'],'password'=>$accountdata['password'],'firstname'=>$accountdata['first_name'],'lastname'=>$accountdata['last_name'],'checkcode'=>true]);
    
    }

  }
}