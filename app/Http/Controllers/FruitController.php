<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(){
      $frutta = Fruit::all();

      return view('fruits.index', [
        'titolo' => 'Home',
        'fruits' => $frutta
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(){
      return view('fruits.create',[
        'titolo' => 'Nuovo frutto'
      ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request){

      $dataForm = $request->all();

      $fruit = new Fruit();

      $fruit->name = $dataForm['name'];
      $fruit->peso = $dataForm['peso'];
      $fruit->varieta = $dataForm['varieta'];

      $fruit->save();

      return redirect()->route('homepage');

    }

    /**
     * Display the specified resource.
     */

    public function show(Fruit $fruit){

      // $frutta = Fruit::find($id);
      // $frutta = Fruit::where('id',$id)->first();

      return view('fruits.show',[
        'titolo' => 'Info frutto',
        'fruit' => $fruit
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Fruit $fruit){

      return view('fruits.edit',[
        'titolo' => 'Modifica frutto',
        'fruit' => $fruit
      ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Fruit $fruit){

      $dataForm = $request->all();

      $fruit->update($dataForm);

      return redirect()->route('homepage');

    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Fruit $fruit){

      $fruit->delete();

      return redirect()->route('homepage');

    }
}
