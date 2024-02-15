<?php
$title="Tour-Packages-Travel-Sri Lanka";$pagetitle="Design Your package" ;include 'header.php';
;


//what to do with the data.isset will take only added info.it will check before sumitting are there boxes empty
if (isset($_POST['submit'])) {

 $destination = $_POST['destination'];//code name
 $check_in = $_POST['check_in'];
 $adults = $_POST['adults'];
 $kids = $_POST['kids'];
 $stays = $_POST['stays'];
 $travel_guide = $_POST['travel_guide'];//code name
 $transpotation = $_POST['transpotation'];//code name



// connect to the database server .refer db.php
include 'db.php';

//write a sql statement to insert data
$sql = "insert into design_tour (destination,check_in,kids,adults,stays,travel_guide,transpotation)  
       values ('$destination','$check_in','$kids','$adults','$stays','$travel_guide','$transpotation')";  //same as local host 85 the one created table


       
if ($conn->query($sql)=== TRUE) {

    echo "<h2>Your data was submitted & Please see the rates according to your requirement</h2>";
}
else {
   echo "Error" .$sql . "<br>" .$conn->error;
}
//close the database connection connection


}


  
?>


<script>
    document.body.style.transition = "background 3s";
document.body.style.backgroundColor = "grey";
  </script>


  
     <?php
              $trip_cost = ($adults*170 + $kids*35)*$stays;

             
              if ($transpotation == 'YES') {
                  // Add transportation cost if 'yes' is selected
                  $transportation_cost = 40;
              }
               else{
                $transportation_cost = 0;
               }
            

              
              if ($travel_guide == 'OPTION1'||$travel_guide == 'OPTION2') {
                  // Add travel guide requirements if 'required' is selected
                  $travel_guide_cost = 50;
                  
              } 
              else {
                $travel_guide_cost = 0;
              }

              $total_cost_transpotation=$transportation_cost*$stays+$trip_cost;
              
              $total_cost_travel_guide=$travel_guide_cost*$stays +$trip_cost;
              $total=$transportation_cost*$stays+$travel_guide_cost*$stays+$trip_cost
             
    ?> 
<div class="row"></div>
<table class="table table-striped table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Your requirement</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Destination</td>
      <td><?php echo $destination?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Check-In</td>
      <td><?php echo $check_in?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Adults</td>
      <td><?php echo $adults?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>kids</td>
      <td><?php echo $kids?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Stays</td>
      <td><?php echo $stays?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Travel Guide</td>
      <td><?php echo $travel_guide?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Transpotation</td>
      <td><?php echo $transpotation?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Trip Cost Only</td>
      <td><?php echo $trip_cost?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Trip Cost with transportation only</td>
      <td><?php echo $total_cost_transpotation?></td>
    </tr>

    <tr>
      <th scope="row">10</th>
      <td>Trip Cost with travel guide only</td>
      <td><?php echo $total_cost_travel_guide?></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Trip Cost with travel guide & transpotation</td>
      <td><?php echo $total?></td>
    </tr>
  </tbody>
</table>
<?php
echo"<h2>breakdown as follows for a single person.</h2><h5>breakdown as follows for a single person.</h5>"
    ?>
<div class="container text-center">
    <div class="row justify-content-md-center">
    <img src="./images/frame1/breakdown.jpg" alt="breakdown" style="width:500px" class="center">

</div>
</div>

<?php
include 'footer.php';

?>