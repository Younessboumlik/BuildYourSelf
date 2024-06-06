<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function main()
    {
        $user = DB::table('users')->where('user_id', session()->get('id'))->first();
        $data = ProfileModel::getCourse();
        $nbr_courses = count($data);

        $userdata = [
            'name' => $user->first_name .' '. $user->last_name,
            'email' => $user->email,
            'status' => $user->status,
            'phone' => '',
        ];

        return view('profile', ['userdata' => $userdata, 'user_infos' => $data, 'nbr_courses' => $nbr_courses]);
    }

    public function deleteCourse($id)
    {
        // Ensure the course is deleted from the database
        DB::table('cours')->where('id_cours', $id)->delete();

        return response()->json(['success' => true]);
    }
}
