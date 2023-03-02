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