<!doctype html>
<html lang="fr">
    <head>
        <!-- Primary Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- Page Title -->
        <title><?= $title ?></title>

        <!-- Canonical & Favicon -->	
        <!-- <link rel="canonical" href="future-url"> -->
        <link rel="icon" type="image/png" href="/src/Assets/img/web-development-blue.png"/>
        
        <!-- Secondary Meta -->
        <meta name="description" content="TP 01 - Qualité et tests - Tests Login system with Jenkins & Sonarqube">
        <meta name="author"      content="Yannick Lucas & Yann">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600&display=swap" rel="stylesheet">

        <!-- Tailwind Css -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?= $ressourceCSS ?>">
    </head>
    <body>
         <!-- ========== Content ========== -->
        <?= $content ?>
    </body>
</html>
