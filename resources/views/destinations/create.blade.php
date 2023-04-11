<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destination Create</title>
</head>
<body>
  <div class="container">
    @if(session('status'))
      <div class="alert">
        {{ session('status') }}
      </div>
    @endif
    <form action="{{ route('destinations.store') }}" method="post">
      @csrf
      <div class="row">
        <div class="col">
          <label for="name" class="form-label">Nome Destinazione</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn">Salva</button>
      </div>
    </form>
  </div>
  
</body>
</html>