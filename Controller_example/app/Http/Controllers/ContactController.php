<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{



    public function create()
    {




    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];



        return redirect()->route('contact.result')->with('data', $data);

    }

}
