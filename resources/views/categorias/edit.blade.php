@extends('layouts.app')

@section('title', 'Cadastrar nova categoria')

@section('content')
<div class="container">
  <div class="row">
    <form class="" action="{{ route('categorias.update', $categoria->id) }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
        <label for=""Categoria>Categoria</label>
        <input type="text" class="form-control" name="nome" value="{{ $categoria->nome }}">
      </div>
      <button type="submit" class="btn btn-default" name="button">Cadastrar nova categoria</button>
    </form>
  </div>
</div>
@endsection
