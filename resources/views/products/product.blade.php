@extends('layouts.app')
@section('content')

<div>
    Сортировка: 
    <a href="{{ route('products.index', ['sort_by' => 'price', 'sort_direction' => 'asc']) }}" class="btn btn-link">
        По цене ↑ (по возрастанию цены)
    </a>
    <a href="{{ route('products.index', ['sort_by' => 'price', 'sort_direction' => 'desc']) }}" class="btn btn-link">
        По цене ↓ (по убыванию цены)
    </a>
    <a href="{{ route('products.index', ['sort_by' => 'name', 'sort_direction'=> 'asc']) }}" class="btn btn-link">
        По названию ↑(А-Я)
    </a>
    <a href="{{ route('products.index', ['sort_by' => 'name', 'sort_direction'=> 'desc']) }}" class="btn btn-link">
        По названию ↓(Я-А)
    </a>
</div>

    @foreach($products as $product)
    <li> <a href="{{ route('product.show', $product->id) }}">
        {{$product->name}}</a>-{{$product->price->price}} руб. </li>

    @endforeach

    <div class="mt-3">
        @for ($i=1; $i<=$products->lastPage(); $i++)
            @if ($i==$products->currentPage())
                <strong> {{ $i }}</strong>
            @else
                <a href="{{ $products ->url($i)}}"> {{$i}} </a>
            @endif
        @endfor
    </div>
@endsection
