<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        DB::table('students')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]);
        return redirect()->route('index');
    }

    public function index()
    {
        $data = DB::table('students')->get();
        return view('index', ['data' => $data]);
        // return view('index', compact('data'));
        // return ['data' => $data];
    }

    public function show(Request $request, $id)
    {
        $data = DB::table('students')->find($id);
        return view('show', compact('data'));
    }


    public function edit(Request $request)
    {
        $id = $request->id;

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        DB::table('students')->where('id', '=', $id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]);
        return 'updated';
    }
    public function delete(Request $request, $id)
    {
        // $id = $request->id;
        DB::table('students')->where('id', '=', $id)->delete();
        return redirect()->route('index');
    }
}
