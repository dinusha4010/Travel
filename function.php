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


?>