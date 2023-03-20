<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classements - MyF1</title>
</head>
<body id="rankingPage">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/partialManager.php'; ?>
  
  <div class="buttons">
    <div class="driverButton"><button id="driverRankButton">Championnat pilote</button></div>
    <div class="constructorButton"><button id="constructorRankButton">Championnat constructeur</button></div>
  </div>
<div class="rankings" id="ranking"></div>


<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
<script src="http://localhost:5173/resources/scripts/ranking.js"></script>

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