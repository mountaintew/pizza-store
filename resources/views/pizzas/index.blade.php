@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/logo.png" alt="logo" width="50%">
        <div class="title">
            Pizza List
        </div>
        <!-- @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->
        @foreach($pizzas as $pizza) <!-- loop from an array $pizzas as $pizza per item -->
            <div>
              {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </div>
        @endforeach
        
    </div>
</div>
@endsection