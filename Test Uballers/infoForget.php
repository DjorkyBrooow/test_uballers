<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="logo_uballers.png" />
    <title>Test - Uballers</title>
    <link rel="stylesheet" href="index.css" />
    <script src="index.js"></script>
</head>

<body>
    <div id="login">
        <h3>J'ai oublié mon email ou mobile</h3>
        <label for="signin">Réinscrivez-vous</label>
        <a href="index.html"><button>S'inscrire</button></a>
    </div>
    <div>
        <h3>J'ai oublié mon mot de passe</h3>
        <form id="password" method="post" action="change.php">
            <div>
                <label for="login">Email ou mobile</label>
                <input type="text" placeholder="Votre email ou moble" name="login">
            </div>
            <div>
                <label for="password">Nouveau mot de passe</label>
                <input type="password" placeholder="Votre nouveau mot de passe" name="newPwd">
            </div>
            <div>
                <label for="password">Vérifier mot de passe</label>
                <input type="password" placeholder="Rentrez à nouveau votre mot de passe" name="verifNewPwd">
            </div>
            <div>
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>

</body>


</html>