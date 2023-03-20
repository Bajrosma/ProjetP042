<?php
//starting the sessions
session_start();

  /**
   * Auteurs : Bajro Osmanovic, Thomas Intriere, Miljana Despotovic
   * Date : 23.01.2023
   * Description : the connection for the page
   */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connection</title>
</head>
<body>
    <header>
        <h1>SPORTMATCH - Connection</h1>
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
                <label for="username">Identifiant : </label>
                <input type="text" id="username" name="username">
                </li>
                <li>
                <label for="password">Mot de passe : </label>
                <input type="password" id="password" name="password" required>
                </li>
                <li>
                <input type="submit" name="login" value="Se connecter" />
                </li>
            </ul>
        </form>

       <a href="CreateAccount.php"><div id="signUp">S'inscrire</div></a>
    </div>

    <footer>Copyright</footer>
</body>
</html>