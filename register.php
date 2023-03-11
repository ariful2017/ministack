<?php include 'core/header.php' ?>
<?php include 'core/user.php'?>

<?php 

if(isset($_POST['btn']) && !empty($_POST['user-name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $user = new user;
    
    $userCount = $user->checkUser($_POST['user-name'],$_POST['email']);
    if(count($userCount)>0){
        echo "<p class='alert alert-danger'>User or Email already exists.</p>";
    }else{
        $user->register($_POST['user-name'],$_POST['email'],md5($_POST['password']));
        
        echo "<script>
        alert('User Created Successfully');
        window.location='login.php';
        </script>";
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
    <script src="https://kit.fontawesome.com/b665479e03.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>

 <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-1"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="center mt-5 pt-5">
            <h3 class="pb-3" style="font-weight:bold;">Join the Stack Overflow community</h3>
                <div class="d-flex pb-2">
                    <i class="fas fa-exclamation text-info px-1"></i>
                    <h5>Get unstuck — ask a question</h5>
                </div>
                    <div class="d-flex pb-2">
                        <i class="fas fa-exclamation text-info px-1"></i>
                        <h5>Unlock new privileges like voting and commenting</h5>
                    </div>
                        <div class="d-flex pb-2">
                            <i class="fas fa-share-alt text-info px-1 "></i>
                            <h5>Save your favorite tags, filters, and jobs</h5>
                        </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-5 p-4">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-info btn-google"><i class="fab fa-google"></i> Sign Up With Google</button>
            <button type="button" class="btn btn-secondary btn-git"><i class="fab fa-github"></i>  Sign Up With Github</button>
            <button type="button" class="btn btn-primary btn-facebook"><i class="fab fa-facebook"></i>  Sign Up With Facebook</button>
            </div>
            <div class="form p-3 border mt-3">
                <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" id="user-name" name="user-name" placeholder="Enter your user name" required>
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-primary form-control" name="btn">Sign Up</button>
                <a href="login.php" class="alert text-info"> Already have account?</a>
                </form>
                
            </div>
        </div>
    </div>
 </div>

       





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>





