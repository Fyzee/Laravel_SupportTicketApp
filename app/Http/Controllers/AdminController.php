<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function show_user(){

        $users = User::all();
        return view('admin.user', compact('users'));

    }

    public function delete_user($user_id)
    {
        $user = User::where('id', $user_id)->delete();

        return redirect()->back()->with("status", "Deleted User.");
    }
}
