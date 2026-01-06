<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class PageController extends Controller
{

    public function home()
    {
        $title = "Home Page";
        $message = "Welcome to Home Page";

        return view('home', compact('title', 'message'));

    }


    public function about()
    {

        $title = "about Page";
        $message = "Welcome to About Page";

        return view('about', compact('title', 'message'));

    }






    public function contact()
    {

        $title = "contact Page";
        $message = "Welcome to contact Page";

        return view('contact', compact('title', 'message'));


    }



    public function user($name)
    {


        return view('user', ['username' => $name]);
    }



    public function products()
    {

        $products = [
            ['name' => 'Laptop', 'price' => 800],
            ['name' => 'Phone', 'price' => 500],
        ];


        return view('product', compact('products'));
    }


}
