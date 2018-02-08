@extends('layouts.app')

@section('title', 'Listagem de categorias')

@section('content')
<div class="container">
  <div class="row">
    <a href="categorias/create" class="btn btn-primary">Novo</a>
    <br>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>
            Categorias
          </th>
          <th>
            Alterar
          </th>
          <th>
            Excluir
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($categorias as $categoria)
          <tr>
            <td>
              {{ $categoria->id }}
            </td>
            <td>
              {{ $categoria->nome }}
            </td>
            <td>
              <a href="categorias/{{ $categoria->id }}/edit" class="btn btn-primary">Alterar</a>
            </td>
            <td>
              <form class="" action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" name="button">Excluir</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @if(session('store-success'))
    <div class="alert alert-success">
      {{ session('store-success') }}
    </div>
    @endif
    @if(session('delete-success'))
    <div class="alert alert-success">
      {{ session('delete-success') }}
    </div>
    @endif
  </div>
</div>
@endsection
