<?php

if(!isset($_SESSION['username'])){
        session_start();}
?>

<nav class="navbar navbar-primary bg-light">
       <div class="container-fluid d-flex">
            <div class="logo d-flex">
                    <img src="images/logo.png" class="img-fluid" id="logo" alt="logo img">
                    <a href="index.php" class="text-decoration-none"><h5 id="stack">Stack <span id="logo-text">Overflow</span></h5></a>
            </div>
            <div class="form">
                    <form class="d-flex">
                    <input class="form-control me-2" style="width: 450px !important;" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
            </div>
            <div class="right-area">
               
                <?php if(isset($_SESSION['username'])):
                
                ?>
                <button type="button" class="btn btn-info"><a href="add_question.php">Ask any Question?</a></button>
                <button type="button" class="btn btn-danger"><a href="logout.php"><?= $_SESSION['username']."(logout)"?></a></button>
                <?php else: ?> 
                   <button type="button" class="btn btn-primary"><a href="login.php">Log in</a></button>
                   <button type="button" class="btn btn-warning"><a href="register.php">Sign up</a></button>      
                <?php endif?> 
            </div>
        </div>
</nav>

