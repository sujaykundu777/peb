<?php 
 include 'layouts/header.php';
 include 'auth/check_status.php';
?>

  <div class="row">
       <div class="col-lg page-title-parallax">
          
           <h1 class="jumbotron-text"> Register </h1>
        </div>
           <div class="col s4 offset-s4">
               <form method="POST" action="auth/register_user.php" id="registerForm">
                 
                 <input type="text" placeholder="Enter Username" name="username" required="true" />
                 
                 <input type="text" placeholder="Enter Name" name="name" required="true"/>
            <!--     <h6>Select Gender : </h6>
                 <p>
                 <input class="with-gap" name="gender" type="radio" id="male" value="Male"  />
                 <label for="male">Male</label>
                 </p>
                 <p>
                 <input class="with-gap" name="gender" type="radio" id="female" value="Female" />
                 <label for="female">Female</label>
                 </p>
                 
                 <h6>Select Birthday : </h6>
                 
-->
                 <input type="email" placeholder="Enter Email" name="email" required="true" />

                 <input type="password" placeholder="Enter Password" name="password" required="true" />

                 <input type="submit" value="Register" class="formButton btn btn-lg btn-success">
                                   
               </form>
       </div>
  </div>


<?php 
 include 'layouts/footer.php';
?>