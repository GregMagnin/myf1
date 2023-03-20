<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un article - MyF1</title>
</head>

<body id="publishPage">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/resources/partials/partialManager.php'; ?>


<form action="/publishArticles" method="post" enctype="multipart/form-data">
<div class="titleArticleContainer">
    <h1>Titre de l'article</h1> <br>
    <textarea class="textareaTitle" name="articleTitle" id="articleTitle" cols="30" rows="10" placeholder="Votre titre ici" minlength="30"></textarea>
</div>

<div class="contentArticleContainer">
<h1>Contenu de l'article</h1> <br>
<textarea class="textareaContent" name="articleContent" id="articleContent" cols="30" rows="10" placeholder="Votre contenu ici" minlength="100"></textarea>
</div>
<div class="imageArticleContainer">
    <h1>Selectionnez une image pour l'article</h1>
    <input type="file" id="imageArticle" name="imageArticle" class="imageArticle">
</div>
<div class="createArticleContainer">
<input type="submit" value="Créer l'article" class="createArticleButton">
</div>
</form>

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