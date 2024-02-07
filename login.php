<?php
      $title="Login-Travel-Sri Lanka";
      $pagetitle="Login ";
      include 'header.php';

      ?>
<form method="post" name="login" action="">
<div class="row justify-content-md-center">
    <label for="UserId" class="col-sm-2 col-form-label"><p>User Name</p></label>
    <div class="col-sm-2">
      <input type="text" class="form-control"  name="userId">
    </div>
  </div>

    <div class="row justify-content-md-center">
    <label for="inputPassword" class="col-sm-2 col-form-label"><p>Password</p></label>
    <div class="col-sm-2">
      <input type="password" class="form-control"  name="inputPassword">
      <button class="btn btn-primary" type="submit" name="login">Login</button>
    </div>
  </div>
  
  </form>  


  





<?php
      
      include 'footer.php';

      ?>
     