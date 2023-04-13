<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Пароль</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Войти</button>
    </div>
</form>