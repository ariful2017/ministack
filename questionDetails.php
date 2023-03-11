<?php include 'core/header.php' ?>
<?php include 'core/question.php' ?>

<?php

 if(isset($_GET['q_id'])){
    $question = new question;
    $getQuestions = $question->getOneQuestion($_GET['q_id']);

    if(count($getQuestions)==1){
      $getQuestions = $getQuestions[0];
    }else{
    
    echo "something wrong";
    exit();
   }

 }else{
    
    echo "invalid request";
    exit();
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

<div class="container">
   <div class="row">

      <div class="col-8 offset-2 pt-2">

         <h1 class="border border-3 p-1" style="font-weight:900;">Questions Details</h1>

         <h3 class="text-bold text-info mb-2 border p-2" style="font-weight: 900;"><?php echo $getQuestions['title'] ?></h3>
         
         <div class="border border-warning">
            
            <h5 class="card-body"><?php echo $getQuestions['description']?></h5>   

         </div>

      </div>

   </div>
 <!-- comment section start-->
   <div class="row">

      <div class="col-8 offset-2 pt-2">
         <h4 class="p-1 text-decoration-underline fw-bold">Comments Section:</h4>
 <!-- for showing user comment start -->
         <?php 
         
         $getAnswers = $question->getAnswers($getQuestions['id']);
         
         ?>

         <?php foreach($getAnswers as $answers):?>

            <div class="border border-success pb-5 mb-5">
            
              <div>
                  <?= $answers['details'] ?>;

              </div>

              <small class="p-2" style="float:right; color:blue">Commented by:<?= $answers['username']?></small>
         </div>
         <?php endforeach ?>
<!-- for showing user comment end -->


<!-- user will log and comment start -->
         <?php if(isset($_SESSION['username'])): ?> 

            <?php              
         
               if(isset($_POST['submit'])){

               $question->makeAnswer($getQuestions['id'],$_SESSION['user_id'],$_POST['description']);
               
               
               }
            
            ?> 

         <form action="" method="POST" class="form-group">
            <textarea name="description" id="textarea" cols="30" rows="10" class="form-control"></textarea>
            <input type="submit" class="btn btn-info mt-2" name="submit" value="submit">
         </form>
         <?php endif?> 

<!-- user will log and comment end -->

      </div>

   </div>
<!-- comment section end-->
</div>


       





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>