@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Cadastrar um novo Aluno.</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label><br>
        <input type="text" name="name" id="name" class="form-control"><br>
        <label>Endereço</label><br>
        <input type="text" name="address" id="address" class="form-control"><br>
        <label>Celular</label><br>
        <input type="text" name="mobile" id="mobile" class="form-control"><br>
        <input type="submit" value="Salvar" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
