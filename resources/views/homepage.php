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
    <li class="searchIcon"><img src="../../public/images/search.png" alt="search icon"></li>
    <li class="userInfo"><?php if ($_SESSION["loggedin"] = true) {
        echo 'Bonjour ' . $_SESSION["user"];
    } else {
        echo 'Inscrivez vous';
    }
    ?>
     </li>
 </ul>
</nav>





<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>

</body>
</html>