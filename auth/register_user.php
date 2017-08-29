<?php
//Create Connection to Server
//mysqli_connect("host address","user name","password","database");
include 'connection.php';
$username = mysqli_real_escape_string($conn,$_POST['username']);
$name  = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$enc_password = md5($password); 
$bool = true;

// check connection 
if(mysqli_connect_errno()){
  
     throw new Exception("MySQL connection error: " . mysqli_connect_error());
  
    }
  //Query the users table 
  $query = "SELECT * FROM users" ;
  $result = mysqli_query($conn,$query);
  //display all the rows from query 
  while($row = mysqli_fetch_array($result))
  {
     $table_users = $row['username']; 
    if($username == $table_users){
     $bool = false;    
    // echo "Username has been taken ! "; z
     printf("Username already taken ");//Prompt the user
    }
  }
 
  if($bool){ //check if bool is true
    $accesslevel = 0;
     mysqli_query($conn,"INSERT INTO users (username,name,email,password,accesslevel) VALUES ('$username','$name','$email','$enc_password','$accesslevel')");   
     //Prompt the user
     Print '<script>alert("Successfully Registered ! ");</script>';
     Print '<script>window.location.assign("../login.php");</script>';
  
     }

//echo "Connection Successful !";
//echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

mysqli_close($conn);

?>