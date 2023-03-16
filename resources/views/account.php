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
<input type="text" name="newUsername" id="newUsername">    
</div>
<br>
<hr>
<div class="modifyMail">
<input type="text" name="newEmail" id="newEmail"> 
<br>
</div>
<hr>
<div class="modifyPassword">
<input type="password" name="newPassword" id="newPassword">
 <br>
</div>
<hr>
<br>
<button type="submit">Modifier les informations</button> <br>
</form>
<button type="submit">Supprimer le compte</button> <!-- créer un modal afin de confirmer l'action -->
</div>

<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
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