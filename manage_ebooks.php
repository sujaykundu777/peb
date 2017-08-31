<?php 
   session_start(); //Starts the session
   include 'auth/connection.php';
   include 'layouts/auth_header.php';
   if(($_SESSION["username"])&&($_SESSION["useraccess"]==1)){      
      
   }
   else{
//redirects to login if user is not logged 
header("location:login.php");
   }
   mysqli_close($conn);
 ?>


<div class="container">

<h1> Showing All Ebooks </h1>
<!-- Output all the ebooks here which have title , name , edit links -->
<hr/>
<a href="ebooks/add_new_ebook.php" class="btn btn-danger">Add New Ebook </a> 

</div>
<div class="row">

</div>

<?php
include 'layouts/footer.php';
?>