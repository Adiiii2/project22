<?php

$your_name = $_POST['your_name'];
$your_email = $_POST['your_email'];
$doctor_name = $_POST['doctor_name'];
$gender = $_POST['gender'];
$datepicker2 = $_POST['datepicker2'];
$department = $_POST['department'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("Insert into Appointment(Name, Email, Doctor, Gender, Date, Department)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss",$Name, $Email, $Doctor, $Gender, $Date, $Department);
    $stmt->execute();
    echo "Apponintment sceduled successfully...";
    $stmt->close();
    $conn->close();
}

?>