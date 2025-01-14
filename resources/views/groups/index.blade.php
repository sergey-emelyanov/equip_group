@extends('layouts.app')

@section('content')
    <h1>Главная страница:</h1>
    <ul>
        @foreach($groups as $group)
            <li>
                <a href="#">{{ $group['name'] }}</a> ({{ $group['product_count'] }})
            </li>
        @endforeach
    </ul>
@endsection