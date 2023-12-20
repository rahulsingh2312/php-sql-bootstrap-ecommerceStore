<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php 
   include 'header.php';
   ?>
    <title>Women chappal</title>
</head>
<body>
     <div class="container-fluid">
<div class="col-md-12">
<div class="row">

 <?php
include 'Config.php';
$Record = mysqli_query($con, "select * from tblproduct");
    
while($row=mysqli_fetch_array($Record)){
  $check_page = $row['PCategory'];
  if( $check_page === 'Home')

     echo "
     <hl class='text-warning font-monospace text-center my-3'>$row[PCategory]</h1>

<div class='col-md-6 col-lg-4 m-auto mb-3'>
<form action='Insertcart.php' method='POST'>
<div class='card m-auto' style='width: 18rem;'>
<img src='../admin/product/$row[Pimage]' class='card-img-top' alt='.'>
<div class='card-body'>
<h5 class='card-title text-center text-danger fs-4 fw-bold'>$row[PName]</h5>
<p class='card-text text-danger fs-4 fw-bold'>$row[PPrice] </p>
<input type='hidden' name = 'PName' value ='$row[PName]' >
<input type='hidden' name = 'PPrice' value ='$row[PPrice]' >
<input type='number' name='PQuantity' value=' min='1' max = '20'' placeholder = 'Quantity' />
<input type='submit' name='addCart' class= ' text- center btn my-3 btn-warning text-white w-100' value='add to cart' />
</div>
</div>
</form>
</div>
";
     }
     ?>
     
     </div>
</div>
</body>
</html>