@extends('layouts.app')
@section('title', 'Lesson Page Form')
@section('content')
 
<div class="container md-12">
  <h1>Lesson Update</h1>
  @if (session()->has('status'))
  <div class="alert alert-success">
    {{session('status')}}   
  </div>
  @endif
  <div align="right">
 <a href="">
   <button class="btn btn-success">Geri</button>
 </a>
   
  </div>
  <br>
  <div class="col-md-12">
    <form action="{{route('lessonUpdatePost', ['id'=>$lesson->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">     
      <input class="form-control" value="{{$lesson->lesson_title}}" type="text" name="lesson_title" placeholder="Title">
    </div>
    <div class="form-group">
      <input class="form-control" value="{{$lesson->lesson_content}}" type="text" name="lesson_content" placeholder="Content">
    </div>
    <div class="form-group">
      <input class="form-control" value="{{$lesson->lesson_must}}" type="text" name="lesson_must" placeholder="Must">
    </div>
    <input class="form-control" type="submit" value="Lesson Add">
    </form>  
    
  </div>
</div>
   
@endsection