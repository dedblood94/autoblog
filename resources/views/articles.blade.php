<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статті</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/app.css">
</head>
<body>
@include('section.header')
<main>
    <div class="articlesPageHeading">
    <h1>Статтi</h1>
    <h2>Список статей</h2>
    </div>
    <div class="articlesPageSection">
        <div class="articlesPageBox">
        <div class="articlePage">
            <h3>Заголовок статьи 1</h3>
            <p>Описание статьи...</p>
            <a href="#">Читать далее</a>
        </div>

        <div class="articlePage">
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
    </div>
</main>
@include('section.footer')
</body>
</html>
