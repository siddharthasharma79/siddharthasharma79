<?php 

error_reporting(E_ALL & ~E_NOTICE);
$mysqli = mysqli_connect("localhost", "root", "","images") OR DIE (mysqli_error());

// if user uploaded the file
if(isset($_FILES['img_file'])) {   
  
  // getting file content
  $img_data = addslashes (file_get_contents($_FILES['img_file']['tmp_name']));
  
  // inserting data into db
  $sql = "INSERT INTO `image` (`id`, `file`, `name`) VALUES (NULL,'{$img_data}', '{$_FILES['img_file']['name']}')";
  if (!$result = $mysqli->query($sql)) {
    echo "Unable to execute Query: " . $sql . "\n";
    exit;
  }
}

// getting information about already uploaded images into data base;
$img_arr= array();
$sql = "SELECT * FROM `image`";
if (!$image_arr = $mysqli->query($sql)) {
    echo "Unable to execute Query: " . $sql . "\n";
    exit;
}
?>

  <style type="text/css">
    img { max-width: 100%; max-height: 100%;}
  </style>

  <div class="modal-header" >
    <h1>Upload Photo
    <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
  </h1>
  <!-- UPLOAD IMAGE FORM -->  
    <form  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <h5><label for="img_file" class="label label-lg">Upload Photo</label></h5>
        <input type="file" class="form-control" name="img_file">
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
    <br/>
    <!-- Gallary SECTION -->
    <div class="well well-lg">
      <h5>Photo Gallary</h5>
          <div class="row">
    <?php   
          if ($image_arr->num_rows > 0){
            while($image = $image_arr->fetch_assoc()) {
              echo '<div class="col-sm-2" style="padding:2px;">'; 
              echo '<img src="data:image/jpeg;base64,'.base64_encode( $image['file'] ).'" alt="'.$image['name'].'"/><span class="btn btn-info btn-sm" style="width:100%">'.$image['name'].'</span></div>';
            }
          }
          else 
            echo "Gallary is empty. Please add images to it.";
    ?>      
        </div>
    </div>
  </div>
