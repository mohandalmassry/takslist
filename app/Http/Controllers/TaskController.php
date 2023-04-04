<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function getAllTask()
    {
        $tasks = DB::table('tasks')->get();
        // ->where('id','2')
        return view('front.index', compact('tasks'));
    }

    // public function show($id){

    //     $taskss=DB::table('tasks')->find($id);
    //     return view ('showTask',compact('taskss'));
    // }
    public function store(Request $request)
    {
        DB::table('tasks')->insert([

            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()

        ]);
        return redirect()->back();
    }
    public function delete ($id){

        DB::table('tasks')->where ('id','=',  $id)->delete();

        return redirect()->back();
    }
}
