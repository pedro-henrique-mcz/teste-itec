<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="assents/css/normalize.css">
    <link rel="stylesheet" href="assents/css/reset.css">
    <link rel="stylesheet" href="assents/css/grid.css">
    <link rel="stylesheet" href="assents/css/style.css">
    <link rel="stylesheet" href="../assents/css/formulario.css">
    <!--Javascript-->
    <script src="/js/script.js"></script>
    <!--Tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div class="card-form">
        <form action="/notice" method="post" enctype="multipart/form-data">
            @csrf
            <label for="image">Insira a imagem:</label>
            <input type="file" id="image" name="image" class="image">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" placeholder="Insira o título">
            <label for="tema1">Tema 1:</label>
            <input type="text" name="tema1" id="tema1" placeholder="Insira um tema">
            <label for="tema2">Tema 2:</label>
            <input type="text" name="tema2" id="tema2" placeholder="Insira o título">
            <input type="submit" class="btn" value="Criar Notícia">
        </form>
    </div>
</body>
</html>