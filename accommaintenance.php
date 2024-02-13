<?php $title="Accommodation-Maintenance-Travel-Sri Lanka";$pagetitle="Accommodation Maintenance";include '../Project/Travel/header.php';?>

<section class="vh-50 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
          <h3>Hotels</h3>
          <form name="inquiry" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

<div class="row mb-4">
    <label for="name" class="col-sm-3 col-form-label"><h4>Name:</h4></label>
    <div class="col-sm-3">
      <input type="text" class="form-label" name="name" placeholder="Name" required>
    </div>
</div>
 <div class="row mb-4">
    <label for="Location" class="col-sm-3 col-form-label"  ><h4>Location :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Location" placeholder="Location" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Price per night" class="col-sm-3 col-form-label"  ><h4>Price per night :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Price per night" placeholder="Price per night" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Available rooms" class="col-sm-3 col-form-label"  ><h4>Available rooms :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Available rooms" placeholder="Available rooms" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Check in date" class="col-sm-3 col-form-label"  ><h4>Check in date :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Check in date" placeholder="Check in date" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Check out date" class="col-sm-3 col-form-label"  ><h4>Check out date :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Check out date" placeholder="Check out date" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Number of guests" class="col-sm-3 col-form-label"  ><h4>Number of guests :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Number of guests" placeholder="Number of guests" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Images" class="col-sm-3 col-form-label"  ><h4>Images :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Images" placeholder="Images" required>
    </div>
</div>



<br><br>

</form>

?>
<?php include '../Project/Travel/footer.php'; ?>