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
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 p-5 m-auto border border-primary mt-3">
<form action="insert.php" method="POST" >
<div class="mb-3">
<p class="text-center fw-bold fs-3 text-warning">register Detail:</p>
</div>
<div class="mb-3">
<label class="form-label">  Name: </label>
<input type="text" name="name" class="form-control" placeholder=" name">
</div>
<div class="mb-3">
<label class="form-label">  Email: </label>
<input type="text" name="email" class="form-control" placeholder=" name">
</div>
<div class="mb-3">
<label class="form-label">  Number: </label>
<input type="text" name="number" class="form-control" placeholder=" name">
</div>
<div class="mb-3">
    <label class="form-label">PaSSwOrd: </label>
    <input type="password" name="password" class="form-control" placeholder="password">
    </div>
 
    <button name='submit' class="bg-danger fs-4 fw-bold my-3 form-control text-white">register</button>
    <a href="login.php" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Already account</a>

</form>
</div></div>
</div>
</body>
</html>