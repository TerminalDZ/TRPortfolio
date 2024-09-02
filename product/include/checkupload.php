<?php
function Upload($file,$dir){
  $target_file = $dir . basename($_FILES["$file"]["name"]);
  $uploadOk = 1;
  $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if file is a actual file or fake file
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["$file"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          $uploadOk = 0;
      }
  }

  // Check if file already exists
// if (file_exists($target_file)) {
//     $uploadOk = 0;
// }

  // Check file size
  if ($_FILES["$file"]["size"] > 200000000) {
      $uploadOk = 0;
  }

  // Allow certain file formats
  if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
  && $fileType != "gif" && $fileType != "doc" && $fileType != "docx" && $fileType != "pdf" && $fileType != "txt") {
      $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      return "error";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["$file"]["tmp_name"], $target_file)) {
      } else {
         // return "error";
      }
  }
}
 