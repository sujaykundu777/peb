<?php 
   session_start(); //Starts the session
   include 'auth/connection.php';
   $select_users = "SELECT * FROM users ";
   $select_ebooks = "SELECT * FROM ebooks";
   $result_users = mysqli_query($conn,$select_users);
   $result_ebooks = mysqli_query($conn,$select_ebooks);
   $users = mysqli_num_rows($result_users);
   $ebooks = mysqli_num_rows($result_ebooks);
   $username = $_SESSION["username"];
   $name = $_SESSION["name"];
   $email = $_SESSION["email"];
   if(($_SESSION["username"])&&($_SESSION["useraccess"]==1)){      
   }
   else{
//redirects to login if user is not logged 
header("location:login.php");
   }
   mysqli_close($conn);
 ?>
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

   <body>
 
  <div class="navbar-fixed">
   <nav>
    <div class="nav-wrapper nav-primary">
      <a href="admin.php" class="brand-logo"> Programming Ebooks</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
    
        <li><a href="manage_users.php">Manage Users </a> </li>
        <li><a href="manage_ebooks.php">Manage Ebooks</a> </li>
        <li><a href="profile.php"><?php Print "$username"; ?> </a></li>
        <li><a href="auth/logout.php"> Logout </a> </li> 
      </ul>
    </div>
  </nav>
</div>

<div class="row">
  
         <div class="container">
           <h1>Welcome Admin ! </h1>
  
           <div class="card">
           <h5> Name : <?php Print "$name" ?> </h5>
           <h5> Email : <?php Print "$email" ?> </h5>
           <h5> Username : <?php Print "$username" ?> </h5>
           </div>
       </div>
</div>

  <div class="row">
        <div class="card col-4">       
            <h2> Users </h2>
               <h1> <?php printf("%d",$users); ?> </h1>
        </div>
        <div class="card col-4">
             <h2> Ebooks </h2>
              <h1> <?php printf("%d",$ebooks); ?> </h1>
        </div>
        <div class="card col-4">
             <h2> Blog Posts </h2>
              <h1> 0 </h1>
        </div>
  </div>

   
 
