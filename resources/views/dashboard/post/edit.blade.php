@extends('layouts.master')

@section('content')
  @include('fragments.validation-errors')
  @include('fragments.sesion')
  <h1>Post</h1>
  <form action="{{route('post.update')}}" method="POST">
    @csrf
    @include('dashboard.post._form')
  </form>
@endsection