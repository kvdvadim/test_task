<?php 
//include_once ROOT.'/model/User.php';
include_once ROOT.'/model/User.php';
//include_once ROOT.'/model/news.php';
class UserController{
 //   include_once ROOT.'/model/user.php';
    public  function actionRegister(){
        $name='';
        $email='';
        $password='';
       //$register=false;
        if (isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];            
            $password=$_POST['password'];
              
        $errors=false;
        if (!User::checkName($name))     {$errors[$name]='Мінімальна кількість символів 3';   }            
        if (!User::checkEmail($email))   {$errors[$email]='Невірний формат Email';}       
        if (!User::checkPass($password)) {$errors[$password]='Мінімальна кількість символів пароля 3';}        
        if (User::emailExists($email)) {$errors[]='такий Email вже існує';}
    
            if (!$errors){                
               User::insertRow($name,$email,$password);
               // header( 'Location: ../news', true, 303 );
            }              
        }    
        
        $array=User::emailExists($email);
        
        include_once ROOT.'/views/register.php';
        return true;
        
    }
    public function actionLogin(){
        $email='';
        $password='';
        if (isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $errors=false;
        }
        if (!User::checkEmail($email))   {$errors[$email]='Невірний Email';}       
        if (!User::checkPass($password)) {$errors[$password]='Невірний пароль';} 
        
        $userId=User::checkUserData($email, $password);
        
        if ($userId){           
             User::auth($userId);
            header('Location: /cabinet');
        }
        
        require_once ROOT.'/views/login.php';
    }
    public static function actionLogout(){
       
        unset($_SESSION['user']);
        header("location: /");
    }
    
    
}
?>