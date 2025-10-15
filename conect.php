<?php
$conn = mysqli_connect('localhost','root','','dbclinic');

if(!$conn){
    die('cannot connect database');
}

// $query = 'insert into registration (no,do_name,pa_name,fee,date,timing,email,contact number) values ("1","ahmed","ali","200","2/4/25","12:00","uzair@gmail.com","02341434")';

// $query = "INSERT INTO `registration`( `no`, `doctorname`, `patientname`, `fee` , `date`, `timing`, `email`, `contact number`) 
// VALUES ('$no','$doctorname','$patientname','$fee','$date','$time','$user_email', '$contactnumber')";

// mysqli_query($conn,$query);
?>
 