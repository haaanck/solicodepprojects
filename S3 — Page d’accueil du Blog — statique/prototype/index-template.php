<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="CSS/componentes.css">
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="CSS/global.css">
</head>

<body>
    <header>
        <nav>
            <ul class="navigation-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Articles</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>

    <section class="introduction">
        <h1>Welcome to <span class="name">Aymane Marouat</span>'s Portfolio<br><span class="junior-size">A junior web developer</span></h1>
    </section>

    <section class="container1">
     <div class="articles-background">

    <?php foreach($articles as $art): ?>

        <div class="article1">
            <img src="<?= htmlspecialchars($art['image'])?>" alt="dev-img">

            <span class="card-categorie <?= htmlspecialchars($art['categorie_couleur']) ?>">
                <?= htmlspecialchars($art['categorie']) ?>
            </span>

            <p><?=htmlspecialchars($art['description'])?></p>

            <hr>
        </div>
    <?php endforeach; ?>

     </div>
    </section>
    <footer></footer>
</body>
</html>
