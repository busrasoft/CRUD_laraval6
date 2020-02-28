@extends('layouts.app')
@section('title', 'Lesson Page Form')
@section('content')
    
@endsection
<div class="container md-12">
    <h1>Dersler</h1>
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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td width="10"><a href=""><button class="btn btn-primary">Update</button></a></td>
                <td width="10"><a href=""><button class="btn btn-danger">Delete</button></a></td>
              </tr>
            </tbody>
          </table>
    </div>
</div>