<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>А вот и джонни</h1>

<a href="basic\create">Создать автомобиль</a>

<table>
    <tr>
        <th>Номер</th>
        <th>Название</th>
        <th>Модифицировать</th>
        <th>Удалить</th>
    </tr>

    @foreach($cars as $car)

        <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="basic\{{$car->id}}">{{$car->name}}</a></td>
            <td><a href="basic\{{$car->id}}\edit">Изменить</a></td>
            <td>
                <form method="POST" action="\basic\{{$car->id}}">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
