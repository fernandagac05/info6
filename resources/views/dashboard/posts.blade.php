@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')

<h1>Post</h1>
<form action="{{route('post.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="title">Título</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>

    <div class="form-group">
      <label for="url_clean">Url limpia</label>
      <input type="text" class="form-control" name="url_clean" id="url_clean">
    </div>

    <div class="form-group">
      <label for="content">Contenido</label>
      <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>

    <input type="submit" value="Enviar" class="btn btn-primary">

  </form>


@endsection