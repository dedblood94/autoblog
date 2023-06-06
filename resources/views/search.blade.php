<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пошук</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/app.css">
</head>
<body>

@include('section.header')
<main>
    <h1>Автоблог</h1
    <h2>Поиск статей</h2>

    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="Введите ключевое слово">
        <button type="submit">Найти</button>
    </form>

    <div class="search-results">
        <h3>Результаты поиска</h3>

        <div class="article">
            <h4>Заголовок статьи 1</h4>
            <p>Описание статьи...</p>
            <a href="#">Читать далее</a>
        </div>

        <div class="article">
            <h4>Заголовок статьи 2</h4>
            <p>Описание статьи...</p>
            <a href="#">Читать далее</a>
        </div>
    </div>
</main>
@include('section.footer')
</body>
</html>
