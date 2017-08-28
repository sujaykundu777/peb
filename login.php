<?php 
 include 'layouts/header.php';
 include 'auth/check_status.php';
?>

  <div class="row">
       <div class=" page-title-parallax">
          
           <h1 class="jumbotron-text"> Login </h1>
        </div>
       <div class="col s4 offset-s4">
               <form method="POST"  id="loginForm" action="auth/login_user.php">
                 
                 <input type="text" placeholder="Enter Username" name="username" required="true" />
                
                 <input type="password" placeholder="Enter Password" name="password" required="true" />

                 <input type="submit" value="login" class="formButton btn btn-lg btn-primary">
                                   
               </form>
       </div>
        
  </div>

<?php 
 include 'layouts/footer.php';
?>