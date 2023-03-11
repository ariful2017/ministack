<?php include 'core/header.php' ?>
<?php include 'core/question.php' ?>


<?php

 $question = new question;
 $AllQuestions = $question->getAllQuestions();
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

 <div class="container-fluid ps-4" style="height:80vh">
    <div class="row">
        <div class="col col-sm-4 col-md-2 border-end text-center p-2 pt-5" style="height:80vh">
        <h5 style="font-weight: bold;" class="border-bottom shadow p-1">All Relevant Tags</h5>
        <div class="form-control shadow-sm mb-2" style="background-color: blue;"><a href="#" class="text-decoration-none text-white" style="font-weight: 700;">HTML</a></div>
        <div class="form-control shadow-sm mb-2" style="background-color: blue;"><a href="#" class="text-decoration-none text-white" style="font-weight: 700;">CSS</a></div>
        <div class="form-control shadow-sm mb-2" style="background-color: blue;"><a href="#" class="text-decoration-none text-white" style="font-weight: 700;">BOOTSTRAP</a></div>
        <div class="form-control shadow-sm mb-2" style="background-color: blue;"><a href="#" class="text-decoration-none text-white" style="font-weight: 700;">JAVA</a></div>
        <div class="form-control shadow-sm mb-2" style="background-color: blue;"><a href="#" class="text-decoration-none text-white" style="font-weight: 700;">JAVASCRIPT</a></div>
        </div>
        <!-- card design -->
        <div class="col col-sm-8 col-md-10" style="height:80vh">

            <?php foreach($AllQuestions as $questions):?>
                
                <?php 
                    
                $link ="questionDetails.php?q_id=".$questions['id'];    
                    
                
                ?>

                <div class="card mt-2" style="width: 100%;">
                    <div class="card-header">
                        <a href="<?= $link?>" class="text-bold text-success mb-2" style="font-weight: 900; cursor:pointer;"><?php echo $questions['title'] ?></a>
                        <small style="float:right; color:blue">Created at: <?= date('d-m-y',strtotime($questions['creation_time']))?></small>
                        <br>
                        <small style="float:right; color:blue">Created by: <?= $questions['username']?></small>
                    </div>
                    <div class="col-12 p-4" style="text-align: right;">
                    
                    <?php if(isset($_SESSION['user_id']) && $questions['user_id']==$_SESSION['user_id']):?>
                        
                        <a href="updateQuestion.php?q_id= <?= $questions['id'] ?>" style="color:blue">Edit</a>
                        <a href="deleteQuestion.php?q_id= <?= $questions['id'] ?>" onclick="return confirm('Are you Sure?')" style="color:red">Delete</a>
                        
                    <?php endif; ?> 
                        
                    </div>
                    
                </div>
            <?php endforeach ?>
        </div>
    </div>
 </div>

       





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
    
    


