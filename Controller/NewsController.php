<?php
include_once ROOT.'/model/News.php';
include_once ROOT.'/model/user.php';
//include_once ROOT.'/controller/UserController.php';

class NewsController {
    
    
    public function actionView($id){
        $id_users='';
        $coments='';
        $article_id='';
       // $id_user_to_comment=$_POST['id_user_to_comment'];
       if (isset($_POST['submit']))
       {
           if ($_POST['submit'] == 'submit_comment'){
           $id_users=$_POST['id_user'];
           $article_id=$_POST['id_article'];
           $coments=$_POST['coment'];
           $id_user_to_comment=$_POST['id_user_to_comment'];
           
          User::insertComents($coments,$id_users,$article_id,$id_user_to_comment);
           //echo $id_user;
           //echo $coment;
               }
       }
        $userId=User::CheckLoad();
        if($id){
           $id=intval($id);
        $newList=News::getNewsItemById($id);
      $user=User::Guest();
    //  $SelectArticleUser=User::SelectUserArticle($id_user_to_comment);
            
           $coment=News::getComent($id);
           $getAnswer=News::getAnswer();
           //   User::Guest();
     //  $zminna='2';
     //  echo "<pre>";
      //print_r($newList);
       // echo "</pre>";
            
            require_once (ROOT.'/Views/view.php');
          //   include_once ROOT.'/views/view.php';
        return true;
            }
    }
    
    public function actionIndex(){
       // $userId=User::CheckLoad();
       
        $newList=News::getNewsList();
        
        include_once ROOT.'/views/index.php';
    //    echo "<pre>";
    //   print_r($newList);
    //    echo "</pre>";
        
        return true;
    }
    
    
}