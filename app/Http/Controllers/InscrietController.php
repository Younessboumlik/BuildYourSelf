<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Mockery\Generator\StringManipulation\Pass\Pass;

class InscrietController {
  public function verificationforinscription(){
    if (empty(session()->get('email'))){
        return view('la_une',['inscriptioncheck'=>true]);
    }
    else {
        return view('inscriptionetud',[]);
    }    
}
public function getdata(){
    $id_service = (request()->json()->all())['id_service'];
    // dd($id_service);
    $courses = DB::select('select course_id,label from courses where service_id = ?',[$id_service]);
    return response()->json($courses,200);
    }
    public function inscriptionetu(){
      $donne = request()->all();
      $res = DB::select("select * from groupes where num_students < 20 limit 1");
       if(empty($res)){
       DB::insert("insert into groupes(num_students ,max_students ,course_id) values (?,?,?)",[1,29,$donne["cours"]]);
       $groupe_id = DB::select("select group_id from groupes order by group_id DESC  limit 1")[0]->group_id;
       DB::insert("insert into studentenrollments (num_months,user_id ,group_id) values (?,?,?)",[$donne["nbrmois"],session()->get("id"),$groupe_id]);
       DB::insert("update users set status = ? where user_id = ? ",["student",session()->get("id")]);
      $result = DB::select("select enrollment_id,waiting_list_id from ProfessorWaitingLists where course_id = ? order by wait_date limit 1",[$donne["cours"]]);
      if(!empty($result)){
        DB::update("UPDATE ProfessorEnrollments set group_id = ? where enrollment_id = ?",[$groupe_id,$result[0]->enrollment_id]);
        DB::delete("DELETE FROM ProfessorWaitingLists WHERE enrollment_id = ?",[$result[0]->enrollment_id]);
      }
      session()->put("status",("student"));
      return view('homeaftersignin');

    }
    else{
      DB::update("UPDATE groupes  set num_students = ? where group_id = ?",[$res[0]->num_students + 1 , $res[0]->group_id]);
      DB::insert("update users set status = ? where user_id = ? ",["student",session()->get("id")]);
      DB::insert("insert into studentenrollments(num_months,user_id ,group_id) values (?,?,?)",[$donne["nbrmois"],session()->get("id"),$res[0]->group_id]);
      session()->put("status",("student"));
      return view('homeaftersignin');
    }
    
}
}