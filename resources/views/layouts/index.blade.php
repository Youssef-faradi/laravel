<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <title>TEST</title>
</head>
<body>
    @yield("content")
</body>
</html>