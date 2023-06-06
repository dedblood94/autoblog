
<header>
    <nav class="navBar">
        <div class="navBarLogo">
            <img src="../../../resources/images/logo.jpg" alt="Моя картинка">
        </div>
        <ul class="navBarList">
            <li class="navBarListItem"><a href="{{route('home')}}">Главная</a></li>
            <li class="navBarListItem"><a href="{{route('articles')}}">Статьи</a></li>
            <li class="navBarListItem"><a href="#">О нас</a></li>
            <li class="navBarListItem"><a href="{{route('search')}}">Поиск</a></li>
            <li class="navBarListItem"><a href="{{ route('login') }}">Войти</a></li>
        </ul>
    </nav>
</header>
