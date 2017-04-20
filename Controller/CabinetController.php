<?php
include_once ROOT.'/model/User.php';
class CabinetController{
    
    public function actionIndex(){
        $userId=User::CheckLoad();
        echo $userId;
        require_once (ROOT.'/Views/cabinet.php');
        
        return true;
    }
    
}