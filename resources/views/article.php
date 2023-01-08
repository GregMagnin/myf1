<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article['title'] ?> </title>
</head>
<body id="article">

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
        echo '<a href="/register"> Inscrivez vous </a>' ;
    }
    ?></li>
 </ul>
</nav>

<div id="userInfoMenu" class=" <?= (isset($_SESSION["loggedin"])) ? "open" : "hidden" ?>">
<p><?=
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

<div class="articlePage">

<div class="leftSide">
<div class="authorPublish">
<p class="author">Autheur : <?= $article['author']; ?> </p> <p class="publish">Date de publication : <?= $article['publish_date']; ?></p> <p class="views"><?= $article['views'];  ?> vues</p>
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
        background-size: 100%;"> <p> <?= $item['title'] ?></p> </div></a>
<?php } ?>
</div>

</div>


<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
</body>
</html>