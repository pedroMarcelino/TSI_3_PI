<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Editar | {{$todo->name}}</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">{{ $todo->name }}</h1>

        <form method="POST" action="/todos/edit/update">
            @csrf
            <input type="hidden" name="id" value="{{$todo->id}}">

              <div class="form-group col-md-12">
                <label for="inputName">Nome</label>
                <input type="text" name="name" class="form-control"value="{{ $todo->name }}">
              </div>

              <div class="form-group col-md-12">
                <label for="inputDeion">Descrição</label>
                <textarea name="description" class="form-control"> {{ $todo->description }} </textarea>
              </div>

            <button type="submit" class="btn btn-primary mt-4 ml-3">Atualizar</button>
        </form>

        <a class="float-right" href="/todos">Voltar</a>
    </div>
</body>
</html>
