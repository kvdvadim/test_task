<?php 
include ('/config/DB.php');

class News  {
     
 
  
    
    public static function getNewsItemById($id){
      
        $connection=new database;
   $connection->connectToDb();
      //print_r($id);
         $id=intval($id);
//        print_r($id);
     //$arra=array();
        
    $sql=$connection->connectToDb()->query('SELECT * FROM article WHERE id='.$id);     
      $myrow=$sql->fetch_assoc();
      //print_r($myrow);
    return  $myrow;
                
    }  
        
    
    
     public static function getNewsList(){
        $connection=new database;
   $connection->connectToDb();
       // database::connectToDb();
     $arra=array();
    $sql= $connection->connectToDb()->query("SELECT * FROM article");     
      $myrow=$sql->fetch_assoc();
        do {         
            $arra[]=$myrow;
            }
        while ($myrow=$sql->fetch_assoc());
    return  ($arra);
                  
    }  
    
    public static function getComent($id){
        $connection=new database;
   $connection->connectToDb();
      
     $arra=array();
    $sql= $connection->connectToDb()->query
        ("SELECT * FROM coment,user where  coment.answer=0 and coment.article_id='$id' AND user.id=coment.user_id" );     
      $myrow=$sql->fetch_assoc();
        do {         
            $arra[]=$myrow;
            }
        while ($myrow=$sql->fetch_assoc());
    return  ($arra);
    }
    
    
    
     public static function getAnswer(){
        $connection=new database;
   $connection->connectToDb();
      
     $arra=array();
    $sql= $connection->connectToDb()->query("SELECT * FROM coment 
 " );     
      $myrow=$sql->fetch_assoc();
        do {         
            $arra[]=$myrow;
            }
        while ($myrow=$sql->fetch_assoc());
    return  ($arra);
    }
    
}