<?php 
include "database.php";

class question extends database{

public function addQuestion($title,$description,$user_id){

    $created_at = date('Y-m-d H:i:s');
    $sql ="INSERT INTO questions (title,description,user_id,creation_time) VALUES ('$title','$description','$user_id','$created_at')";
    $this->exe($sql);
    return true;

}
    public function getAllQuestions(){
    $sql= "SELECT questions.*,user.username FROM questions INNER JOIN user ON questions.user_id = user.user_id";
    return $this->fetch($sql);
}


public function getOneQuestion($q_id){
    $sql= "SELECT * FROM questions WHERE id = '$q_id' ";
    return $this->fetch($sql);
}


public function makeAnswer($q_id,$user_id,$answer){
    $sql ="INSERT INTO answers (question_id,user_id,details) VALUES ('$q_id','$user_id','$answer')";
    $this->exe($sql);
    
}

public function getAnswers($q_id){
    $sql= "SELECT answers.*,user.username FROM answers INNER JOIN user ON answers.user_id = user.user_id where question_id = '$q_id'";
    return $this->fetch($sql);
}

public function updateQuestion($q_id,$title,$description){
    $sql = "UPDATE questions SET title = '$title', description ='$description' WHERE id='$q_id' ";
    $this->exe($sql);
}

public function deleteQuestion($q_id){
    $sql= "DELETE FROM questions WHERE id = '$q_id'";
    $this->exe($sql);
}

}





?>