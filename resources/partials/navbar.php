<nav class="navbar">
 <ul class="navList">
 <a href="/homepage"><li class="logoMyF1"><img src="../../public/images/tinywow_MyF1_9583839.png" alt="Logo MyF1"></li></a>
    <span class="verticalBar"></span>
    <a href="/lastArticles"><li class="lastPosts">DERNIERS <br> ARTICLES</li></a>
    <a href="/trendingsArticles"><li class="popularPosts">ARTICLES EN <br> TENDANCES</li></a>
   <a href="/rankings"><li class="standings">CLASSEMENT</li></a>
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