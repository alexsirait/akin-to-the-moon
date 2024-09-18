<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Hp</th>
        <th scope="col">Id</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
        <tbody>
            @foreach ($user as $us)
                <tr>
                    <td>{{ $us->name }}</td>
                    <td>{{ $us->hp }}</td>
                    <td>{{ $us->id }}</td>
                    <td>
                        <a class="btn btn-primary" href="/edit_user?id={{ $us->id }}">Edit</a>
                        <a class="btn btn-danger" href="/deleteuser?id={{ $us->id }}">Delete</a>
                    </td>
                  </tr>
            @endforeach
    <a class="btn btn-success" href="/adduser">add dong</a>
            <table class="table">
</body>
</html>
