<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
</head>

<body>

    <div class="registerContainer">
        <div class="leftSide">
            <div class="upperText">
                <h1 class="titleRegister">S'inscrire</h1>
                <p class="textRegister">Rentrez vos informations <br> pour vous inscrire</p>
            </div>
            
            <form class="formRegister" action="/registerUser" method="POST" class="form">
            <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">    
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <div class="hasAccompt">
                <p>Déjà un compte ? <br>
                    Connectez vous <a href="/login">ici</a> </p>
            </div>
            <div class="signUpGoogle"><button class="buttonGoogle"> <span class="logo"></span>Se connecter avec
                    Google</button></div>
        </div>
        <div class="rightSideRegister">
        </div>
    </div>
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
</body>

</html>