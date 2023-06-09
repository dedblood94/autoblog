
<header>
    <nav class="navBar">
        <div class="navBarLogo">
            <img src="../../../resources/images/logo.jpg" alt="Моя картинка">
        </div>
        <ul class="navBarList">
            <li class="navBarListItem"><a href="{{route('home')}}">Головна</a></li>
            <li class="navBarListItem"><a href="{{route('articles')}}">Статті</a></li>
            <li class="navBarListItem"><a href="{{route('contact')}}">Допомога</a></li>
            <li class="navBarListItem"><a href="{{route('search')}}">Пошук</a></li>
            <li class="navBarListItem"><a href="{{ route('login') }}">Увійти</a></li>
        </ul>
    </nav>
</header>
