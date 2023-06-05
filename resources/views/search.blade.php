<!DOCTYPE html>
<html>
<head>
    <title>Поиск - Автоблог</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Автоблог</h1>
@include('section.header')
<main>
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
