@extends('layouts.main')

@section('content')
  <div class="container mt-5">
    <div class="clearfix mb-4">
      <h1 class="d-inline-block">Lista frutti</h1>
      <a class="btn btn-primary float-right" href="{{ route('fruits.create')}}">Nuovo frutto</a>
    </div>

    @if($fruits->isNotEmpty())
      <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Peso</th>
              <th scope="col">Varietà</th>
              <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($fruits as $fruit)
            <tr>
              <th scope="row">{{$fruit->id}}</th>
              <td>{{$fruit->name}}</td>
              <td>{{$fruit->peso}}</td>
              <td>{{$fruit->varieta}}</td>
              <td>
                <a class="btn btn-info" href="{{route('fruits.show',['fruit' => $fruit->id])}}">Visualizza</a>
                <a class="btn btn-warning" href="{{route('fruits.edit',['fruit' => $fruit->id])}}">Modifica</a>
                <form class="d-inline-block" action="{{route('fruits.destroy',['fruit' => $fruit->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger" value="Cancella">
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <p>Non ci sono risultati</p>
    @endif
  </div>
@endsection
