<?php
$title="Tour-Packages-Travel-Sri Lanka";$pagetitle="Design Your package";include 'header.php';

?>

<h2>Where do you Like to go & recommended cities:</h2>
<div class="radio-container">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="options" id="first" value="option1" onclick="myFunction('text1')">
    <p id="text1" style="display:none">Nuwara Eliya, Ella, Hatton</p><br> 
    <label class="form-check-label" for="first">1</label>
    <img class="card-img-top" src="./images/frame1/nuwraform.jpg" alt="Card image cap" style="width:200px">
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="options" id="second" value="option2" onclick="myFunction('text2')">
    <p id="text2" style="display:none">Matara, Mirissa, Galle</p><br> 
    <label class="form-check-label" for="second">2</label>
    <img class="card-img-top" src="./images/frame1/seaform.jpg" alt="Card image cap" style="width:200px">
  </div>   
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="options" id="third" value="option3" onclick="myFunction('text3')">
    <p id="text3" style="display:none">Sigiriya, Habarana, Mathale</p><br> 
    <label class="form-check-label" for="third">3</label>
    <img class="card-img-top" src="./images/frame1/sigiriyaform.jpg" alt="Card image cap" style="width:200px">
  </div>  
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="options" id="four" value="option4" onclick="myFunction('text4')">
    <p id="text4" style="display:none">Anuradhapura,Mihinthale</p><br> 
    <label class="form-check-label" for="four">4</label>
    <img class="card-img-top" src="./images/frame1/Anuradhapura.jpg" alt="Card image cap" style="width:200px">
  </div>  
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="options" id="five" value="option5" onclick="myFunction('text5')">
    <p id="text5" style="display:none">Kandy, Dambulla, Pinnawala</p><br> 
    <label class="form-check-label" for="five">5</label>
    <img class="card-img-top" src="./images/frame1/kandycity.jpg" alt="Card image cap" style="width:200px">
  </div> 


<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="process5.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="destination"><p>Destination</p></label>
                <input type="text" class="form-control" id="destination" placeholder="Which region you prefer" name="destination" required minlength="3" maxlength="30">
                <span id="destinationError"></span><br>
            </div><br>
            <div class="col">
                <label for="adults"><p>Number of Adults:</p></label>
                <input type=number class="form-control" id="adults" placeholder="Number of Adults" name="adults" required min="1" max="10" >
                <span id="adultsError"></span><br>
            </div><br>
            <div class="col">
                <label for="kids"><p>Number of Kids:</p></label>
                <input type=number class="form-control" id="kids" placeholder="Number of kids" name="kids" required min="1" max="10" >
            </div><br>
            <div class="col">
                <label for="stays"><p>Number of stays:</p></label>
                <input type=number class="form-control" id="stays" placeholder="Number of stays" name="stays" required min="1" max="10" >
            </div><br>
            <div class="col">
                <label for="travel_guide"><p>travel guide requirement:</p></label>
                <select type="text" class="form-control" id="travel_guide" placeholder="travel guide requirement" name="travel_guide" required>
                <option value="OPTION1">OPTION1</option>
                    <option value="OPTION2">OPTION2</option>
                    <option value="NO">NO</option>   
                </select>
            </div><br>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="transpotation"><p>Transpotation:</p></label>
                <select type="text" class="form-control" id="transpotation" placeholder="Transpotation required" name="transpotation" required>
                <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
    </div><br>

        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="Check-In"><p>Check-In:</p></label>
                <input type="date" class="form-control" id="check_in" placeholder="Check_In" name="check_in">
                <span id="dateError" class="error"></span>                
            </div><br>
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
    
    
</form>

<script>
// function to validate name
function validateName() {
const name= document.getElementById("destination").value;
const nameError = document.getElementById("destinationError");

if (name.length <5 || name.length >100) {
    nameError.innerHTML = "Name must between 5 & 100 characters ";
    return false;
}
 else {
    nameError.innerHTML = "";
    return true;

 } 
}
</script>

<script>
    const numberInput = document.getElementById('adults');
console.log(numberInput.value);

</script>
<script>
    const numberInput = document.getElementById('kids');
console.log(numberInput.value);

</script>
<script>
    const numberInput = document.getElementById('stays');
console.log(numberInput.value);

</script>

<script>
        function validatedate() {
            const check_in= document.getElementById('check_in').value;
            const check_inError = document.getElementById('dateError');
            
            var currentDate = new Date();

            var selectedDate = new Date(checkinDateInput.value);

            if (selectedDate <= currentDate) {
                dateError.innerHTML = 'Please select a future date.';
                return false; 
            } else {
                dateError.innerHTML = ''; 
                return true; 
            }
        }
    </script>


  <script>
    function myFunction(selectedTextId) {
      var textIds = ["text1", "text2", "text3", "text4", "text5"];
      
      textIds.forEach(function(textId) {
        var text = document.getElementById(textId);
        text.style.display = "none";
      });

      var checkBox = document.querySelector('input[name="options"]:checked');
      var text = document.getElementById(selectedTextId);

      if (checkBox && checkBox.checked) {
        text.style.display = "block";
      }
    } 
  </script>

  


  <script>
document.getElementById("destination").addEventListener("input", validateDestination);
document.getElementById("adults").addEventListener("input", validateNumber of Adults);
document.getElementById("kids").addEventListener("input", validateNumber of Kids:);
document.getElementById("stays").addEventListener("input", validateNumber of stays);
document.getElementById("check_in").addEventListener("input", validateCheck_In);


  </script>

  
<script>
    document.body.style.transition = "background 3s";
document.body.style.backgroundColor = "grey";
  </script>

<?php

include 'footer.php';
?>