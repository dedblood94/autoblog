<!DOCTYPE html>
<html>
<head>
    <title>Домашняя страница - Автоблог</title>
    <link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
<header>
    <h1>Добро пожаловать на Автоблог!</h1>
    <nav>
        <ul>
            <li><a href="{{ route('login') }}">Войти</a></li>
            <li><a href="{{route('home')}}">Главная</a></li>
            <li><a href="#">Статьи</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="{{route('search')}}">Поиск</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <h2>Последние статьи</h2>
        <div class="article">
            <h3>Заголовок статьи</h3>
            <p>Описание статьи...</p>
            <a href="#">Читать далее</a>
        </div>

        <div class="article">
            <h3>Заголовок статьи</h3>
            <p>Описание статьи...</p>
            <a href="#">Читать далее</a>
        </div>
    </section>

    <aside>
        <h2>Популярные статьи</h2>
        <ul>
            <li><a href="#">Название статьи 1</a></li>
            <li><a href="#">Название статьи 2</a></li>
            <li><a href="#">Название статьи 3</a></li>
        </ul>
    </aside>
</main>

<footer>
    <p>© 2023 Автоблог. Все права защищены.</p>
</footer>
</body>
</html>
