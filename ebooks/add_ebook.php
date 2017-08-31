<?php 
include '../auth/connection.php';
$ebook_name = mysqli_real_escape_string($conn,$_POST['ename']);
$ebook_body = mysqli_real_escape_string($conn,$_POST['ebody']);
$bool = true;
// check connection 
if(mysqli_connect_errno()){
       throw new Exception("MySQL connection error: " . mysqli_connect_error());
      }

      $query = "SELECT * FROM ebooks";
      $result = mysqli_query($conn,$query);
      while($row = mysqli_fetch_array($result))
      {
         $table_ebook_name = $row['ebook_title']; 
        if($ebook_name == $table_ebook_name){
         $bool = false;    
        // echo "Username has been taken ! "; z
         printf("The Ebook Already Exists ! ");//Prompt the user
        }
      }
      if($bool){
      mysqli_query($conn, "INSERT INTO ebooks (ebook_title,ebook_body) VALUES ('$ebook_name','$ebook_body')");     
      Print '<script>alert("Ebook Successfully Added ! ");</script>';
      Print '<script>window.location.assign("../manage_ebooks.php");</script>';
       }
?>