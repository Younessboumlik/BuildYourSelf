<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class Loginresult{
    public static function loginresult(){
      $results = DB::select("select * from users where email = ? and password = ?",[session()->get('email'),session()->get('password')]);
      return $results;
    }
    public static function accountexist(){
      $results = DB::select("select * from users where email = ?",[session()->get('email')]);
      session()->put("status",$results["status"]);
      return $results;
    }
    public static function insertuserdata(){
      DB::insert("insert into users (email,password,first_name,last_name) values (?,?,?,?)",[session()->get('email'),session()->get('password'),session()->get('firstname'),session()->get('lastname')]);
    }
}