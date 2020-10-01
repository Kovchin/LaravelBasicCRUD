<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Car</title>
</head>
<body>
<form method="POST" action="/basic">
    @csrf

    <input type="text" name="name">
    <input type="submit" value="Создать">
</form>
</body>
</html>
