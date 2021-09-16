@extends('layouts.site')

@section('title', 'Новый заголовок страницы')

@section('content')
<p>Это контент замещает контент по умолчанию. {{$phone->All()??''}}</p>
@endsection

@auth
    <p>Пользователь аутентифицирован</p>

@endauth
@guest
    <p>Пользователь не аутентифицирован</p>
@endguest
