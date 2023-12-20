<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <?php
    include 'header.php'
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-light mb-5 rounded">
                <h1 class="text-warning">
                    My cart
                </h1>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-around"><div class="col-sm-12 col-md-6 col-lg-9">
            <table class='table table-bordered text-center'>
                <thead class='bg-danger text-white'>
                    <th>Index no.</th>
                    <th>Product name </th>
                    <th>price</th>
                    <th>quantity</th>
                   
                    <th>update</th>
                    <th>delete</th>
                </thead>
                <tbody>
                    <?php
// session_start();
$total = 0;
if(isset($_SESSION['cart'])){
foreach($_SESSION['cart'] as $key => $value) {
// $total += $value['productPrice'] * $value['productQuantity'];
echo "
<form action = 'Insertcart.php' method='POST'>
<tr>
<td> $key </td>

<td><input type = 'hidden' name = 'PName' value = '$value[productName]'> $value[productName]</td>
<td><input type='hidden' name = 'PPrice' value = '$value[productPrice]'>$value[productPrice]</td>
<td><input type='text' name = 'PQuantity' value = '$value[productQuantity]'>Pieces</td>
<td><button name='update'  class='btn-warning'>Update </button>
</td>
<td><button name='remove' class='btn-danger'>delete  </button>
</td>
<td><input type ='hidden' name = 'item' value = '$value[productName]'></td>
</tr>
</form>
";
}
}

                    ?>
                </tbody>
            </table>
        </div>
 
    </div>
</body>
</html>