<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>add_user</title>

    <?php include 'header-links.php'; ?>
    <?php include 'conect.php'; ?>
  
</head>
<body >

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>



<div class="content-wrapper" style="min-height: 100vh;">
  <section class="content-header">
    <div class="container-fluid">
   
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-10">
        
          <div class="card card-primary shadow">
            <div class="card-header">
              <h3 class="card-title">add_user</h3>
            </div>

            <form action="add-user.php" method="post">

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email"> Email</label>
                      <input type="text" class="form-control" name="email" placeholder="email">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pasword">Pasword</label>
                      <input type="text" class="form-control" name="pasword" placeholder="pasword">
                    </div>
                  </div>

                 
              <div class="card-footer">
             <button type="submit" name="btnAdd" class="btn btn-primary px-4">Add</button>

              </div>
             </form>

      </div>
    </div>
  </section>

  <table class="table table-hover">
  <thead>
    <tr>
 
      <th>NO</th>
      <th>Email</th>
      <th>Pasword</th>
      
      
     
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `users`";
    $rs = mysqli_query($conn, $sql);
    $x = 0;
    while ($itemdata = mysqli_fetch_array($rs)) {
    ?>
      <tr>
        
        <td><?= $itemdata['id'] ?></td>
        <td><?= $itemdata['email'] ?></td>
        <td><?= $itemdata['pasword'] ?></td>
    
        

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

  if(isset($_POST['btnAdd'])){

$email = $_POST['email'];
$pasword = $_POST['pasword'];



   

$query = "INSERT INTO `users`( `email`, `pasword`) 
VALUES ('$email','$pasword')";

    $result = mysqli_query($conn,$query);
       

  if ($result === TRUE) {
    echo "<script>alert('Add User');</script>";
    echo "<script>window.location.href='register.php';</script>";
  } else {
    echo "<script>alert('Item not added: " . mysqli_error($conn) . "');</script>";
  }
}





  ?>

 