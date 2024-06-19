<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pp_user;

class SignupController extends Controller
{
    public function sign_up_store(Request $request){
        $user = $request->validate([
            'first_name'=> 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|unique:pp_users',
            'company' => 'required',
            'subdomain' => 'required|unique:pp_users',
            'password' => ['required', 'confirmed', 'min:8'],

        ]);

      $created = Pp_user::create($user);

      if($created ):
        return response(['success' => true, 'message' =>'<span color="green">User Created Succsessfully, </span> <a href="/log-in">Log In</a>']);
      else:
        return response(['success' => false, 'message' =>'<span color="red">Erorr occurred']);
      endif;
    }
}
