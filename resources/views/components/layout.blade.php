<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>

    <nav>
        <x-nav-bar href="/">Home</x-nav-bar>
        <x-nav-bar href="/help">Help</x-nav-bar>
        <x-nav-bar href="/contact">Contact</x-nav-bar>
    </nav>
    
    {{$slot}}

</body>

</html>