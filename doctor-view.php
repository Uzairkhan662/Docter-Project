
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view doctor</title>

<?php include 'header-links.php'?>
  
</head>

<?php include 'sidebar.php'?>
<?php include 'header.php'?>
 
<body>

 

  <div class="content-wrapper">

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                  
                    <th>Full Name</th>
                    <th>Education</th>
                    <th>Speciality</th>
                    <th>Experience (years)</th>
                    <th>Available Timing</th>
                    <th>Fee (PKR)</th>
                    <th>Available Days</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <php?=$name ?></td>
                    <td> <php?= $education ?></td>
                    <td> <php?= $speciality ?></td>
                    <td> <php?= $experiance ?></td>
                    <td> <php?= $timing ?></td>
                    <td> <php?= $fee ?></td>
                    <td> <php?= $days ?></td>
                    <th> <php?= $address ?></th>

                    
                  </tr>
                 
                  <tr>
                    <td>M.MUEEZ KHAN</td>
                    <td>MBBS (King Edward Medical University)</td>
                    <td>Cardiologist</td>
                    <td>12 years</td>
                    <td>5:00 PM – 9:00 PM</td>
                    <td>Rs. 2,500 per visit</td>
                    <td> Monday-Friday</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>
  <?php include 'footer-links.php'?>


</body>

</html>