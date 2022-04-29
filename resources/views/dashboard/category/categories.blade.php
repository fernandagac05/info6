@extends('layouts.master')

@section('content')

    <h1>Categorias</h1>

    <a href="{{ route('category.create') }}" class="btn btn-success">Create</a>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Url</th>
            <th scope="col" colspan="2">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <th scope="row">{{ $category->id }}</th>
              <td>{{ $category->title }}</td>
              <td>{{ $category->url_clean }}</td>
              <td>
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-secondary">Edit</a>
              </td>
              <td>
                  <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $category->id }}" type="submit" class="btn btn-danger">Delete</button>
              </td>
            </tr>  
          @endforeach
    
        </tbody>
      </table>


    
@endsection