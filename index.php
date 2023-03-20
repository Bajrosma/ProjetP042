  
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
    <div class=contener>
        <div class="container mt-3 mb-4">
            <div class="col-lg-9 mt-4 mt-lg-0">
            <h5 class="card-title text-uppercase mb-0">Vos coachs préférés :</h5>

                <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                    <table class="table manage-candidates-top mb-0">

                        <!-- coach one-->
                        <tbody>
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/coach1.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">Marc Zuc</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1"></i>Yoga expert</li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Reserver</button>
                            </td>    
                        </tr>
                        
                        <!-- coach 2-->
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/coach2.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">Kevin Heart</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1"></i>Jogging coach</li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Reserver</button>
                            </td>    
                        </tr>

                        <!-- coach 3-->
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/coach3.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">Stephanie Brooks</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1"></i>Pilates teacher</li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Reserver</button>
                            </td>    
                        </tr>

                        <!-- coach 4-->
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/coach4.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">name</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1">Volleyball coach</i></li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Reserver</button>
                            </td>    
                        </tr>
                        </tbody>
                    </table>   
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <!-- activities -->
        <div class=contener>
        <div class="container mt-3 mb-4">
            <div class="col-lg-9 mt-4 mt-lg-0">
            <h5 class="card-title text-uppercase mb-0">Vos prochaines séances :</h5>

                <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                    <table class="table manage-candidates-top mb-0">

                        <!-- Activity one-->
                        <tbody>
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/coach1.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">Yoga</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1"></i>Date: 12.02.2023</li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Détails</button>
                            <button type="button" class="btn btn-light">Annuler</button>
                            </td>    
                        </tr>
                        
                        <!-- activity 2-->
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/pilates.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">Pilates</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1"></i>Date: 12.02.2023</li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Détails</button>
                            <button type="button" class="btn btn-light">Annuler</button>
                            </td>    
                        </tr>

                        <!-- Activity 3-->
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/coach1.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">Workout Volleyball style</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1"></i>Date: 12.02.2023</li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Détails</button>
                            <button type="button" class="btn btn-light">Annuler</button>
                            </td>    
                        </tr>

                        <!-- Activity 4-->
                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img class="img-fluid" src="userContent/img/jogging.jpg" alt="">
                            </div>
                            <div class="candidate-list-details">
                                <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <!-- put the link to the profile of the coach when clicking on his link maybe?-->
                                    <h5 class="mb-0"><a href="#">Jogging Session</a></h5>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                    <li><i class="fas fa-filter pr-1"></i>Date: 12.02.2023</li>
                                    </ul>
                                </div>
                                </div>
                            </div>                           
                            </td>
                            <td class="candidate-list-favourite-time text-center">
                            <!-- Put the link to the page to book another meeting with the coach-->
                            <button type="button" class="btn btn-light">Détails</button>
                            <button type="button" class="btn btn-light">Annuler</button>
                            </td>    
                        </tr>
                        </tbody>
                    </table>   
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
<?php
//including the footer of the page
include("src/php/footer.php");
?>