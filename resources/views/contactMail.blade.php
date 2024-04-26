<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>mail envoyé</title>
</head>
<body class="bg-gray-100 font-sans">
<x-header/>   
    <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Mail Envoyé!</h1>
        <p class="text-lg text-gray-700 mb-4">Votre message a été envoyé avec succès.</p>
        <a href="/" class="inline-block bg-lime-500 hover:bg-lime-700 text-white font-bold py-2 px-4 rounded mt-4">Retour à l'accueil</a>
    </div>
<x-footer/>
</body>
</html>
