<!DOCTYPE html>
<html>
<head>
    <title>Автоблог - Список статей</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
    <h1>Автоблог</h1>
    <nav>
        <ul>
            <li><a href="{{ route('login') }}">Войти</a></li>
            <li><a href="{{route('home')}}">Главная</a></li>
            <li><a href="{{route('articles')}}">Статьи</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="{{route('search')}}">Поиск</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Список статей</h2>

    <div class="articles">
        <div class="article">
            <h3>Заголовок статьи 1</h3>
            <p>Описание статьи...</p>
            <a href="#">Читать далее</a>
        </div>

        <div class="article">
            <h3>Заголовок статьи 2</h3>
            <p>Описание статьи...</p>
            <a href="#">Читать далее</a>
        </div>
    </div>

    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
    </div>
</main>

<footer>
    <p>© 2023 Автоблог. Все права защищены.</p>
</footer>
</body>
</html>
