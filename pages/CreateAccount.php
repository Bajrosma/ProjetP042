<?php
//starting the sessions
session_start();

  /**
   * Auteurs : Bajro Osmanovic, Thomas Intriere, Miljana Despotovic
   * Date : 23.01.2023
   * Description : the page where you create account
   */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de création d'un compte</title>
</head>
<body>
    <header>
        <h1>SPORTMATCH - création d'un compte</h1>
        <nav>
            <a href="../../index.php">Acceuil</a>
            <a href="Connection.php">Connecte toi</a>
            <a href="Swipes.php">Swipes</a>
            <a href="Profil.php">Profil</a>
            <a href="Detail.php">Details</a>
        </nav>
    </header>
    <div class=contener>
        <form method="post" action='src/php/userVerification.php' enctype="multipart/form-data">
            <input type="hidden" name="action" value="login">
            <ul>
                <li>
                <label for="userSurname">Nom : </label>
                <input type="text" id="userSurname" name="userSurname">
                </li>
                <li>
                <label for="userName">Prénom : </label>
                <input type="text" id="userName" name="userName">
                </li>
                <li>
                <label for="userMail">Mail : </label>
                <input type="text" id="userMail" name="userMail">
                </li>
                <li>
                <label for="userAge">Age : </label>
                <input type="number" id="userAge" name="userAge">
                </li>
                <li>
                <label for="userCity">Ville : </label>
                <input type="text" id="userCity" name="userCity">
                <label for="userAdress">Adresse : </label>
                <input type="text" id="userAdress" name="userAdress">
                </li>
                <li>
                <label for="password">Mot de passe : </label>
                <input type="password" id="password" name="password" required>
                </li>
                <li>
                <label for="verifPassword">Vérifier le mot de passe : </label>
                <input type="password" id="verifPassword" name="verifPassword" required>
                </li>
                <li>
                <input type="submit" name="CreateAccountButton" value="Crée" />
                </li>
            </ul>
        </form>
    </div>

    <footer>Copyright</footer>
</body>
</html>