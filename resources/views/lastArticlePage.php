<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derniers Articles - MyF1</title>
</head>
<body id="lastArticles">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/partialManager.php'; ?>

<h1 class="lastArticleTitle">Voici les derniers articles mis en ligne sur le site :</h1>


<?php foreach ($lastArticles as $article) { ?>
    <a href="/article?id=<?php echo $article['id'] ?>">
    <div class="containerArticles">
    <img src="<?= $article['image'] ?> " alt="Image de l'article"> 
    <div class="articlesText">
    <p class="title">
    <?= $article['title'] ?>  </p></a>  <br>
    <p class="moreInfo"><?= $article['author'] ?> <br>
    Date de publication : <?= $article['publish_date'] ?></p>
    </div>
</div>

<hr class="hrHomepage">

<?php } ?>


<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>

<script>
    let heure = new Date().getHours();

let paragraphe = document.getElementById('greetingUser');

// Vérification de l'heure
if (heure >= 20 || heure < 6) {
    paragraphe.innerHTML = "Bonsoir " + "<?php echo $_SESSION['user']; ?>";
} else {
    paragraphe.innerHTML = "Bonjour " + "<?php echo $_SESSION['user']; ?>";
}

</script>
</body>
</html>