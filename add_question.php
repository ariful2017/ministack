<?php include 'core/header.php' ?>
<?php include 'loginCheck.php'?>
<?php include 'core/question.php'?>
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
    $question->addQuestion($_POST['title'],$_POST['description'],$_SESSION['user_id']);
}

?>
<div class="container">
<div class="col-8 offset-2  p-1">
<form class="pt-3" action="" method="POST">
        <div class="form-group">
            <label class="form-label" style="font-weight: bolder;">Question Title</label>
            <input type="text" class="form-control"  name="title" placeholder="Enter your question" required>
        </div>
        <div class="form-group mt-2">
            <label class="form-label" style="font-weight: bolder;">Question Details</label>
            <textarea id="default-editor" class="form-control" name="description"></textarea>
        </div>
        <div class="form-group mt-2">
            <input type="submit" value="Submit" class="btn btn-success btn-block" name="submit">
        </div>
    </form>
</div>
</div>
</script>
</body>
</html>
    
    


