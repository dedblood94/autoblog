<!DOCTYPE html>
<html>
<head>
    <title>Статтi - Автоблог</title>
    <link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
<h1>Статi</h1>
@include('section.header')

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

@include('section.footer')
</body>
</html>
