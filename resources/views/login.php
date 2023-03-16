<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - MyF1</title>
</head>

<body>

    <div class="loginContainer">
        <div class="leftSide">
            <div class="upperText">
                <h1 class="titleLogin">Se connecter</h1>
                <p class="textLogin">Rentrez vos informations <br> pour vous connecter</p>
            </div>
            
            <form class="formLogin" action="/logUser" method="POST">
                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">
                <input type="password" name="password" id="password" placeholder="Mot de passe">
                <div class="errorMessage shake-horizontal"><?php if (isset($_SESSION["viewErrorMessage"])) { echo $_SESSION["viewErrorMessage"]; $_SESSION["viewErrorMessage"] = false; } ?></div>
            <div class="hasAccompt">
                <p>Pas de compte ? <br>
                    Inscrivez vous <a href="/register">ici</a> </p>
            </div>
            <div class="signUpGoogle"><a href="/homepage"><button type="submit" formaction="/logUser" class="buttonSignIn">Se connecter</button></a></div>
            <div class="noSignUp"><a href="/homepage"><p class="buttonSignIn">Accèder au site sans se connecter</p></a></div>
        </div>
        <div class="rightSideLogin">
        </div>
    </div>


    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
</body>

</html>