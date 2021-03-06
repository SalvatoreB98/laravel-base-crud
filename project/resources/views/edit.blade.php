@extends('layout')
@section('pageTitle', 'EDIT '.$comic['title'])
@section('content')
<div class="position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            EDIT
        </div>
        <div class="links">
            <form action="{{route('comic.update', $comic['id'])}}" method="post">
                @csrf
                @method('PUT')
                <label for="title"> TITLE: <br> <input type="text" name="title" value="{{$comic['title']}}"></label> <br>
                <label for="description">DESCRIPTION: <br><textarea id="description" name="description" rows="4" cols="25">{{$comic['description']}} </textarea> </label> <br>
                <label for="thumb"> THUMB: <br> <input type="text" name="thumb" value="{{$comic['thumb']}}"></label> <br>
                <label for="price"> PRICE: <br> <input type="number" step="0.01" name="price" value="{{$comic['price']}}"></label> <br>
                <label for="series"> SEERIES: <br> <input type="text" name="series" value="{{$comic['series']}}"></label> <br>
                <label for="sale_date"> DATE SALE: <br> <input type="date" name="sale_date" value="{{$comic['sale_date']}}"></label> <br>
                <label for="type"> TYPE: <br> <input type="text" name="type" value="{{$comic['type']}}"></label> <br>
                <input type="submit" value="EDIT">
            </form>
        </div>
    </div>
</div>
    <div class="back"><a href="{{route('home')}}"> <strong>BACK</strong> </a></div>
@endsection
