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
      <a href="../admin.php" class="brand-logo"> Programming Ebooks</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../manage_users.php"> Manage Users </a> </li>
        <li><a href="../manage_ebooks.php">Manage Ebooks</a> </li>
        <li><a href="../auth/logout.php"> Logout </a> </li> 
      </ul>
    </div>
  </nav>
</div>

<div class="container">
<div class="section_title">
<h3> Add New Ebook</h3>
</div>
<div class="section_links">

</div>
</div>
<div class="row">
   <div class="container">
        <form id="add_new_ebook" method="post" action="add_ebook.php">

             <input type="text" placeholder="Ebook Name " name="ename" id="ename">
             <label for="ebody"> Ebook Description : </label>
             <textarea name="ebody" id="ebody" cols="4" rows="3"></textarea>
             <input type="submit" class="btn" value="Add" >
        </form>
  
   </div>

</div>

<?php
include '../layouts/footer.php';
?>