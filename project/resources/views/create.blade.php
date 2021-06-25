<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                ADD COMIC
            </div>

            <div class="links">
                <form action="{{route('comic.store')}}" method="post">
                @csrf
                    <label for="title"> TITLE: <br> <input type="text" name="title"></label> <br>
                    <label for="description">DESCRIPTION: <br><textarea id="description" name="description" rows="4" cols="25"> </textarea> </label> <br>
                    
                    <label for="thumb"> THUMB: <br> <input type="text" name="thumb"></label> <br>
                    <label for="price"> PRICE: <br> <input type="number" step="0.01" name="price"></label> <br>
                    <label for="series"> SEERIES: <br> <input type="text" name="series"></label> <br>
                    <label for="sale_date"> DATE SALE: <br> <input type="date" name="sale_date"></label> <br>
                    <label for="type"> TYPE: <br> <input type="text" name="type"></label> <br>
                    <input type="submit" value="ADD">
                </form>
            </div>
        </div>
    </div>
</body>
</html>