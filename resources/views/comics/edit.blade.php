@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit {{$comic->title}}</h1>
    <!-- Puntare ad una rotta POST -->

    @include('partials.error')
 
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group py-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{$comic->title}}" aria-describedby="titleHelper">
            @error('title') 
            <div class="alert alert-danger">{{$message}}</div>
            @enderror           
        </div>
        <div class="form-group py-2">
            <label for="thumb">Thumbnail</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="https://myimage.png" value="{{$comic->thumb}}" aria-describedby="thumbHelper">
            @error('thumb') 
            <div class="alert alert-danger">{{$message}}</div>
            @enderror          
        </div>
        <div class="form-group py-2">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="price" value="{{$comic->price}}" aria-describedby="priceHelper">
            @error('price') 
            <div class="alert alert-danger">{{$message}}</div>
            @enderror          
        </div>
        <div class="form-group py-2">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description" rows="5" value="{{$comic->description}}" aria-describedby="descriptionHelper"></textarea>
            @error('description') 
            <div class="alert alert-danger">{{$message}}</div>
            @enderror           
        </div>
        <div class="form-group py-2">
            <label for="series">Series</label>
            <textarea type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="series" value="{{$comic->series}}" aria-describedby="seriesHelper"></textarea>
            @error('series') 
            <div class="alert alert-danger">{{$message}}</div>
            @enderror           
        </div>
        <div class="form-group py-2">
            <label for="sale_date">Sale date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="sale date" value="{{$comic->sale_date}}" aria-describedby="sale_dateHelper"></input>
            @error('sale_date') 
                <div class="alert alert-danger">{{$message}}</div>
            @enderror           
        </div>
        <div class="form-group py-2">
            <label for="type">Type</label>
            <textarea type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Type" value="{{$comic->type}}" aria-describedby="typeHelper"></textarea>
            @error('type') 
            <div class="alert alert-danger">{{$message}}</div>
            @enderror           
        </div>
        <button type="submit" class="btn btn-primary">Update comic</button>
    </form>
</div>
@endsection