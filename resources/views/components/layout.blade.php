<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    
    <title>Document</title>
</head>

<body>
    <div class="headline">
    <h1 >Helping Hand</h1>    
    <div class="link">
    @auth
    <p>hi, {{auth()->user()->name}}</p>
    @endauth
    <a href="/">home page</a>
    <a href="/Main-page">Activates</a>
    @auth
    @if  (auth()->user()?->name == 'admin' || auth()->user()?->isowner =='1')
    <a href="/createact">create </a>
    @endif
    <a href="/logout">logout</a>
    @endauth
    @guest
  <a href="/login">login</a>
  <a href="/signup">signup</a>
    @endguest 
   </div>
    <br/>
    </div>
    {{$slot}}

 
</body>
</html>