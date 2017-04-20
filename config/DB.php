<?php 
class database 
{
 
       public  $local="localhost";
     public  $user="vadim";
     public  $pass="12345";
     public  $db="mvc";
    public   $tabname;
   
   public function connectToDb(){ 
   $mysqli=new mysqli($this->local, $this->user, $this->pass, $this->db);
   if ($mysqli->connect_errno) {
   printf("Не вдалось підєднатись: %s\n", $mysqli->connect_error);
	exit();
	}
	$mysqli->query("SET NAMES utf8"); 
     return $mysqli;
    }   
}