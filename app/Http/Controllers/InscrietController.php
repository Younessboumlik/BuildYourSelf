<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
    //   if(empty(DB::select("select group_id from groupes where ")))
    }

}
