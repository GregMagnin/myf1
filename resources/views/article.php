<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article['title'] ?> - MyF1 </title>
</head>
<body id="article">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/navbar.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/menu.php'; ?>

<div class="articlePage">

<div class="leftSide">
<div class="authorPublish">
<p class="author">Auteur : <?= $article['author']; ?> </p> <p class="publish">Date de publication : <?= $article['publish_date']; ?></p> <p class="views"><?= $article['views'];  ?> vues</p>
</div>
<div class="articleImageContainer">
<img class="articleImage" src="<?= $article['image']; ?>" alt="Image de l'article"> <br>
</div>
<h1 class="articleTitlePage"><?= $article['title']; ?></h1> <br>
<div class="contentArticleContainer">
<p class="contentArticle"><?= $article['content'] ?> </p>
</div>

<div class="letCommentBoxContainer">
<input type="text" class="letCommentBox" name="letCommentBox" id="letCommentBox" placeholder="Laisser un commentaire">

</div>

</div>

<div class="rightSide">
    <h1>Articles en tendances</h1>
    <?php foreach ($trendingArticles as $item) { ?>
    <a href="/article?id=<?php echo $item['id'] ?>"><div class="articleTendance" style="background-image: url(<?= $item['image']; ?> );
        background-position: center;
        background-repeat: no-repeat; 
        background-size: cover;"> <p> <?= $item['title'] ?></p> </div></a>
<?php } ?>
</div>

</div>


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