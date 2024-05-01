<?php  
if (isset($_FILES["citz_image"]) && $_FILES["citz_image"]["error"] === 0) {
   
    $imageTmpPath = $_FILES["citz_image"]["tmp_name"];
    move_uploaded_file($imageTmpPath, $imagePath);
  } 
?>