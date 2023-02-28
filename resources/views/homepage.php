<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyF1</title>
</head>
<body id="homepage">

<nav class="navbar">
 <ul class="navList">
    <li class="logoMyF1"><img src="../../public/images/tinywow_MyF1_9583839.png" alt="Logo MyF1"></li>
    <span class="verticalBar"></span>
    <li class="lastPosts">DERNIERS <br> ARTICLES</li>
    <li class="popularPosts">ARTICLES EN <br> TENDANCES</li>
    <li class="standings">CLASSEMENT</li>
    <a href="/publish"> <li class="createArticle">PUBLIER UN ARTICLE</li></a>
    <li class="searchIcon"><img src="../../public/images/search.png" alt="search icon"></li>
    <li class="userInfo" id="userInfo"><?php if (isset($_SESSION["loggedin"])) {
        echo 'MON PROFIL';
        
    } else {
        echo '<a href="/register"> Inscrivez vous </a>';
    }
    ?></li>
 </ul>
</nav>

<div id="userInfoMenu" class=" <?= (isset($_SESSION["loggedin"])) ? "open" : "hidden" ?>">
<p id="greetingUser"><?=
        'Bonjour ' . $_SESSION["user"];
    ?></p>
<hr class="hr1">
<a href="/myAccount"><p>Mon compte</p></a>
<hr >
<a href="/myArticles"> <p>Mes articles</p></a>
<hr>
<a href="/myComments"> <p>Mes commentaires</p></a>
<hr>
<a href="/logout"> <p class="logoutText">Se déconnecter</p></a>
</div>

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

// Vérification de l'heure
if (heure >= 20 || heure < 6) {
    paragraphe.innerHTML = "Bonsoir " + "<?php echo $_SESSION['user']; ?>";
} else {
    paragraphe.innerHTML = "Bonjour " + "<?php echo $_SESSION['user']; ?>";
}

</script>

</body>
</html>