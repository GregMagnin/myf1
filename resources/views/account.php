<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte - MyF1</title>
</head>
<body id="account">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/navbar.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/menu.php'; ?>

<h1 class="titleAccount"></h1>
<form action="/modifyAccount" method="post">
<div class="containerButtons">
<div class="modifyUsername">
<input type="text" name="newUsername" id="newUsername" placeholder="Nom d'utilisateur">
<p>Modifier le nom d'utilisateur</p>    
</div>
<br>
<hr>
<div class="modifyMail">
<input type="text" name="newEmail" id="newEmail" placeholder="Email">
<p>Modifier l'email</p> 
<br>
</div>
<hr>
<div class="modifyPassword">
<input type="password" name="newPassword" id="newPassword" placeholder="Mot de passe">
<p>Modifier le mot de passe</p>
 <br>
</div>
<hr>
<br>
<button type="submit" class="modifyInfo">Modifier les informations</button> <br>
</form>



<button id="buttonShowModal" type="button" class="deleteButton">Supprimer le compte</button> 
</div>

<div id="modalDeleteAccount" class="modalDeleteAccount">
  <div class="modal-content">
    <span class="closeModal">&times;</span>
    <h1 class="titleModal">Êtes vous sur de vouloir supprimer votre compte ?</h1> <br>
    <div class="buttonsModal">
    <form action="/deleteAccount" method="post">
        <button type="submit" class="yesDelete">Oui, supprimez le compte</button>
    </form>
    <button id="buttonNo" class="buttonNo">Non</button>
    </div>
  </div>
</div>


<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
<script src="http://localhost:5173/resources/scripts/modalDeleteAccount.js"></script>
<script>
    let heure = new Date().getHours();

let paragraphe = document.getElementById('greetingUser');
let titleAccount = document.querySelector('.titleAccount');


if (heure >= 20 || heure < 6) {
    paragraphe.innerHTML = "Bonsoir " + "<?php echo $_SESSION['user']; ?>";
    titleAccount.innerHTML = "Bonsoir " + "<?php echo $_SESSION['user']; ?>"  + " que voulez vous faire sur votre compte ?";
} else {
    paragraphe.innerHTML = "Bonjour " + "<?php echo $_SESSION['user']; ?>";
    titleAccount.innerHTML = "Bonjour " + "<?php echo $_SESSION['user']; ?>" + " que voulez vous faire sur votre compte ?";
}

</script>
</body>
</html>