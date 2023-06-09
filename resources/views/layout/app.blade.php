<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPLG2 NEKAT</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/smkn.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('Komponen.navbar')
    @yield('konten')
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
