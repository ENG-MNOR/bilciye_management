<?php session_start();
include 'config/RCC_Class.php';

$coder = new rccClass();
if (isset($_POST["btnEmailCheck"])){
   $email = $_POST['Email'];
    $qry = "select * from users where email='$email' and users.deleted=0";
    // echo $qry;
           $coder->search($qry);
            if($coder->result->num_rows==1){
            	while($row = $coder->result->fetch_array(MYSQLI_NUM)){
                    $_SESSION['id']= $row[0];
                    echo $row[0];
                     }
                $index_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
                header('Location: updatePass.php');
            }
            else {
                 header("Location:forgot.php?Invalid email");
            }
        }
?>