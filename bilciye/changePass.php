<?php session_start();
include 'config/RCC_Class.php';

$coder = new rccClass();
if (isset($_POST["btnChangePass"])){
 $new_pass = $_POST['newPass'];
 $con_pass = $_POST['confirmPass'];
 $id=$_SESSION['id'];
 if($new_pass==$con_pass){
    $qry = "update users set password='$new_pass' where user_id='$id' and users.deleted=0";

    // echo $qry;
    $coder->search($qry);
    // if($coder->result->num_rows==1){
    //    while($row = $coder->result->fetch_array(MYSQLI_NUM)){
    //     $_SESSION['username']= $row[1];
    //     $_SESSION['user']= $row[0];
    //     $_SESSION['usertype']=$row[3];
    //     echo $row[0];
    // }
    // $index_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
    header('Location: login.php');
// }
}
else {
   header("Location:updatePass.php?Password is mis-matched");
}
}
?>