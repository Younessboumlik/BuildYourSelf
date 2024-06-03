<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProfileModel extends Model
{
    use HasFactory;
    public static function getCourse(){
        $user_id = session()->get("id");
        $result = DB::select("select * from Users,StudentEnrollments,Groupes,Courses,Services where Users.user_id  = StudentEnrollments.user_id and 
        Users.user_id = $user_id and StudentEnrollments.group_id = Groupes.group_id and Groupes.course_id = Courses.course_id and
        Courses.service_id = Services.service_id");
        return $result;
    }
    public static function deleteCourse($course_id){
        $user_id = session()->get("id");
        DB::delete("delete from StudentEnrollments where user_id = $user_id and course_id = $course_id");
    }
}
