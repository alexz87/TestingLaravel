@extends('layout.main')

@section('page-title')
    Новини
@endsection

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-between align-center">
            @foreach($news as $el)
                <div class="width-s border mt-2 p-1">
                    <img src="{{asset('img/' . $el->img)}}" class="border">
                    <h2 class="mt-1"><a href="/news/{{$el->id}}">{{$el->title}}</a></h2>
                    <p class="mt-1 danger">{{$el->date}}</p>
                    <p class="mt-1 mb-1">{{$el->announce}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection