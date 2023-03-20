  
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
   $pathSwipe=""; 
   //the path for home page
   $pathHome="../../";
    // the path for add book page
   $pathAdd="";
   // the path for the logo of the website
   $pathIcon="../../userContent/img/";
   //path for the user icon when there's connection
   $pathUser="../../userContent/images/";
   //path for user profile when there's connection
   $pathUserInfo="";
   //path for login formulary
   $pathLogin="";
   // path to disconnect the user
   $pathDisconnect="";

   // changing the active page
   $activeHome="";
   $activeSwipes="active";
   $activeAdd="";

   // changing the title od the page
   $pageName="Swipes";
   $pathCss="../../resources/css/";
   
  //calling the header, database and configuration file
  require_once("header.php");

?>

    <header>
        <h1>SPORTMATCH - Swipes</h1>
    </header>
    <div class=contener>
    <img class="CoachProfilPicutre" src="../../userContent/img/R.png" alt="icon profil" width="100px">   
    </div>

    <footer>Copyright</footer>

<?php
//including the footer of the page
include("footer.php");
?>