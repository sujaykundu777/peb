<?php 
   session_start(); //Starts the session
   include 'layouts/auth_header.php';
   if(($_SESSION["username"])&&($_SESSION["useraccess"]==1)){      
    include 'auth/connection.php';
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
   }
   else{
//redirects to login if user is not logged 
header("location:login.php");
   }
   mysqli_close($conn);
 ?>


<div class="container">
<div class="section_title">
<h2> Showing All Users </h2>
</div>
<div class="section_links">
<a href="users/add_new_user.php" class="btn btn-danger">Add New User </a> 
</div>
<!-- Output all the ebooks here which have title , name , edit links -->



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