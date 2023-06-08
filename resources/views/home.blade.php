<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя сторінка - Автоблог</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/app.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@include('section.header')
<main>
    <div class="welcomeAside">
    <div class="welcomeContainer">
        <div class="welcomeCar">
            <img src="../../resources/images/car.png" alt="123">
        </div>
        <h1 class="welcomeHeading">Ласкаво просимо в автоблог!</h1>
    </div>
    <aside>
        <h2 class="asidePreview">Популярні статті</h2>
        <ul class="asideList">
            <li class="asideListElement"><a href="#">Назва статті 1</a></li>
            <li class="asideListElement"><a href="#">Назва статті 2</a></li>
            <li class="asideListElement"><a href="#">Назва статті 3</a></li>
        </ul>
    </aside>
    </div>
    <h2 class="articlesHeading">Останні статті</h2>
<section>
    <div class="articlesBox">
    <div class="article">
        <h3>Заголовок статті 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta in maiores necessitatibus numquam, officia optio provident repellendus sapiente vel.</p>
        <a href="#">Читать далее</a>
    </div>

    <div class="article">
        <h3>Заголовок статті 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eius harum iusto magnam necessitatibus nemo nulla quibusdam sequi ullam voluptatibus.</p>
        <a href="#">Читать далее</a>
    </div>
    <div class="article">
        <h3>Заголовок статті 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta in maiores necessitatibus numquam, officia optio provident repellendus sapiente vel.</p>
        <a href="#">Читать далее</a>
    </div>
    <div class="article">
        <h3>Заголовок статті 4</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta in maiores necessitatibus numquam, officia optio provident repellendus sapiente vel.</p>
        <a href="#">Читать далее</a>
    </div>
    <div class="article">
        <h3>Заголовок статті 5</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta in maiores necessitatibus numquam, officia optio provident repellendus sapiente vel.</p>
        <a href="#">Читать далее</a>
    </div>
    <div class="article">
        <h3>Заголовок статті 6</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta in maiores necessitatibus numquam, officia optio provident repellendus sapiente vel.</p>
        <a href="#">Читать далее</a>
    </div>
    <div class="article">
        <h3>Заголовок статті 7</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta in maiores necessitatibus numquam, officia optio provident repellendus sapiente vel.</p>
        <a href="#">Читать далее</a>
    </div>
    </div>
    <div id="pagination">
        <button id="prevBtn">Минулі</button>
        <button id="nextBtn">Наступні</button>
    </div>
</section>


</main>
@include('section.footer')
<script src="../../resources/js/app.js"></script>
</body>
</html>
