<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
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
                    <div><a class="btn delete" href="{{route('comic.show',$comic['id'])}}"> DELETE <i class="fa fa-trash" aria-hidden="true"></i></i> </a></div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</body>
</html>
