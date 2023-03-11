<?php 

include 'loginCheck.php';
include 'core/question.php';

?>

<?php

 if(isset($_GET['q_id'])){
    $question = new question;
    $getQuestions = $question->getOneQuestion($_GET['q_id']);

    if(count($getQuestions)==1){
      $getQuestions = $getQuestions[0];

      if($getQuestions['user_id']!=$_SESSION['user_id']){
        echo "something wrong";
        exit();
      }else{
            
        $question->deleteQuestion($getQuestions['id']);

        
        header('location:index.php');
        
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