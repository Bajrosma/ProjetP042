<?php
 //starting the sessions
 session_start();

 /**
    * Auteurs : Bajro Osmanovic, Thomas Intriere, Miljana Despotovic
    * Date : 30.01.2023
    * Description : login page
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
   $activeSwipes="";
   $activeAdd="";

   // changing the title od the page
   $pageName="LogIn";
   $pathCss="../../resources/css/";
   
  //calling the header, database and configuration file
    require_once("header.php");
 ?>
 <!-- the bootstrap login template -->
 <section class="vh-100">
   <div class="container py-5 h-100">
     <div class="row d-flex align-items-center justify-content-center h-100">
       <div class="col-md-8 col-lg-7 col-xl-6">
         <img src="../../userContent/img/loginPhoto.jpg"
           class="img-fluid" alt="Phone image">
       </div>
       <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
         <form method="post" action="verifyUser.php">
 
           <input type="hidden" name="action" value="login">
 
           <!-- Username input -->
           <div class="form-outline mb-4">
               <input type="text" name="username" placeholder="Username" id="form2Example18" class="form-control form-control-lg" />
               <label class="form-label" for="username">Username</label>
           </div>
 
           <!-- Password input -->
           <div class="form-outline mb-4">
               <input type="password" name="password" placeholder="Password" id="form2Example28" class="form-control form-control-lg" />
               <label class="form-label" for="password">Password</label>
           </div>
 
           <!-- Submit button -->
           <div class="pt-1 mb-4">
               <input class="btn btn-outline-primary" type="submit" value="Log in" />
           </div>
         </form>
       </div>
     </div>
   </div>
 </section>
 
 <?php
 // including the footer of the page
 include("footer.php");