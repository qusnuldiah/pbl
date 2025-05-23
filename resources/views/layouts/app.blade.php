<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    @vite('resources/js/app.js')
    @stack('heads')
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <main class="root">
        @yield('content')
    </main>
    @stack('scripts')
</body>

<script>
    feather.replace();
</script>

</html>
