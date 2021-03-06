<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The 2021 Frontend developer Crash Course</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    <div class="navbar">
        @include('layouts.header')
    </div>

    @yield('content')

    <section class="contact-section">
        @include('layouts.footer')
    </section>

    <script>
        const menuBtn = document.getElementById('mobile-cta')
        nav = document.querySelector('nav')
        exitBtn = document.getElementById('mobile-exit');

        menuBtn.addEventListener('click', () => {
            nav.classList.add('menu-btn');
        })

        exitBtn.addEventListener('click', () => {
            nav.classList.remove('menu-btn');
        })
    </script>
</body>

</html>
