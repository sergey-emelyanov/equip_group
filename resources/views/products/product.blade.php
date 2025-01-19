@extends('layouts.app')
@section('content')
    @foreach($productWithPrice as $product)
    <li> <a href="{{ route('product.show', $product->id) }}">
        {{$product->name}}</a>-{{$product->price->price}} руб. </li>

    @endforeach

    <div class="mt-3">
        @for ($i=1; $i<=$productWithPrice->lastPage(); $i++)
            @if ($i==$productWithPrice->currentPage())
                <strong> {{ $i }}</strong>
            @else
                <a href="{{ $productWithPrice ->url($i)}}"> {{$i}} </a>
            @endif
        @endfor
    </div>
@endsection
