<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function view_user () {
       $user = Auth::user();
       $role = $user->getRoleNames();
       return response()->json([
            'status' => 200,
            'fullname' => $user->name,
            'role' => $role,
        ]);
    }

    public function view_all_users () {
       $users_info = User::orderBy('id')->get();

       return response()->json($users_info);
    }

    public function view_table () {
       $info = DB::table('users')
       ->join('model_has_roles','users.id','=','model_has_roles.model_id')
       ->get();

       return response()->json($info);
    }
}
