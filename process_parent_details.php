<?php
include ('obcs.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $father_fullname = $_POST["father_fullname"];
    $father_dob = $_POST["father_dob"];
    $mother_fullname = $_POST["mother_fullname"];
    $mother_dob = $_POST["mother_dob"];
    $father_profession = $_POST["father_profession"];
    $mother_profession = $_POST["mother_profession"];
    $address = $_POST["address"];


    $query = "INSERT INTO `parents_details` (`father_fullname`, `father_dob`, `mother_fullname`, `mother_dob`, `father_profession`, `mother_profession`, `address`) VALUES ('$father_fullname', '$father_dob', '$mother_fullname', '$mother_dob', '$father_profession', '$mother_profession', '$address')";

    $fi = mysqli_query($conn, $query);
    // if(!fi){
    //     die("could not enter data".  mysqli_error());
    // }
    if($fi == false)
    {
    echo 'The query failed.';
    exit();
}
else{
    header('Location: baby_details.php');
}
    echo "success";
    mysqli_close($conn);
}

?>
