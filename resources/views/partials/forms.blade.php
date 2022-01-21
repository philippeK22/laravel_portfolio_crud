<form action="{{ route("profils.store") }}" method="POST">

    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nom</label>
      <input type="string" name="nom" class="form-control" id="nom">

    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label">Prenom</label>
      <input type="string" name="prenom" class="form-control" id="prenom">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" id="age">
      </div>
      <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="string" name="titre" class="form-control" id="titre">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
      </div>

      <div class="mb-3">
        <label for="telephone" class="form-label">Telephone</label>
        <input type="number" name="telephone" class="form-control" id="telephone">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
