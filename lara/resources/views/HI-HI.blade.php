@extends('layouts.site')

@section('title', 'Новый заголовок страницы')

@section('content')
    @parent
    <p>Это контент дополняет контент по умолчанию.</p>
@endsection
