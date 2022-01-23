@extends('layout.back')

@section('content')
<h1 class="py-5 text-center text-primary">page admin Contacts create</h1>
<button class="btn btn-danger"><a href="{{ route("admin") }}">retour</a></button>

<form action="{{ route("contacts.store") }}" method="POST">

    @csrf

    <div class="mb-3">
      <label for="titre" class="form-label">Titre:</label>
      <input type="string" name="titre" class="form-control" id="titre">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" class="form-control" id="description">
      </div>

    <div class="mb-3">
      <label for="adresse" class="form-label">Adresse:</label>
      <input type="string" name="adresse" class="form-control" id="adresse">
    </div>
    <div class="mb-3">
        <label for="telephone" class="form-label">Telephone:</label>
        <input type="string" name="telephone" class="form-control" id="telephone">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="string" name="email" class="form-control" id="email">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
