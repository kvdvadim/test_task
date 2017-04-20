<?php 
include_once ROOT.'/config/DB.php';

class User{
    
    public static function register(){
        
    }
    
    public static function checkName($name)   {
        if (strlen($name)>=3) 
        { return true;  }
           return false;   }
       
    public static function checkPass($password){
             if (strlen($password)>=3)
     {  return true;   }
        return false;   }
    
    public static function checkEmail($email){
             if (filter_var($email, FILTER_VALIDATE_EMAIL))
     {  return true;   }
        return false;   }
    
    public static function emailExists($email){
         $connection=new database;
   $connection->connectToDb();
        $array=array();
         $query=$connection->connectToDb()->query("Select email from user where email='$email'");
       $myrow=$query->fetch_array();
      do {
          $array=$myrow;
      }
                while ($myrow=$query->fetch_array());
      if ($array['email']==$email){
            return true;
      } 
       return false;

    }
    
    public static function insertRow($name,$email,$password){
        $connection=new database;
   $connection->connectToDb();
$query=$connection->connectToDb()->query("INSERT INTO user (name,email,password) VALUES ('$name','$email','$password') ");
        
    }
    
    public static function insertComents($coments,$id_users,$article_id,$id_user_to_comment){
        $connection=new database;
   $connection->connectToDb();
        $query=$connection->connectToDb()->query("INSERT INTO coment (coment, user_id, article_id,answer) VALUES ('$coments','$id_users','$article_id','$id_user_to_comment')");
   // header("location: /news");
    }
    
    
    
    
     public static function checkUserData($email,$password){
         $connection=new database;
   $connection->connectToDb();
        $array=array();
         $query=$connection->connectToDb()->query("Select id, email,password from user where email='$email' AND password='$password'");
       $myrow=$query->fetch_array();
      do {
          $array=$myrow;
      }
                while ($myrow=$query->fetch_array());
      if ($array){
            return $array['id'];
      } 
       return false;
//return $array;
    }
    
    public static function SelectUserArticle($id_user_to_comment){
        
         $connection=new database;
   $connection->connectToDb();
        $array=array();
       $query=$connection->connectToDb()->query("SELECT * FROM article JOIN coment ON article.id=coment.article_id JOIN user ON coment.user_id=user.id   
WHERE  coment.user_id=$id_user_to_comment");
     $myrow=$query->fetch_array();
      do {
          $array=$myrow;
      }
                while ($myrow=$query->fetch_array());
        
    return $array;
    }
    
    
    public static function auth($userId){
      
        $_SESSION['user']=$userId;
    }
    
    public static function CheckLoad(){        
      
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
      //  header ("location: /login");
    }
    public static function Guest(){
        if (isset($_SESSION['user']))
        {
            return false;
        }
        return true;
    }
    
    }
    