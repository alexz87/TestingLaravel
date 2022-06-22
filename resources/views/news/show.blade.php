@extends('layout.main')

@section('page-title')
    Новина №{{$news->id}}
@endsection

@section('content')
    <div class="container mt-3">
        <div class="mt-5 ml-1"><a href="/news" class="btn btn-success p-1">Назад</a></div>
        <div class="width-xl mt-2 p-1">
            <img src="{{asset('img/' . $news->img)}}" class="border">
            <h2 class="mt-1">{{$news->title}}</h2>
            <p class="mt-1 mb-1">{{$news->text}}</p>
        </div>
    </div>
@endsection