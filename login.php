<?php include 'core/header.php' ?>
<?php include 'core/user.php' ?>
<?php 
if(isset($_POST['submit'])){
    $user = new user;
    $checkOneUser = $user->checkOneUser($_POST['userName'],$_POST['password']);
    if(count($checkOneUser)==1){
            //session related work
            $getUserId = $checkOneUser[0]['user_id'];
            $getUserName = $checkOneUser[0]['username'];

            //Session Start

            session_start();
            $_SESSION['user_id'] = $getUserId;
            $_SESSION['username'] = $getUserName;
            header('location:index.php');

    }else{
        echo "<p class='alert alert-danger'>Invalid Credentials.</p>";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Stack Overflow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="center" style="position:absolute; width:30%; margin:0px 20px; top:50%; left:50%; transform:translate(-50%,-50%);padding:15px; border:2px solid blue;">

<form action="" method="POST">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="text" class="form-control" name="userName" placeholder="Enter your User Name" required>
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<a href="register.php" class="alert" role="alert" style="color:red">Don't Have Account?</a>
</form>
</div>

       





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



