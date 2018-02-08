@extends('layouts.app')

@section('title', 'Cadastrar nova categoria')

@section('content')
<div class="container">
  <div class="row">
    <form class="" action="{{ route('categorias.store') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label for=""Categoria>Categoria</label>
        <input type="text" class="form-control" name="nome" value="">
      </div>
      <button type="submit" class="btn btn-default" name="button">Cadastrar nova categoria</button>
    </form>
  </div>
</div>
@endsection
