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
            <div class="errorMessage shake-horizontal"><?php if (isset($_SESSION["viewErrorMessageMail"])) { echo $_SESSION["viewErrorMessageMail"]; $_SESSION["viewErrorMessageMail"] = false; }
            if (isset($_SESSION["viewErrorMessageUsername"])) { echo $_SESSION["viewErrorMessageUsername"]; $_SESSION["viewErrorMessageUsername"] = false; }
                if (isset($_SESSION["viewErrorMessagePassword"])) { echo $_SESSION["viewErrorMessagePassword"]; $_SESSION["viewErrorMessagePassword"] = false; }
            
             ?></div>
            <div class="hasAccompt">
                <p>Déjà un compte ? <br>
                    Connectez vous <a href="/login">ici</a> </p>
            </div>
            <div class="signUp"><a href="/login"><button type="submit" formaction="/registerUser" class="buttonGoogle">S'inscrire</button></a>
            <div class="noSignUp"><a href="/homepage"><p class="buttonGoogle">Accèder au site sans se connecter</p></a></div>
    
        </div>
            
        </div>
        <div class="rightSideRegister">
        </div>
    </div>
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
</body>

</html>