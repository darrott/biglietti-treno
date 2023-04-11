<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destinazione Edit</title>
</head>
<body>
  <div class="container">
    <form action="{{ route('destinations.update', $destination->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col">
          <label for="name" class="form-label">Nome Destinazione</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $destination->name) }}" required>
        </div>
        <button type="submit" class="btn">Salva</button>
      </div>
    </form>
  </div>
  
</body>
</html>