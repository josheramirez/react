<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('subir')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        {{-- {{ csrf_field() }} --}}
        @csrf
        <label for="archivo"><b>Archivo: </b></label><br>
        <input type="file" name="archivo" required>
        <input class="btn btn-success" type="submit" value="Enviar" >
      </form>
      @include("errores")
</body>
</html>