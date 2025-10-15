<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <title>Doctor add</title>

    <?php include 'header-links.php' ?>
    <?php include 'conect.php' ?>
  
</head>
<body >

<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>



<div class="content-wrapper" style="min-height: 100vh;">
  <!-- Page Header -->
  <section class="content-header">
    <div class="container-fluid">
   
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <!-- Form Card -->
          <div class="card card-primary shadow">
            <div class="card-header">
              <h3 class="card-title">Doctor Profile</h3>
            </div>

            <form action="doctor-add.php" method="post">

              <div class="card-body">
                <div class="row">
                  <!-- Full Name -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" name="fullname" placeholder="Enter full name">
                    </div>
                  </div>

                  <!-- Education -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="education">Dr Education</label>
                      <input type="text" class="form-control" name="education" placeholder="e.g. MBBS, FCPS">
                    </div>
                  </div>

                  <!-- Speciality -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="speciality">Dr Speciality</label>
                      <input type="text" class="form-control" name="speciality" placeholder="e.g. Cardiologist">
                    </div>
                  </div>

                  <!-- Experience -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="experience">Dr Experience (years)</label>
                      <input type="number" class="form-control" name="experiance" placeholder="e.g. 5">
                    </div>
                  </div>

                  <!-- Timing -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="timing">Available Timing</label>
                      <input type="text" class="form-control" name="timing" placeholder="e.g. 5PM - 9PM">
                    </div>
                  </div>

                  <!-- Fee -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="fee">Fee (PKR)</label>
                      <input type="number" class="form-control" name="fee" placeholder="e.g. 1500">
                    </div>
                  </div>

                  <!-- Available Days -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="days">Available Days</label>
                      <input type="text" class="form-control" name="days" placeholder="e.g. Mon to Fri">
                    </div>
                  </div>

                  <!-- Clinic Address (new field) -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address">Home Address</label>
                      <input type="text" class="form-control" name="address" placeholder="e.g. ABC ...., Karachi">
                    </div>
                  </div>


                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="days">Contact No </label>
                      <input type="text" class="form-control" name="contact" placeholder="123456789">
                    </div>
                  </div>

                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="days">Cnic No </label>
                      <input type="text" class="form-control" name="cnic" placeholder="92201-2233440-1">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" name="btnAdd" value="add doctor" class="btn btn-primary px-4">Submit</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>



  <?php include 'footer.php'?>
  <?php include 'footer-links.php' ?>



  <?php

  if(isset($_POST['btnAdd'])){

 
    $Dr_name = $_POST['fullname'];
    $Dr_education = $_POST['education'];
    $Dr_speciality = $_POST['speciality'];
    $Dr_experiance = $_POST['experiance'];
    $Dr_timing = $_POST['timing'];
    $Dr_fee = $_POST['fee'];
    $Days = $_POST['days'];
    $Clinic_address = $_POST['address'];
    $Contact_no = $_POST['contact'];
    $Cnic_no = $_POST['cnic'];

    $query = "insert into `doctors`( `fullname`,  `education`, `speciality`, `experiance` , `timing`, `fee`, `days`, `address`, `contact`, `cnic`) 
  VALUES ('$Dr_name','$Dr_education','$Dr_speciality','$Dr_experiance','$Dr_timing','$Dr_fee','$Days', '$Clinic_address', '$Contact_no', '$Cnic_no')";
    

    $result = mysqli_query($conn,$query);
       

  if ($result === TRUE) {
    echo "<script>alert('Item added');</script>";
    echo "<script>window.location.href='doctor-add.php';</script>";
  } else {
    echo "<script>alert('Item not added: " . mysqli_error($conn) . "');</script>";
  }
}

  


?>

</body>
</html>
