@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf  <!-- Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they're currently authenticated. -->
        <label for="name">Your Name: </label>
        <input type="text" id="" name="name" required>
        <label for="type">Choose Pizza Type: </label>
        <select name="type" id="type">
            <option value="Margarita">Margarita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Veg Supreme">Veg Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>
        <select name="base" id="base">
            <option value="Cheesy Crust">Cheesy Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
            <option value="Thin & Crispy">Thin & Crispy</option>
            <option value="Thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings: </label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
            <input type="checkbox" name="toppings[]" value="beef">Beef<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>

</div>
@endsection