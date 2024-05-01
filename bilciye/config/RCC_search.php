<?php 
$name=$_POST['qry'];
include("RCC_Class.php");
$coder=new rccClass();
$res= $coder->search(str_replace("^"," ",$name));
while($row=$res->fetch_array(MYSQLI_ASSOC)){
	foreach ($row as $key => $value) {
		echo"$value,";
	}
}
?>
