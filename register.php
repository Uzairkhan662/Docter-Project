<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
 <?php include 'header-links.php'?>
  




  <style>
  
  .formcontrol{
width: 50%;
height: 50%;

  }
    
   </style>
     
</head>

<?php include 'sidebar.php'?>
<?php include 'header.php'?>

<body>

<div class="container mt-5">
    <h4 class="mb-4 text-center">Patient Form</h4>
    <P>
      
    </P>
    
<form action="register.php" method="post" class="row gx-3 gy-2 align-items-center justify-content-center">

  <div class="col-sm-3">
    <label class="visually-hidden" for="NO">no</label>
    <input type="number" class="form-control" id="NO" name="no" placeholder="NO" required>
  </div>
  <div class="col-sm-3">
  <label class="visually-hidden" for="doctorname">Doctor Name</label>
      <input type="doctorname" class="form-control" id="doctorname" name="doctorname" placeholder="doctorname" required>
  </div>
    
  <div class="col-sm-3">
    <label class="visually-hidden" for="patientname">Patient Name</label>
      <input type="patientname" class="form-control" id="patientname" name="patientname" placeholder="patientname" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="fee">Fee</label>
    <input type="number" class="form-control" id="fee" name="fee" placeholder="Fee" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="timing">Timing</label>
    <input type="time" class="form-control" id="timing" name="timing" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="contantnumber">Contant</label>
   <input type="contactnumber" class="form-control" id="contactnumber" name="contactnumber" placeholder="contactnumber" required>
  </div>
  <div class="col-auto">
    <button type="submit" name="btnAdd" class="btn btn-primary">Submit</button>
  </div>
</form>
<?php
include "conect.php"
?>
<table class="table table-hover">
  <thead>
    <tr>
 
      <th>NO</th>
      <th>Doctor Name</th>
      <th>Patient Name</th>
      <th>Fee</th>
      <th>Date</th>
      <th>Timing</th>
      <th>Email</th>
      <th>Contact Number</th>
       <th>Update/Delete</th>
     

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `registration`";
    $rs = mysqli_query($conn, $sql);
    $x = 0;
    while ($itemdata = mysqli_fetch_array($rs)) {
    ?>
      <tr>
        
        <td><?= $itemdata['no'] ?></td>
        <td><?= $itemdata['doctorname'] ?></td>
        <td><?= $itemdata['patientname'] ?></td>
        <td><?= $itemdata['fee'] ?></td>
        <td><?= $itemdata['date'] ?></td>
        <td><?= $itemdata['timing'] ?></td>
        <td><?= $itemdata['email'] ?></td>
        <td><?= $itemdata['contactnumber'] ?></td>
         <td>
              <a href="edit-item.php" class="btn btn-primary px-4">Edit</a>
              <a href="delect.php" class="btn btn-danger px-4">Delete</a>
              </td>
        
      </tr>

    <?php
    }
    ?>
  </tbody>
  </table>
</div>


</body>
</html>

<?php
if (isset($_POST['btnAdd'])) {

  $no = $_POST['no'];
  $doctorname = $_POST['doctorname'];
  $patientname = $_POST['patientname'];
  $fee = $_POST['fee'];
  $date = $_POST['date'];
  $time = $_POST['timing'];
  $user_email = $_POST['email'];
  $contactnumber = $_POST['contactnumber'];

 $query = "INSERT INTO registration (no, doctorname, patientname, fee, date, timing, email, contactnumber) 
 VALUES ('$no', '$doctorname', '$patientname', '$fee', '$date', '$time', '$user_email', '$contactnumber')";
   $result = mysqli_query($conn, $query);

  if ($result === TRUE) {
    echo "<script>alert('Item added');</script>";
    echo "<script>window.location.href='register.php';</script>";
  } else {
    echo "<script>alert('Item not added: " . mysqli_error($conn) . "');</script>";
  }
}
?>