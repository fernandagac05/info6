@extends('layouts.master')

@section('content')

    @include('fragments.validation-errors')
    @include('fragments.sesion')

    <h1>Categorias</h1>

    <form action="{{route('category.store')}}" method="POST">
      @csrf
      @include('dashboard.category._form')
    </form>

@endsection




