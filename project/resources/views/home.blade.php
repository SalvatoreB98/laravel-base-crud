@extends('layout')
@section('pageTitle', 'Add a new comic')
@section('content')
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                COMICS DATABASE
            </div>
            <div class="links">
                <a href="{{route('comic.create')}}"> ADD NEW COMIC </a>
            </div>
        </div>
    </div>
    <h2 class="padding-1">COMICS:</h2>
    <div class="container">
        @foreach($comics as $comic)
        <div class="comic-container padding-1">
            <img src="{{$comic['thumb']}}" alt="">
            <div class="specs">
                <h2>{{$comic['title']}}</h2>
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
            </div>

        </div>
        @endforeach
    </div>
</body>
</html>
