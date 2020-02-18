@extends('layouts.main')

@section('content')
  <div class="container mt-5">
    <div class="clearfix mb-4">
      <h1>Inserisci un nuovo frutto</h1>
      <a class="btn btn-success float-right" href="{{ route('homepage')}}">Homepage</a>
    </div>
    <form method="post" action="{{ route('fruits.store')}}">
      @csrf
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
      </div>
      <div class="form-group">
        <label for="peso">Peso</label>
        <input type="text" class="form-control" name="peso" id="peso" placeholder="Peso">
      </div>
      <div class="form-group">
        <label for="varieta">Varietà</label>
        <input type="text" class="form-control" name="varieta" id="varieta" placeholder="Varietà">
      </div>
      <button class="btn btn-success" type="submit" name="button">Inserisci</button>
    </form>

  </div>
@endsection
