<?php
include ('obcs.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $sql_query = "SELECT email From users Where email = '$email' AND password = '$password'";

    $result = mysqli_query ($conn, $sql_query)  or die(mysqli_error($conn));  
    if($result == false)
        {
        echo 'The query failed.';
        exit();
    }
    
			if(mysqli_num_rows($result) == 1){ 
             
                    header('Location: index.php');
                   
                }else{ 
                    header('Location: register.php'); 
                } 
session_start();
$_SESSION['username'] = $username; 

header("Location: register.php");
exit; 

            }
?>

                
   

