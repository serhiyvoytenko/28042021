<html>
<head>
    <title>
        @yield('title', 'Заголовок по умолчанию')
    </title>
</head>
<body>
<div id="content">
    @section('content')
        <p>Это контент страницы по умолчанию.</p>
    @show
</div>
</body>
</html>
