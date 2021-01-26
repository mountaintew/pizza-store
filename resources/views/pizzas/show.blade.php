@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type is {{ $pizza->type }}</p>
    <p class="base">The Pizza base is {{ $pizza->base }}</p>
    <p class="toppings">Extra Toppings</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
        
    </ul>
</div>
<form action="/pizzas/{{ $pizza->id }}" method="POST">
    @csrf 
    @method('DELETE')
    <button>Complete Order</button>
</form>
<a href="/pizzas" class="back"><- Back to all Pizzas</a>
@endsection