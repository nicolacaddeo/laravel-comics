@extends('layout')

@section('main-content')
    @foreach ($comics as $comic => $index)
        <div class="card">
            <img class="thumb" src="{{ $index['thumb'] }}" alt="">
            <div class="card-info">
                <h4>{{ $index['title'] }}</h4>
            </div>
        </div>
    @endforeach
@endsection
