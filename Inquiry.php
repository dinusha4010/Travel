<?php  $title="Inquiry-Travel-Sri Lanka";$pagetitle="Inquiry Form";include 'header.php';?>

<section class="vh-50 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
          <h3>Please fill out the form below and we will get back to you as soon as possible.</h3>
          <form name="inquiry" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="first_name" class="form-control form-control-lg" name="first_name" id="first_name" required>
                    <label class="form-label" for="fullname"><p>First Name</p></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="last_name" class="form-control form-control-lg" name="last_name" required>
                    <label class="form-label" for="checkIn"><p>Last Name</p></label>
                  </div>

                </div>
              </div>

              <div class="row">

              <br><p><span id="fnameError"></span></p>
                <br><p><span id="lnameError"></span></p>
              </div>  

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" required>
                    <label class="form-label" for="emailAddress"><p>Email</p></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="number" id="phone" class="form-control form-control-lg" name="phone" required>
                    <label class="form-label" for="phoneNumber"><p>Phone Number</p></label>
                  </div>

                </div>
              </div>
              <div class="row">
              <br><p><span id="phoneError"></span></p>
                <br><p><span id="emailError"></span></p>
              </div>

              <div class="row">
                <div class="col-md-12 mb-8">

                  <div class="form-outline">
                  <label class="form-label" for="fullname"><p>Inquiry</p></label>
                  <textarea class="form-control" placeholder="Write your inquiry here" name ="inquiry" id="inquiry" style="height: 200px" required  ></textarea>
                  
                  </div>
                  <br><p><span id="inquiryError"></span></p>
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            
                </div> 
                </div>
                </div>
                </form>
               
                <br><p><span id="inquiryError"></span></p>


                
<script>
    // function to validate name
    function validatefName()
{
    const first_name=document.getElementById("first_name").value;
    const fnameError=document.getElementById("fnameError");

    if(first_name.length <4 || first_name.length>50)
    {
      fnameError.innerHTML="first Name must be between 4 & 50 characters";
        return false;

    }
    else{

      fnameError.innerHTML="";
        return true;
    }

}

function validatelName()
{
    const last_name=document.getElementById("last_name").value;
    const lnameError=document.getElementById("lnameError");

    if(last_name.length <4 || last_name.length>50)
    {
      lnameError.innerHTML="last Name must be between 4 & 50 characters";
        return false;

    }
    else{

      lnameError.innerHTML="";
        return true;
    }

}
// function to validate email
function validateEmail()
{
    const email=document.getElementById("email").value;
    const emailError=document.getElementById("emailError");   
    
    if (email===" " || !email.includes("@"))
    {
        emailError.innerHTML="please enter a valid email address";
        return false;

    }
    else{

emailError.innerHTML="";
return true;
}
}

// function to validate password
function validatePhone()
{

    const phone=document.getElementById("phone").value;
    const phoneError=document.getElementById("phoneError");

    if(phone.length!=10)
    {
      phoneError.innerHTML="Phone number should be 10 digit";
        return false;

    }
    else{

      phoneError.innerHTML="";
        return true;
    }

}


function validateinquiry()
{
    const inquiry=document.getElementById("inquiry").value;
    const inquiryError=document.getElementById("inquiryError");

    if(inquiry.length <10 || inquiry.length>500)
    {
      inquiryError.innerHTML="description must be between 10 & 500 characters";
        return false;

    }
    else{

      inquiryError.innerHTML="";
        return true;
    }

}
// event listeners for real time validation'
document.getElementById("first_name").addEventListener("input",validatefName);
document.getElementById("last_name").addEventListener("input",validatelName);
document.getElementById("email").addEventListener("input",validateEmail);
document.getElementById("phone").addEventListener("input",validatePhone);
document.getElementById("inquiry").addEventListener("input",validateinquiry);
</script>



<?php


// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $first_name = $_POST['first_name'];     
    $last_name = $_POST['last_name'];   
    $email = $_POST['email'];       
    $phone = $_POST['phone']; 
    $inquiry = $_POST['inquiry']; 

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO Inquiry (first_name, last_name, email, phone,inquiry)
            VALUES ('$first_name', '$last_name', '$email', '$phone','$inquiry')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "<h3> we will get back to you as soon as possible</h3>";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}else{

    
}
?>
   
      </div>
    </div>
  </div>
</section>




<?php include 'footer.php';?>