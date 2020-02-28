<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function index(){
       $lesson=DB::table('lesson')
       ->orderby('lesson_must','desc')
       ->get();
    //    return view('lesson')->with('lesson',$lesson);
       return view('lesson',compact('lesson'));

        // foreach ($lesson as $key) {
        //     echo $key->lesson_title."<br>";
        // }
    }

    public function lessonInsert(Request $request){
        return ',,,,,';
    }
}
