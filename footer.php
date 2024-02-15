<?php

if(isset($_SESSION['user_type'])){
if ($_SESSION['user_type']==4) {
      echo '<div class="container text-center col col-lg-9" style="padding-top: 20px;" >
      <div class="btn-group">
      <a href="create_package.php" class="btn btn-primary">Create new tour packages</a>
      <a href="staff_view.php" class="btn btn-primary">Modify and remove tour package</a>
      <a href="staff_response.php" class="btn btn-primary">travellers inquiry</a>
      <a href="inquiry_history.php" class="btn btn-primary">travellers inquiry history</a>
      <a href="event_manage.php" class="btn btn-primary">Add event</a>
      </div>
      </div>';
      
  
}
}

?>
<footer>
<div style="padding-top: 100px;">
<div class="container text-center">    
    <div class="row justify-content-md-center ">
    
        
    
  
    <div class="col-md-3">
    <img src="images/frame1/logo.gif" alt="image"  class="rounded mx-auto d-block img-fluid" width="75" height="100">  
            <p style="text-align: center;"><br>Tourism Hotline<br>1912 <br><br><br><br><br></p>
    </div>
    <div class="col-md-3">
    <a href="">Subscribe<br></a>
          <a href="">Contact Us<br>        </a>
          <a href="">Important Notices<br>          </a>
          <a href="">Terms of Use<br></a>
          <a href="">Complaints<br></a>
          <p style="text-align: center;"><br><br>&copy; 2024 All Rights Reserved by Team 12</p>
          
    </div>
    <div class="col-md-3 ">
    <p style="text-align: center;">Follow Us On</p>   
           <a href=""> <img src="images/frame3/facebook.png" alt="image"  width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/instagram.png" alt="image" width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/twitter.png" alt="image" width="50" height="50" style="padding: 5px;"></a>
           <a href=""> <img src="images/frame3/whatsapp.png" alt="image" width="50" height="50" style="padding: 5px;"></a>
    </div>
  </div>
</div>
      
      
          
        </div>
</div>

      </footer>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
