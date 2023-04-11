<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destination Index</title>
</head>
<body>
  <div class="container">
    @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
  </div>
  <div class="create-new-destination">
    <a href="{{ route('destinations.create') }}" class="btn">Crea Nuova Destinazione</a>
  </div>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Destinazione</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($destinations as $destination)
        <tr>
          <td>{{ $destination->id }}</td>
          <td>{{ $destination->name }}</td>
          <td>
            <form action="{{ route('destinations.destroy', $destination->id) }}" method="post">
              <a href="{{ route('destinations.edit', $destination->id) }}" class="btn">Modifica</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>