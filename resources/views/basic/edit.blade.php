<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изменить</title>
</head>
<body>
<h1>{{$car->name}}</h1>

<form method="POST" action="/basic/{{$car->id}}">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$car->name}}">
    <input type="submit" value="Обновить название автомобиля">
</form>
</body>
</html>
