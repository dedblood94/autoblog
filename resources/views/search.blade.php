<!DOCTYPE html>
<html>
<head>
    <title>Поиск - Автоблог</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/app.css">
</head>
<body>
<h1>Автоблог</h1>
@include('section.header')
<main>
    <div class="searchFormContainer">
    <h2 class="searchHeading">Пошук статей</h2>
    <form class="" action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="Введіть ключове слово">
        <button type="submit">Знайти</button>
    </form>
    </div>
    <div class="searchResults">
        <h3>Результати пошуку</h3>

        <div class="article">
            <h4>Заголовок статті 1</h4>
            <p>Опис статті...</p>
            <a href="#">Читати далі</a>
        </div>

        <div class="article">
            <h4>Заголовок статті 2</h4>
            <p>Опис статті...</p>
            <a href="#">Читати далі</a>
        </div>
    </div>
</main>

@include('section.footer')
</body>
</html>
