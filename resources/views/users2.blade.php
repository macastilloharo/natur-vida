<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
       <body>
        <h1>{{ $title }} </h1>
  <ul>
       @foreach($users as $user)
       <li>{{$user}}</li>
        @endforeach

       </ul>
    </body>
</html>
