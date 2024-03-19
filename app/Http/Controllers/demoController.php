<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index(Request $test)
    {
        $name = $test->name;
        $age = $test->boyosh;
        return "Hello $name! How are you? <br> your age is : $age";
        // return view('view');
    }

    public function info(Request $request)
    {

        // $name = $request->input('name');
        // $phone = $request->input('phone');



        // $name = $request->input('name');
        // $phone = $request->input('phone');



        // $name = $request->header('name');
        // $phone = $request->header('phone');


        // return "Name is : $name <br> Phone no is: $phone";
        // return [
        //     'name' => $name,
        //     'phone' => $phone
        // ];

        return $request->input();
        // return $request->header();
    }
}
