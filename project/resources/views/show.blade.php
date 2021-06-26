@extends('layout')
@section('pageTitle', $comic['title'])
@section('content')
<body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                {{$comic['title']}}
                <div> </div>
            </div>
            <div class="comic-container padding-1">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="specs">
                    <h2>{{$comic['title']}}</h2>
                    <div>{{$comic['price']}}</div>
                    <div>{{$comic['series']}}</div>
                    <div>{{$comic['sale_date']}}</div>
                    <div>{{$comic['type']}}</div>
                </div>
            </div>
            <div class="links">
                <div class="back"><a href="{{route('home')}}"> <strong>BACK</strong> </a></div>
            </div>
        </div>

    </div>
    <div class="buttons">
        <div><a class="btn details" href="{{route('comic.show',$comic['id'])}}"> DETAILS <i class="fa fa-info" aria-hidden="true"></i> </a></div>
        <div><a class="btn edit" href="{{route('comic.edit',$comic['id'])}}"> EDIT <i class="fa fa-pencil" aria-hidden="true"></i> </a></div>
        <form action="{{route('comic.destroy',$comic['id'])}}" method="post">
            @csrf
            @method('delete')
            <div class="input-wrapper">
                <input type="submit" value="DELETE" class="btn delete">
            </div>
        </form>
    </div>
@endsection