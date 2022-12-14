<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyF1</title>
</head>
<body>

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




<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>

</body>
</html>