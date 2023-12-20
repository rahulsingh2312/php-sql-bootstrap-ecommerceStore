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
  
    <title>Product page</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 m-auto border border-primary mt-3">
<form action="insert.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
<p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>
</div>
<div class="mb-3">
<label class="form-label">Product Name: </label>
<input type="text" name="Pname" class="form-control" placeholder="product name">
</div>
<div class="mb-3">
    <label class="form-label">Product Price: </label>
    <input type="text" name="Pprice" class="form-control" placeholder="Enter product price">
    </div>
    <div class="mb-3">
    <label class="form-label">Add Product Image: </label>
    <input type="file" name="Pimage" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">Select Page Category</label>
    <select class="form-select" name="Pages">
    <option value="Home">Home</option>
    <option value="Men">Men</option>
    <option value="Women">Women</option>
   
    </select>
    </div>
    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>

</form>
</div></div>
</div>








<!-- data manipulation crud -->
<div class="container font-monospace">
    <div class="row">
        <div class="col-md-8 m-auto ">
<table class="table table-hover border my-5">
<thead>
<th>Id</th>
<th>Name</th>
<th>Price</th>
<th>Image</th>

<th>Category</th>
<th>Delete</th>
<th>Update</th>
</thead>

<tbody class="text-center">
<?php
include 'Config.php';
$Record = mysqli_query($con, "SELECT * FROM `tblproduct` ");
while ($row = mysqli_fetch_array($Record))
echo"
<tr>
<td>$row[Id] </td>
<td>$row[PName]</td>
<td>$row[PPrice]</td>
<td><img src='$row[Pimage]' height= '90px' width = '200px'> </td>
<td>$row[PCategory]</td>
<td><a href='' class='btn-danger btn'> Delete</a></td>
<td><a href='update.php? ID=$row[Id]' class='btn-warning btn'> Update</a></td>

</tr>
";
?>

</tbody>
</table>
</div>
</div>
</div>
</body>
</html>