@extends('layouts.admin')

@section('content')
<table class="table">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">THUMB</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>

  <tbody>

    @foreach($comics as $comic)
    <tr>
      <td scope="row">{{$comic->id}}</td>
      <td>{{$comic->title}}</td>
      <td><img src="{{$comic->thumb}}" alt=""></td>
      <td><span>view</span><span>edit</span><span>delete</span></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection