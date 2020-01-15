<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="shortcut icon" href="../../public/images/favicon.ico">
        <link href="public/css/style.css" rel="stylesheet" /> 
        <script src="https://kit.fontawesome.com/7f77d63822.js" crossorigin="anonymous"></script>
    </head>
        
    <body>
        <?= $content ?>
        <?php include("snackbar.php"); ?>
    </body>
</html>

