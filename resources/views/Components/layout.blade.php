<!DOCTYPE html>
<html lang="en" class="size-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{$title}}</title>
</head>
<body class="flex flex-col flex-grow-1"></body>
<div class="hidden md:flex items-center gap-4  md:flex-col md:flex-grow-1">
    <x-header/>
</div>

<div class="flex flex-col flex-grow-1 md:hidden">
    <x-headerMobile/>
</div>

{{$slot}}

<x-footer/>