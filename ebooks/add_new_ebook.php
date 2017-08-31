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
     <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css"/>
     <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
     <!-- Scripts -->
  <script src="../node_modules/jquery/dist/jquery.min.js"></script> 
  <script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>

 </head>

 <body>
 
  <div class="navbar-fixed">
   <nav>
    <div class="nav-wrapper nav-primary">
      <a href="admin.php" class="brand-logo"> Programming Ebooks</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../manage_users.php"> Manage Users </a> </li>
        <li><a href="../manage_ebooks.php">Manage Ebooks</a> </li>
        <li><a href="../auth/logout.php"> Logout </a> </li> 
      </ul>
    </div>
  </nav>
</div>

<div class="container">
<h1> Add Ebooks </h1>
</div>
<div class="row">
  <div class="container">
   <form method="post" action="ebooks/add_ebooks.php" id="ebook_details">
        <label for="ebook_name">Name : </label>
        <input type="text" id="ebook_name">
        <label for="ebook_cat">Category : </label>
        <select id="ebook_cat">
           <option> PHP </option>
           <option> C++ </option>
        </select>
        <label for="ebook_body">Description: </label>
        <<textarea rows="4" cols="4" id="ebook_body"></textarea>
   </form>
</div>
</div>

<?php
include '../layouts/footer.php';
?>