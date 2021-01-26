<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //for /pizzas
    public function index(){

        //Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type','hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }  
    public function show($id){
        $pizza = Pizza::findOrFail($id);  //if not exists in db it shows 404 not found
        // use the $id variable to query the  db  for a record
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){


        $pizza = new Pizza();
        
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = (request('toppings'));
        $pizza->save(); // instance for inserting in the database using model

        error_log($pizza);
        return redirect('/')->with('msg','Thanks for your order'); //session data to be passed on main view

    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }

}
