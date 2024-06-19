<?php

namespace App\Http\Controllers;

use App\Models\LogIn;
use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function index(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(LogIn::Log_in_user_to_main($email, $password)):
            return redirect('profile');
        else:
            return redirect()->back()->withErrors('Your credentials didn\'t match account');
        endif;



    }
}
