<!DOCTYPE html>
 <html>
   <head> 
     <title>Dashboard - Programming Ebooks</title>  
     <meta charset="utf-8">
     <meta name="keyword" content="programming,ebooks">
     <meta name="description" content="Download Programmming Ebooks">
       
    

     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css"/>
     <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
     <!-- Scripts -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script> 
  <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>

 </head>
 <?php 
   session_start(); //Starts the session
   if($_SESSION["username"]){
   }
   else{
//redirects to login if user is not logged 
header("location:login.php");
   }
   $username = $_SESSION["username"];
   $name = $_SESSION["name"];
   $email = $_SESSION["email"];
     //assigns user value
 ?>
   <body>
 
  <div class="navbar-fixed">
   <nav>
    <div class="nav-wrapper nav-primary">
      <a href="index.php" class="brand-logo"> Programming Ebooks</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="browse.php">Browse</a></li>
        <li><a href="users.php"> Users </a> </li>
        <li><a href="ebooks.php">Ebooks</a> </li>
        <li><a href="logout.php"> Logout </a> </li> 
      </ul>
    </div>
  </nav>
</div>

<div class="row">
  
   <div class="container">
           <h1>Welcome Admin ! </h1>
   </div>
   <div class="row">
           <div class="container">
              <h1> Users </h1>
              <h3> Name : <?php Print "$name" ?> </h3>
 <h3> Email : <?php Print "$email" ?> </h3>
 <h3> Username : <?php Print "$username" ?> </h3>

            </div>
            <div class="container">
               <h1> Ebooks </h1>
            </div>       

   </div>

   
 

</div>