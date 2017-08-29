<?php
session_start(); //Start the session
include 'connection.php';
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$enc_password = md5($password);
$query = "SELECT * FROM users WHERE username='$username' ";
$result = mysqli_query($conn,$query);

$exists = mysqli_num_rows($result);
$table_username = "";
$table_password = "";
$table_name  = "";
$table_email = "";
$table_accesslevel = "";


//If there is any username that already exists then check the password
if($exists > 0){
   
    
    while($row = mysqli_fetch_assoc($result)){
           $table_username = $row['username'];      //Store the first row username to the $table_users
           $table_password = $row['password'];
           $table_name= $row['name'];
           $table_email = $row['email'];
           $table_accesslevel = $row['accesslevel'];
            //Store the first row 
    }
    //Check the username and password for the first user
    if(($username == $table_username) && ($enc_password == $table_password))
    {         
                  //saving in a global variable
                  $_SESSION["loggedin"] = true;             
                  $_SESSION["username"] = $table_username;
                  $_SESSION["name"] = $table_name;
                  $_SESSION["email"] = $table_email;
       
          if($table_accesslevel == 0){
        
               Print '<script>alert("Login Successful");</script>';
               Print '<script>window.location.assign("../browse.php");</script>';
               
           }  
           else if($table_accesslevel == 1){
             
                Print '<script>alert("Login Succesful as Admin");</script>';
                Print '<script>window.location.assign("../admin.php");</script>';
           }    
    }
    else{
        Print '<script>alert("Incorrect Password");</script>';
        Print '<script>window.location.assign("../login.php");</script>';
    }

 //  printf("Username Exists ! "); 

}
//If username do not exist
else {

    Print '<script>alert("Incorrect Username !");</script>'; //Prompt the user
    Print '<script>window.location.assign("../login.php");</script>'; //Redirects to login.php

}
/*
printf("Result set has %d rows.\n",$exists);

printf("The rows are %s %s %s",$row["username"],$row["name"],$row["email"]);
*/

// Free result set
mysqli_free_result($result);

//close the connection
mysqli_close($conn);

?>
