<?php

include 'conect.php';



// echo $id;

$sql = "SELECT * FROM registration ";

$rs = mysqli_query($conn,$sql);

$itemdata = mysqli_fetch_array($rs);

// print_r($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
    <h4 class="mb-4 text-center">Patient Form</h4>
    
    
<form action="edit-item.php" method="post" class="row gx-3 gy-2 align-items-center justify-content-center">
  
  <div class="col-sm-3">
    <label class="visually-hidden" for="doctorname">Doctor Name</label>
    <input type="text" class="form-control" id="doctorname" name="doctorname" value="<?= htmlspecialchars($itemdata['doctorname']) ?>" placeholder="Doctor Name" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="patientname">Patient Name</label>
    <input type="text" class="form-control" id="patientname" name="patientname" value="<?= htmlspecialchars($itemdata['patientname']) ?>"  placeholder="Patient Name" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="fee">Fee</label>
    <input type="number" class="form-control" id="fee" name="fee" value="<?= htmlspecialchars($itemdata['fee']) ?>"  placeholder="Fee" required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" value="<?= htmlspecialchars($itemdata['date']) ?>"  required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="timing">Timing</label>
    <input type="time" class="form-control" id="timing" name="timing" value="<?= htmlspecialchars($itemdata['timing']) ?>"  required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email"value="<?= htmlspecialchars($itemdata['email']) ?>" placeholder="Email"   required>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="contant">Contact</label>
    <input type="number" class="form-control" id="contactnumber" name="contactnumber" placeholder="contactnumber" required>
  </div>
  <div class="col-auto">
    <button type="submit" name="btnUpdate" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

</body>
</html>


<?php
if (isset($_POST['btnUpdate'])) {
 
 
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
    echo "<script>alert('Item Update');</script>";
    echo "<script>window.location.href='register.php';</script>";
  } else {
    echo "<script>alert('Item not Update: " . mysqli_error($conn) . "');</script>";
  }
}
?>