<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добро пожаловать</title>
</head>
<style>
    a {
        text-align: center; display: block; margin:300px auto 0; width: 400px; font-size: 40px; color: red; transition: 0.2s;
    }
    a:hover {
        color: rgb(255, 123, 0); transform: scale(1.2,1.2);
    }
</style>
<body>
    <a href="{{route('album.index')}}">Перейти к экзамену</a>
</body>
</html>
