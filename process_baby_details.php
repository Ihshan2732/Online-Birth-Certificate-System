<?php
include ('obcs.php');
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $baby_name = $_POST["baby_name"];
    $baby_dob = $_POST["baby_dob"];
    $place_of_birth = $_POST["place_of_birth"];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $gender = $_POST["gender"];
    $birth_weight = $_POST["birth_weight"];
    $birth_height = $_POST["birth_height"];

    
    $query = "INSERT INTO `baby_details` (`baby_name`, `baby_dob`, `place_of_birth`, `father_name`, `mother_name`, `gender`, `birth_weight`, `birth_height`) VALUES ('$baby_name', '$baby_dob', '$place_of_birth', '$father_name', '$mother_name', '$gender', '$birth_weight', '$birth_height')";

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
        header('Location: index.php');
    }

    echo "success";
    mysqli_close($conn);
}
?>
