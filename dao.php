<?php
session_start();
class Dao {
  private $host = 'localhost';
  private $dbname = 'reedomw2_userinformation';
  private $username = 'reedomw2_freedom';
  private $password = 'passwordtest';
    
  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    return $connection;
  }
    
    public function isValidUser($email, $psw, $connection){
        $stmt = $connection->prepare('SELECT * FROM userinfo WHERE email=?');
        $stmt->execute(array($_POST['email']));
        $return=$stmt->fetch();
        if($return != null && $return["password"]==$_POST["psw"]){
            return true;
        }else{
            return false;
        }
            
    }
    
    public function checkUsername($uname, $connection){
        $stmtUser = $connection->prepare('SELECT * FROM userinfo WHERE username=?');
        $stmtUser->execute(array($_POST['uname'])); //checks username
        $returnUser=$stmtUser->fetch();
        if($returnUser != null){
            return false;
        }else{
            return true;
        }

    }
    
    public function getUsername($email, $connection){
        $stmtUser = $connection->prepare('SELECT * FROM userinfo WHERE email=?');
        $stmtUser->execute(array($email)); //checks username
        $returnUser=$stmtUser->fetch();
        if($returnUser != null){
            return $returnUser[3];
        }else{
            return $_SESSION['email'];
        }

    }
    
    public function registerUser($uname,$email,$psw,$connection){
        $stmt = $connection->prepare('SELECT * FROM userinfo WHERE email=?');
        $stmt->execute(array($_POST['email'])); //checks email validation
        $returnEmail=$stmt->fetch();
        if($returnEmail != null){
            $_SESSION['emailError'] = 'Email already taken';
            return false; //if email already registered
        }else{
            $stmt = $connection->prepare('INSERT INTO userinfo (email, password, access, username) VALUES (?,?,?,?)');
            $stmt->execute(array($_POST['email'],$_POST['psw'],0,$_POST['uname']));
            return true;
        }
          
    }
    
//  public function getComments() {
//    $conn = $this->getConnection();
//    try {
//    return $conn->query("select comment_id, comment, date_entered  from comment order by date_entered desc", PDO::FETCH_ASSOC);
//    } catch(Exception $e) {
//      echo print_r($e,1);
//      exit;
//    }
//  }
//  public function saveComment ($comment) {
//    $this->logger->LogInfo("saving a comment [{$comment}]");
//    $conn = $this->getConnection();
//    $saveQuery = "insert into comment (comment) values (:comment)";
//    $q = $conn->prepare($saveQuery);
//    $q->bindParam(":comment", $comment);
//    $q->execute();
//  }
//  public function deleteComment ($id) {
//    $conn = $this->getConnection();
//    $deleteQuery = "delete from comment where comment_id = :id";
//    $q = $conn->prepare($deleteQuery);
//    $q->bindParam(":id", $id);
//    $q->execute();
//  }
}