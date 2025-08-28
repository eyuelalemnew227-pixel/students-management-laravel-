<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('styles')
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<body>
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="#">Sidebar 1</a></li>
                <li><a href="#">Sidebar 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </aside>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@yield('scripts')
</html>