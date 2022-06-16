@extends('layouts.app')
@section('content')
<div class="container">
    <img class="img-fluid" src="{{$comic->thumb}}" alt="">
    <h1>{{$comic->title}}</h1>
    <div class="content">
        <p>{{$comic->description}}</p>
    </div>
</div>
@endsection