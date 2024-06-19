<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LogIn extends Model
{
    use HasFactory;

    public static function Log_in_user_to_main($email, $password){

        $match = DB::table('pp_users')
        ->where('email', $email)
        ->where('password', $password)
        ->get();

        if($match->isNotEmpty()):
            return true;
        else:
            return false;
        endif;
    }
}
