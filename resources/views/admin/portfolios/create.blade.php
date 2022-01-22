@extends('layout.back')

@section('content')
<h1 class="py-5 text-center text-primary">page admin Skills create</h1>
<button class="btn btn-danger"><a href="{{ route("admin") }}">retour</a></button>

<form action="{{ route("portfolios.store") }}" method="POST">

    @csrf

    <div class="mb-3">
      <label for="titre" class="form-label">Titre:</label>
      <input type="string" name="titre" class="form-control" id="titre">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image:</label>
      <input type="string" name="image" class="form-control" id="image">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date:</label>
        <input type="string" name="date" class="form-control" id="date">
      </div>
    <div class="mb-3">
        <label for="url" class="form-label">Url:</label>
        <input type="string" name="url" class="form-control" id="url">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" class="form-control" id="description">
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
