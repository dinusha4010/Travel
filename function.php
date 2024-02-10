<?php




function userLogin()
{ 
  

  if($_SESSION['user_type']==4)
  {
    header('Location: staff.php');
  exit();

  }else{
    header('Location: package.php');
    exit();

  }

}

function traverlPackage($result)
{   
   
    while ($row = $result->fetch_assoc()) {
    

        echo '<div class="col-md-3">
        <div class="card">
          <img src="' . $row['image_link'] . '" class="card-img-top" alt="Placeholder Image">
          <div class="card-body">
            <h3 class="card-title">' . $row['package_name'] . '</h3>
            <p class="card-text">' . $row['description'] ."<br><br>Duration : ". $row['duration']." Days <br><br>Price : EUR". $row['price'].'</p>
            <a href="#" class="btn btn-primary">Book</a>
          </div>
        </div>
      </div>';


        
}
}

function traverInquiry($result)
{   
   
    while ($row = $result->fetch_assoc()) {
    

        echo '<div class="col-md-3">
        <div class="card">
          
          <div class="card-body">
            <h3 class="card-title">'. "Inquiry from: ".'</h3>
            <p class="card-text">' ."First Name : ". $row['first_name'] ."<br><br>Last Name : " . $row['last_name'] ."<br><br>Email : ". $row['email'] ."<br><br>Phone Number : ". $row['phone']."<br><br>Inquiry :". $row['inquiry']."<br><br>inquiry Date :". $row['inquiry_date'].'</p>
            <a href="inquiry_update.php?id='.$row['inquiry_id'].'" class="btn btn-primary btn-sm" >Update Status</a>
          </div>
        </div>
      </div>';


        
}
}

function traverInquiry2($result)
{   
   
    while ($row = $result->fetch_assoc()) {
    

        echo '<div class="col-md-3">
        <div class="card">
          
          <div class="card-body">
            <h3 class="card-title">'. "Inquiry from: ".'</h3>
            <p class="card-text">' ."First Name : ". $row['first_name'] ."<br><br>Last Name : " . $row['last_name'] ."<br><br>Email : ". $row['email'] ."<br><br>Phone Number : ". $row['phone']."<br><br>Inquiry :". $row['inquiry']."<br><br>inquiry Date :". $row['inquiry_date'].'</p>
            
          </div>
        </div>
      </div>';


        
}
}

function  traverInquiryHistory($result)
{   
   
    while ($row = $result->fetch_assoc()) {
    

        echo '<div class="col-md-3">
        <div class="card">
          
          <div class="card-body">
            <h3 class="card-title">'. "Inquiry from: ".'</h3>
            <p class="card-text">' ."First Name : ". $row['first_name'] ."<br><br>Last Name : " . $row['last_name'] ."<br><br>Email : ". $row['email'] ."<br><br>Phone Number : ". $row['phone']."<br><br>inquiry :". $row['inquiry']."<br><br>Inquiry Date :". $row['inquiry_date']."<br><br>Reply By :". $row['user_name']."<br><br>Reply was :". $row['response']."<br><br>Reply Date :". $row['reply_date'].'</p>
            
          </div>
        </div>
      </div>';


        
}
}




?>