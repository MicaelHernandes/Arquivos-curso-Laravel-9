<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::get();

    return view('users.index', /*['users' => $users]*/ compact('users'));
    }
    public function show($id){
        dd('user.show',$id);
    }
}
