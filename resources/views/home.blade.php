<!DOCTYPE html>
<html>
<head>
    <title>Домашняя страница - Автоблог</title>
    <link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
<h1>Добро пожаловать на Автоблог!</h1>
@include('section.header')
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

@include('section.footer')
</body>
</html>
