<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kolhapuri chappal</title>
 




    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">




    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- boootstrap -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <style>
        /* Add custom styles if needed */
        .filter {
            display: flex;
            justify-content: space-around;
            background-color: #f8f9fa;
            padding: 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .filter a {
            text-decoration: none;
            color: #495057;
            padding: 5px 15px;
            border: 1px solid #ced4da;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .filter a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
<!-- icons -->
<script src="https://kit.fontawesome.com/f97b1fb4fe.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
    session_start();
    $count = 0 ;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
    }
    
    ?>
<nav style="font-family: 'Playfair Display', serif;" class="navbar  navbar-light bg-light justify-content-center font-weight-bold">
  <h1><a class=" navbar-brand"><img width="70px" src="./images/81YgxshYyCL.webp"> kolhapuri chappal</a>
</h1>
<!-- <a class="navbar-brand pb-2"><img src="logo.png" alt=""></a> -->
<div class="d-flex">
<a href="index.php" class=" text-warning text-decoration-none pe-2"><i class="fas fa-home"></i> Home</a>
<a href="viewcart.php" class=" text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i> Cart  <?php echo $count ?> </a>
<span class="text-warning pe-2">
<i class="fas fa-user-shield"></i> Hello,  <?php
if(isset($_SESSION['user'])){
echo $_SESSION['user'];
echo "
<a href='form/logout.php' class=' text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i> Logout </a> ";
}
else{
    echo "<a href='form/login.php' class=' text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>  </a>";
}

 ?>


<a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>
</span>
</nav>
<span class='filter'>
<a href='men.php'> men</a>
<a href='women.php' > women </a>

</span>
</body>
</html>