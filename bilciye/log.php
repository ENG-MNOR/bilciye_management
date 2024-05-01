<?php session_start();
include 'config/RCC_Class.php';

$coder = new rccClass();
if (isset($_POST["btnlogin"])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $table = $_POST['tables'];
    if ($table == 'users') {
        $qry = "select * from users where username='$user' and password='$pass' and users.deleted=0";
        echo $qry;
        $coder->search($qry);
        if ($coder->result->num_rows == 1) {
            while ($row = $coder->result->fetch_array(MYSQLI_NUM)) {
                $_SESSION['username'] = $row[1];
                $_SESSION['user'] = $row[0];
                $_SESSION['usertype'] = $row[3];
                echo $row[0];
            }
            $index_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
            header('Location: index.php');
        } else {
            header("Location:login.php?Invalid username or password");
        }
    } else if ($table == 'industry') {
        $qry = "select * from industry where ind_name='$user' and ind_tell='$pass' and deleted=0";
        echo $qry;
        $coder->search($qry);
        if ($coder->result->num_rows == 1) {
            while ($row = $coder->result->fetch_array(MYSQLI_NUM)) {
                $_SESSION['username'] = $row[1];
                $_SESSION['user'] = $row[0];
                $_SESSION['usertype'] = 'industry';
                echo $row[0];
            }
            $index_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
            header('Location: index.php');
        } else {
            header("Location:login.php?Invalid username or password");
        }
    } else {

        $qry = "select * from minstary where mins_name='$user' and mins_email='$pass' and deleted=0";
        echo $qry;
        $coder->search($qry);
        if ($coder->result->num_rows == 1) {
            while ($row = $coder->result->fetch_array(MYSQLI_NUM)) {
                $_SESSION['username'] = $row[1];
                $_SESSION['user'] = $row[0];
                $_SESSION['usertype'] = 'Gov';
                echo $row[0];
            }
            $index_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
            header('Location: index.php');
        } else {
            header("Location:login.php?Invalid username or password");
        }

    }
}

?>