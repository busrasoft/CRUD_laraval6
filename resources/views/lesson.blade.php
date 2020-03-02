@extends('layouts.app')
@section('title', 'Lesson Page Form')
@section('content')
    
@endsection
<div class="container md-12">
    <h1>Dersler</h1>
    <div align="right">
    <a href="{{route('lessonInsert')}}">
      <button class="btn btn-success">Lesson Add</button>
      </a>
    </div>
    <br>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Must</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($lesson as $key)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$key->lesson_title}}</td>
                <td>{{$key->lesson_content}}</td>
                <td>{{$key->lesson_must}}</td>
                <td width="10"><a href="{{route('lessonUpdate',['id' => $key->id])}}"><button class="btn btn-primary">Update</button></a></td>
                <td width="10"><a href="{{route('lessonDelete',['id' => $key->id])}}"><button class="btn btn-danger">Delete</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>