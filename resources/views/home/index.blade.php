@extends('layout.main')

@section('page-title')
    Головна сторінка
@endsection

@section('content')
    <div class="container mt-3 d-flex justify-center">
        <ul class="width-l mt-3 d-flex justify-between align-center">
            <li><a href="/news" class="border p-2 font-weight-l">Новини</a></li>
            <li><a href="/" class="border p-2 font-weight-l">Розваги</a></li>
            <li><a href="/" class="border p-2 font-weight-l">Анонси</a></li>
        </ul>
    </div>
@endsection