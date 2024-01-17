@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edite o estudante</div>
  <div class="card-body">

      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nome</label><br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"><br>
        <label>Endereço</label><br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"><br>
        <label>Celular</label><br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"><br>
        <input type="submit" value="Atualizar" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
