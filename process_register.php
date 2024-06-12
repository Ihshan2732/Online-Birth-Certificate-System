<?php
include 'obcs.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $relation = $_POST['relation'];

    $query = "INSERT INTO `users` (`fullname`, `email`, `password`, `dob`, `relation`) VALUES 
    ('$fullname', '$email', '$password', '$dob', '$relation')";

    $fi = mysqli_query($conn, $query)  or die(mysqli_error($conn));
    if($fi == false)
        {
        echo 'The query failed.';
        exit();
    }
    else{
        header('Location: parent_details.php');
    }

    echo "success";
    mysqli_close($conn);

}
?>
