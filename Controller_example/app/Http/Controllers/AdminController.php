<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function dashboard()
    {

        $title = "Admin Dashboard";
        $users = 10;


        return view("dashboard", compact("title", "users"));

        return view('dashboard', ['title' => $title, 'users' => $users]);

        return view('dashboard')->with('title', $title)->with('users', $users);




    }

    public function reports()
    {



    }


}
