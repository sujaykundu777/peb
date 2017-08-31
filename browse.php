<?php 
   session_start(); //Starts the session
   if($_SESSION["username"]){
    include 'auth/connection.php';
    $query = "SELECT * FROM ebooks";
    $result = mysqli_query($conn,$query);
   
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
<!DOCTYPE html>
 <html>
   <head> 
     <title>Browse Ebooks - Free Download Programming Ebooks </title>  
     <meta charset="utf-8">
     <meta name="keyword" content="programming,ebooks">
     <meta name="description" content="Download Programmming Ebooks">
       
    
<!-- Compiled and minified CSS -->
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
          -->
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
      <a href="index.php" class="brand-logo"> Programming Ebooks</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li><a href="browse.php"> Browse Ebooks </a> </li>
        <li><a href="profile.php"> Profile </a> </li>
        <li><a href="auth/logout.php"> Logout </a> </li> 
      </ul>
    </div>
  </nav>
</div>
 
   <div class="row">
          <div class="dash-title-parallax">
            <h1 class="jumbotron-text"> Welcome <?php Print "$username" ?> - Browse Ebooks </h1>
           
        </div> 
          
   </div>

      <div class="row">
        
      <div class="container">
      <?php 
      echo '<table class="ebook_table" border="1">';
         while($row = mysqli_fetch_assoc($result)){
          echo '<tr>'; 
          foreach( $row as $value){
            echo '<td>' . $value . '</td>';
           }
           echo '</tr>';
         }
         echo '</table>';
      ?>
    
    </div>
    
    
     </div>       

   

 

<?php 
 include 'layouts/footer.php';
?>

