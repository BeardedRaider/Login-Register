<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>register</title>    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<div class="form-container">
    <form action="" method="post" enctype="multipart/form-data">
        <h3>register now</h3>
        
        <input type="text" name="name" placeholder="enter username" class="box" required>
        <input type="email" name="email" placeholder="enter email" class="box" required>
        <input type="password" name="password" placeholder="enter password" class="box" required>
        <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
        
        <input type="file" class="box" accept="image/jpg, image/jpeg, image/png">
        <input type="submit" value="register now" class="btn">

        <p>already have an account? <a href="login.php">login now</a></p>
    </form>
</div>



    <script src="js/script.js"></script>
</body>
</html>