<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя страница - Автоблог</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/app.css">
</head>
<body>
@include('section.header')
<main>
    <div class="welcomeAside">
    <div class="welcomeContainer">
        <div class="welcomeCar">
            <img src="../../resources/images/car.png" alt="123">
        </div>
        <h1 class="welcomeHeading">Добро пожаловать в автоблог!</h1>
    </div>
    <aside>
        <h2>Популярные статьи</h2>
        <ul>
            <li><a href="#">Название статьи 1</a></li>
            <li><a href="#">Название статьи 2</a></li>
            <li><a href="#">Название статьи 3</a></li>
        </ul>
    </aside>
    </div>
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


</main>
@include('section.footer')
</body>
</html>
