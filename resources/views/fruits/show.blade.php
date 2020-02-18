@extends('layouts.main')

@section('content')
  <div class="container mt-5">
    <div class="clearfix mb-4">
      <h1 class="d-inline-block">Info frutto {{$fruit->id}}</h1>
      <a class="btn btn-success float-right" href="{{ route('homepage')}}">Homepage</a>
    </div>
    <div class="card" style="width: 18rem;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Nome: {{$fruit->name}}</li>
        <li class="list-group-item">Peso: {{$fruit->peso}}</li>
        <li class="list-group-item">Varietà: {{$fruit->varieta}}</li>
        <li class="list-group-item">Creato il:{{$fruit->created_at}}</li>
        <li class="list-group-item">Aggionato il: {{$fruit->updated_at}}</li>
      </ul>
    </div>
  </div>
@endsection
