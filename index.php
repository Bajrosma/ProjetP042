  
  <?php
  //starting the sessions
  session_start();

  /**
   * Auteurs : Bajro Osmanovic, Thomas Intriere, Miljana Despotovic
   * Date : 23.01.2023
   * Description : the index of the website/ the home page
   */

   //the path of the pages for the header
   //the path for the list of the books
   $pathSwipe="src/php/"; 
   //the path for home page
   $pathHome="";
    // the path for add book page
   $pathAdd="src/php/";
   // the path for the logo of the website
   $pathIcon="userContent/img/";
   //path for the user icon when there's connection
   $pathUser="userContent/images/";
   //path for user profile when there's connection
   $pathUserInfo="src/php/";
   //path for login formulary
   $pathLogin="src/php/";
   // path to disconnect the user
   $pathDisconnect="src/php/";

   // changing the active page
   $activeHome="active";
   $activeSwipes="";
   $activeAdd="";

   // changing the title od the page
   $pageName="Accueil";
   $pathCss="resources/css/";
   
  //calling the header, database and configuration file
  require_once("src/php/header.php");

?>
    <header>
        <h1>SMATCH</h1>
        <img class="ProfilPicture" src="userContent/img/R.png" alt="icon profil" width="100px">
    </header>
    <div class=contener>
        <h2>Vos coachs préférés :</h2>
        <hr>
        <img class="CoachProfilPicutre" src="userContent/img/R.png" alt="icon profil" width="100px">   
        <img class="CoachProfilPicutre" src="userContent/img/R.png" alt="icon profil" width="100px">
        <img class="CoachProfilPicutre" src="userContent/img/R.png" alt="icon profil" width="100px">
        <hr>
        <h2>Vos prochaines séances :</h2>
        <hr>
        <img class="GymPlacePicutre" src="userContent/img/R.png" alt="icon profil" width="100px">   
        <img class="GymPlacePicutre" src="userContent/img/R.png" alt="icon profil" width="100px">
        <hr>
    </div>

<?php
//including the footer of the page
include("src/php/footer.php");
?>