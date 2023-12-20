<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- boootstrap -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <title>update page</title>
</head>
<body>

<?php 
$id = $_GET['ID'];
include 'Config.php';
$Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE Id = '$id' ");
$data = mysqli_fetch_array($Record); 
 ?>

<div class="container">
<div class="row">
<div class="col-md-6 m-auto border border-primary mt-3">
<form action="update.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
<p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>
</div>
<div class="mb-3">
<label class="form-label">Product Name: </label>
<input type="text" value="<?php echo $data['PName']?>" name="Pname" class="form-control" placeholder="product name">
</div>
<div class="mb-3">
    <label class="form-label">Product Price: </label>
    <input type="text" value="<?php echo $data['PPrice']?>" name="Pprice" class="form-control" placeholder="Enter product price">
    </div>
    <div class="mb-3">
    <label class="form-label">Add Product Image: </label>
    <input type="file" name="Pimage"  class="form-control">
    <img src="<?php echo $data['Pimage']?>" alt="d " height="100px" >
    </div>
    <div class="mb-3">
    <label class="form-label">Select Page Category</label>
    <select class="form-select" name="Pages">
    <option value="Home">Home</option>
    <option value="Men">Men</option>
    <option value="Women">Women</option>
   
    </select>
    </div>
    <input type="text" value="<?php echo $data['Id']?>">
    <button name="update" type="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>

</form>
</div></div>
</div>


<?php

 if(isset($_POST['update'])){
    $id = $_POST['Id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage' ] ['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des= "Uploadimage/". $image_name;
    move_uploaded_file($image_loc, "Uploadimage/".$image_name);
    $product_category = $_POST['Pages'];
    include 'Config.php';

    if(mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$product_name', `PPrice`='$product_price', `Pimage`='$img_des',`PCategory`='$product_category' WHERE Id = '$id'")) {
        echo "Record updated successfully";
        header("location: index.php");
    } else {
        echo "Error updating record: " . mysqli_error($con);
        header("location: index.php");
    }
    
 }
?>


</body>
</html>