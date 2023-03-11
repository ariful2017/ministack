<?php include 'core/header.php' ?>
<?php include 'loginCheck.php'?>
<?php include 'core/question.php'?>
<?php

 if(isset($_GET['q_id'])){
    $question = new question;
    $getQuestions = $question->getOneQuestion($_GET['q_id']);

    if(count($getQuestions)==1){
      $getQuestions = $getQuestions[0];

      if($getQuestions['user_id']!=$_SESSION['user_id']){
        echo "something wrong";
        exit();
      }

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
<?php

if(isset($_POST['submit'])){
    $question = new question;
    $question->updateQuestion($getQuestions['id'],$_POST['title'],$_POST['description']);

    header('location:index.php');
}

?>
<div class="container">
<div class="col-8 offset-2  p-1">

    <form class="pt-3" action="" method="POST">
        <div class="form-group">
            <label class="form-label" style="font-weight: bolder;">Question Title</label>
            <input type="text" class="form-control"  name="title" value="<?=$getQuestions['title'] ?>">
        </div>
        <div class="form-group mt-2">
            <label class="form-label" style="font-weight: bolder;">Question Details</label>
            <textarea id="default-editor" class="form-control" name="description" ><?= $getQuestions['description']?></textarea>
        </div>
        <div class="form-group mt-2">
            <input type="submit" value="Update Question" class="btn btn-success btn-block" name="submit">
        </div>
    </form>
</div>
</div>
</script>
</body>
</html>
    
    


