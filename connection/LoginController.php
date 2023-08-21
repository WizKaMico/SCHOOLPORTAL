<?php
require_once "connection/ApiController.php";
$portCont = new portalController();


if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        
        case "login": 
        if(isset($_POST['login'])){
            
            $uid = $_POST['uid'];
            $email = $_POST['email']; 
            $password = md5($_POST['password']);

            if(!empty($uid) && !empty($email) && !empty($password))
            {
             $userCredentials = $portCont->userLogin($email, $password, $uid);
             if(!empty($userCredentials))
             {
                if($userCredentials[0]["designation"] == 1)
                {
                    
                    $user_id = $userCredentials[0]["user_id"];
                    header('Location: home.php?VIEW=HOME&SESSION='.$user_id);
                }
                else if($userCredentials[0]["designation"] == 2)
                {
                    $user_id = $userCredentials[0]["user_id"];
                    header('Location: home.php?VIEW=HOME&SESSION='.$user_id);
                }
                else
                {   
                    $user_id = $userCredentials[0]["user_id"];
                    header('Location: home.php?VIEW=HOME&SESSION='.$user_id);
                } 
            }else{

            }
          }
        }
        break;   


    }
}

?>