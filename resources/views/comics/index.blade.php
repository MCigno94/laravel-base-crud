@extends('layouts.app')
@section('content')
<div class="heading text-center py-5">
    <h1>Comics</h1>
    <a name="" id="" class="btn btn-primary" href="{{route('comics.create')}}">Create comic</a>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Description</th>
                <th>Cover Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td><img width="120" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td><img width="120" src="{{$comic->cover_image}}" alt=""></td>
                <td><a href="{{route('comics.show',$comic->id)}}">View</a> - Edit - Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
