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
            <a href="feature2.php" class="btn btn-primary">Book</a>
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

function imageUpload()
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
  
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
  
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
  
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
  
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // If everything is not ok, return false
        return false;
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            // If everything is ok, return the target file path
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            // If there's an error in uploading, return false
            return false;
        }
    }
}




?>