@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza) <!-- loop from an array $pizzas as $pizza per item -->
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="Pizza Icon">
            <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a>  </h4>
        </div>
    @endforeach
</div>
@endsection