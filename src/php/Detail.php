<?php
//starting the sessions
session_start();

  /**
   * Auteurs : Bajro Osmanovic, Thomas Intriere, Miljana Despotovic
   * Date : 23.01.2023
   * Description : the deatil of the profiles
   */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de détail</title>
</head>
<body>
    <header>
        <h1>SPORTMATCH - Détail</h1>
        <nav>
            <a href="../../index.php">Acceuil</a>
            <a href="Connection.php">Connecte toi</a>
            <a href="Swipes.php">Swipes</a>
            <a href="Profil.php">Profil</a>
            <a href="Detail.php">Details</a>
        </nav>
    </header>
    <div class=contener>
        <!-- BackGround or a big picture-->
            <img class="CoachProfilPicutre" src="../../userContent/img/R.png" alt="icon profil" width="100px">   
        <h2>Coach <!-- name and surname --></h2>
        <input type="hidden" name="action" value="login">
        <ul>
            <li>
            <a id="userAge">Age : </a>
            </li>
            <li>
            <a id="userCity">Description : </a>            
            </li>
        </ul>

        <form action="Modify.php">
            <input type="submit" name="Modify" value="Modifier" />
        </form>
    </div>
    <footer>Copyright</footer>
</body>
</html>