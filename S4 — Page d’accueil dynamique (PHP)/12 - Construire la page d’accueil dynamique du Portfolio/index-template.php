<!-- index-template.php : affichage (principalement du HTML) -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1><?= $article['titre'] ?></h1>
    <p><?= $article['contenu'] ?></p>
</body>
</html>
