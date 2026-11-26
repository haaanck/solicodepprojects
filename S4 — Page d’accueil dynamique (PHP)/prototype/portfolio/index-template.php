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
                <?php foreach($navigation as $nav): ?>

             <li><a href="#"> <?= htmlspecialchars($nav['title']) ?> </a></li>

                <?php endforeach; ?>

            </ul>
        </nav>
    </header>

    <section class="introduction">
        <h1>
            Welcome to <span class="name"><?= htmlspecialchars($name)?></span>'s Portfolio
            <br>
            <span class="junior-size"> <?= htmlspecialchars($role) ?> </span>
        </h1>
    </section>

    

   


    <section class="container1">
     <div class="border">  <h1 class="pro">Projects</h1></div>
     <div class="articles-background">

        <?php foreach($projects as $pro): ?>

        <div class="article1">
            <img src="img/<?= htmlspecialchars($pro['img']) ?>" alt="dev-img">
            <span class="card-categorie <?= htmlspecialchars($pro['color']) ?>"><?= htmlspecialchars($pro['categorie']) ?></span>
            <p><?= htmlspecialchars($pro['text']) ?></p>
            <hr>
        </div>

        <?php endforeach; ?>

     </div>
    </section>

    <footer></footer>
</body>
</html>
