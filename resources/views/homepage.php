<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - MyF1</title>
</head>
<body id="homepage">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/partialManager.php'; ?>

<div class="containerFirstArticles">
<a href="/article?id=<?php echo $articles[0]['id'] ?>"><div class="firstArticle">
<h1><?php echo $articles[0]['title']; ?></h1>
</div></a>


<div class="articlesRight">

<a href="/article?id=<?php echo $articles[1]['id'] ?>"><div class="firstArticleRight">
    <h1><?php echo $articles[1]['title']; ?> </h1>
</div>
</a>
<a href="/article?id=<?php echo $articles[2]['id']; ?>">
<div class="secondArticleRight">
<h1><?php echo $articles[2]['title']; ?> </h1>
</div></a>    
</div>
</div>

<?php foreach ($articles as $article) { ?>
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

<style>
.firstArticle {
    background-image: url(<?php echo $articles[0]['image']; ?>);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}

.firstArticleRight {
    background-image: url(<?php echo $articles[1]['image']; ?>);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.secondArticleRight {
    background-image: url(<?php echo $articles[2]['image']; ?>);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;


}
</style>
<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
<script>
    let heure = new Date().getHours();

let paragraphe = document.getElementById('greetingUser');


if (heure >= 20 || heure < 6) {
    paragraphe.innerHTML = "Bonsoir " + "<?php echo $_SESSION['user']; ?>";
} else {
    paragraphe.innerHTML = "Bonjour " + "<?php echo $_SESSION['user']; ?>";
}

</script>

</body>
</html>