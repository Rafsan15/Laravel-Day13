<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Home()
    {
        return view("Home");
    }
    public function UserRegister()
    {
        return view("user_register");
    }
    public function UserLogin()
    {
        return view("user_login");
    }
    public function AboutUs()
    {
        return view("user_about");
    }
    public function ContactUs()
    {
        return view("user_contactUs");
    }
}
