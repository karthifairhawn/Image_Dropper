<?php
   include 'assets/php/conn.php';
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];

      mysqli_query($conn, "INSERT INTO `file_location` (`name`, `date`) VALUES ('$file_name', current_timestamp())");


      $file_size =$_FILES['image']['size'];
      $file_name = mysqli_real_escape_string($file_name);
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $tmp = explode('.', $file_name);
      $file_ext = end($tmp);
      
      $extensions= array("jpeg","jpg","png","jfif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Please choose a JPEG or PNG file.";
      }
      
      if($file_size > 10242880){
         $errors[]='Upload less than 10 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);         
      }else{
         print_r($errors);
      }
   }
   $image_data="";
   $data = mysqli_query($conn,"SELECT * FROM file_location Order by date desc");
   while($row = mysqli_fetch_assoc($data)){
      $image_data.='<div class="item"><img class="img-thumbnail" src="images/'.$row['name'].'" alt="Thumbnail image"></div>';
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
      <div class="upload">

         <img id="upload_plus" onclick="upload();" class="add-image-button" src="https://365psd.com/images/istock/previews/1051/105180343-plus-icon-stock-vector-illustration-flat-design.jpg" alt="Thumbnail image">    
      </div>

    <div class="container">
        
        <?php echo $image_data ?>
    </div>   
        <script src="assets/js/input.js "></script>

</body>
</html>
