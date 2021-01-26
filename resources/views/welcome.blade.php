@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/logo.png" alt="logo" width="50%">
        <div class="title">
            Pizza
        </div>
        <p class="msg">{{ session('msg') }}</p><!--  executes only if there is a session data -->
        <a href="/pizzas/create">Order a pizza</a>
    </div>
</div>
@endsection