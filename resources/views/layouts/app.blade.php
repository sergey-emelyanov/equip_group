<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Some title</title>
</head>
<body>
  <nav>
    <ul>
        <li><a href="{{ route('group.index') }} ">Главная Страница </a></li>
        <li><a href="{{ route('products.index') }} ">Список товаров</a></li>

    </ul>
</nav>
    @yield('content')
</body>
</html>