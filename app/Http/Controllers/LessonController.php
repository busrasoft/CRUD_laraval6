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

    public function lessonInsert(){
        return view('insertLesson');
    }
    public function lessonInsertPost(Request $request){
        $request->validate([
            'lesson_title'=>'required',
            'lesson_content'=>'required',
            'lesson_must'=>'required',
        ]);
        $lesson = DB::table('lesson')->insert([
            'lesson_title'=>$request->lesson_title,
            'lesson_content'=>$request->lesson_content,
            'lesson_must'=>$request->lesson_must,
        ]);
        if($lesson){
        return back()->with('status', 'kayit basarili oldu');
        }
    }
    public function lessonUpdate($id){
        // $lesson = DB::table('lesson')
        //     ->where('id', $id)
        //     ->first();

        $lesson = DB::table('lesson')
        ->find($id);
           return view('lessonUpdate', compact('lesson'));
    }

    public function lessonUpdatePost(Request $request, $id){
        $request->validate([
            'lesson_title'=>'required',
            'lesson_content'=>'required',
            'lesson_must'=>'required',
        ]);
        $lesson = DB::table('lesson')
        ->where('id', $id)
        ->update([
            'lesson_title'=>$request->lesson_title,
            'lesson_content'=>$request->lesson_content,
            'lesson_must'=>$request->lesson_must,
        ]);
        if($lesson){
        return back()->with('status', 'Guncelleme basarili oldu');
        }
    }
}
