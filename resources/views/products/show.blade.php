@extends('layouts.app')
@section('content')
{{ $product -> name }}
<div>
Цена: {{$product->price->price}} руб.
</div>
@endsection

