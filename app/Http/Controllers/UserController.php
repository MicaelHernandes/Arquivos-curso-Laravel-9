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
        //$user = User::where('id', '=', $id)->first(); //Pesquisa usuario pelo ID passado pela barra do navegador
        if(!$user = User::find($id))
            return redirect()->back();//ou pode-se utilizar route('users.index);
        return view('users.show',compact('user'));
    }
}
