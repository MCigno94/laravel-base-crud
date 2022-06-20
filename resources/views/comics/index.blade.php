@extends('layouts.app')
@section('content')
<div class="heading container d-flex align-items-center justify-content-between text-center py-5">
    <h1>All Comics</h1>
    <div>
        <a name="" id="" class="btn btn-primary" href="{{route('comics.create')}}">Create new comic</a>
    </div>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale_date</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @forelse($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>
                    <img width="90" src="{{$comic->thumb}}" alt="">
                </td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{route('comics.show',$comic->id)}}">View</a>
                    <a href="{{route('comics.edit',$comic->id)}}">Edit</a>
                    <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')                        
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td scope="row">No comics yet!</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
