<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class ProfileController
{
    public function main(){

        $user = DB::table('users')->where('user_id',session()->get("id"))->first();

        $data = ProfileModel::getCourse();


        // $user_infos = [[
        //     'course_name' =>$data[0]->course_label,
        //     'groupe_id' => $data[0]->group_id,
        //     'number_months' => $data[0]->num_months,
        // ]];

        $nbr_courses = count($data);

        // dd($nbr_courses);
        // dd($user);
        $userdata = [
            'name' => $user->first_name .' '. $user->last_name,
            'email' => $user->email,
            'status' => $user->status,
            'phone' => '',
        ];
        // dd($data[0]);
        return view('profile',['userdata' => $userdata,'user_infos' => $data, 'nbr_courses' => $nbr_courses]);
    }
}
