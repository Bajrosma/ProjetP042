
  <?php
  //starting the sessions
  session_start();
  
  /**
   * Auteurs : Bajro Osmanovic, Thomas Intriere, Miljana Despotovic
   * Date : 23.01.2023
   * Description : the profile of the user
   */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de profil</title>
</head>
<body>
    <header>
        <h1>SPORTMATCH - Profil</h1>
        <nav>
            <a href="../../index.php">Acceuil</a>
            <a href="Connection.php">Connecte toi</a>
            <a href="Swipes.php">Swipes</a>
            <a href="Profil.php">Profil</a>
            <a href="Detail.php">Details</a>
        </nav>
    </header>
    <div class=contener>
        <input type="hidden" name="action" value="login">
        <ul>
            <img class="CoachProfilPicutre" src="../../userContent/img/R.png" alt="icon profil" width="100px">   
            <li>
            <a id="userSurname">Nom : </a>
            </li>
            <li>
            <a id="userName">Prénom : </a>
            </li>
            <li>
            <a id="userMail">Mail : </a>
            </li>
            <li>
            <a id="userAge">Age : </a>
            </li>
            <li>
            <a id="userCity">Ville : </a>            
            </li>
            <li>
            <a id="userAdress">Adresse : </a>
            </li>
        </ul>

        <form action="Modify.php">
            <input type="submit" name="Modify" value="Modifier" />
        </form>
    </div>
    <footer>Copyright</footer>
</body>
</html>