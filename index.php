<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $tmp = explode('.', $file_name);
      $file_ext = end($tmp);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Please choose a JPEG or PNG file.";
      }
      
      if($file_size > 10242880){
         $errors[]='Upload less than 10 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo '<div id="uploaded"><h3><center>Image has been uploaded successfully</h3></centerh3></div>';
      }else{
         print_r($errors);
      }
   }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Image Dropper</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="#!">Image Dropper</a>
        <form class="form" action="index.php" method="POST" enctype="multipart/form-data">
            <label class="img-name">Image Name</label>
            <input name="image" id="uploader" type="file">
            <input id="uploader_submit" value="Upload Image" type="submit">
        </form>
    </nav>
    <div class="container">
        <img id="upload_plus" onclick="upload()" class="img-thumbnail add-image-button" src="https://365psd.com/images/istock/previews/1051/105180343-plus-icon-stock-vector-illustration-flat-design.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image">    
        <img class="img-thumbnail" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/325/325466/man-walking-dog.jpg" alt="Thumbnail image"> 
    </div>   
        <script src="assets/js/input.js "></script>

</body>
</html>
