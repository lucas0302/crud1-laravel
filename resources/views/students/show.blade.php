//blog\resources\views\students\show.blade.php
@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Página do estudante</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nome : {{ $students->name }}</h5>
        <p class="card-text">Endereço : {{ $students->address }}</p>
        <p class="card-text">Celular : {{ $students->mobile }}</p>
  </div>
    <hr/>
  </div>
</div>
