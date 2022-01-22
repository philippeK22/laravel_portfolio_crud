<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titre:</th>
        <th scope="col">Image:</th>
        <th scope="col">Date:</th>
        <th scope="col">Url:</th>
        <th scope="col">Description:</th>


      </tr>
    </thead>
    <tbody>
        @forelse ($myPortfolio as $item)
      <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->titre }}</td>
          <td>{{ $item->image }}</td>
          <td>{{ $item->date }}</td>
          <td>{{ $item->url }}</td>
          <td>{{ $item->description }}</td>

          <td style="display:flex">
              <form action="{{ route("portfolios.destroy",$item->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger">Delete</button>
            </form>
            {{-- show --}}
            <a class="btn btn-primary" href="{{ route("portfolios.show",$item->id) }}">show</a>

            {{-- edit --}}
            <a class="btn btn-success" href="{{ route("portfolios.edit",$item->id) }}">edit</a>

          </td>
          @empty
          <p>comming soon</p>

          @endforelse
      </tr>
    </tbody>
  </table>
