<?php
class Router{
    
    private $routes;
 
    public function __construct(){
        //$routesPath=ROOT.'/config/routes.php';
        $this->routes=include(ROOT.'/config/routes.php');
    }
    
    private function getURI(){
       if(!empty($_SERVER['REQUEST_URI'])){
           return trim($_SERVER['REQUEST_URI'], '/');          
       }  
    }
    
    public function run(){
     $uri= $this->getURI();
        
        foreach($this->routes as $uriPattern => $path){
           // echo "<br>$uriPattern -> $path";
            if(preg_match("~$uriPattern~",$uri)){
                
                 $internalRoute=preg_replace("~$uriPattern~",$path,$uri);
              //  echo $internalRoute;
                
                
                $segments=explode('/',$internalRoute);
                $controllerName=ucfirst(array_shift($segments).'Controller');
              $actionName='action'.ucfirst(array_shift($segments));
                $paramaters=$segments;
           // print_r($paramaters) ;
            //    echo $actionName. "action <br>";
                
                $controllerfile=ROOT.'/Controller/'.$controllerName.'.php';
               
                if (file_exists($controllerfile)){
                    include_once($controllerfile);
                                      
                }
                $controllerObject=new $controllerName;
               // $result=$controllerObject->$actionName($paramaters);
                $result=call_user_func_array(array($controllerObject, $actionName),$paramaters);
                if ($result != null){
                    break;
                }
                
               
            }
            
        }
    }
    
}