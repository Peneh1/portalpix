<?php

namespace App\Http\Controllers;

use App\Models\Pp_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WebsiteController extends Controller
{
    //
    public function index(){
        return view('home', [
            'title' => 'Home'
                   ]);
    }

    public function sign_up_show(){
       
            return view('sign-up', [
                'title' => 'Sign Up'
                       ]);
    }

    public function login(){
        return view('log-in', [
            'title' => 'Log in'
                   ]);
    }

    public function article_details(){
        return view('article-details', [
            'title' => 'Article Details'
                   ]);
    }

    public function terms_conditions(){
        return view('terms-conditions', [
            'title' => 'Terms Conditions'
                   ]);
    }

    public function privacy_policy(){
        return view('privacy-policy', [
            'title' => 'Privacy Policy'
                   ]);
    }

    
}
