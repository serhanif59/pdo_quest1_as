<?php 
    require_once "env_connect/connect.php";

    $connection = getConnect();
    if ($connection){
        include_once "model.php";
        $friends = getAllFriends($connection);
        
        include_once "show.php";
        
        
        foreach($friends as $friend){
            echo "<script>printFriends('" . $friend['firstname']. "' , '" . $friend['lastname'] . "');</script>";
        }
        
        include_once "show.php";
        if ($_POST){
            $errors =array();
            $firstname = htmlentities(trim($_POST['firstname']));
            $lastname = htmlentities(trim($_POST['lastname']));
            if( !isset($firstname) || trim($firstname) === '') 
                    $errors['firstname'] = "First Name Required";
            if(!isset($lastname) || trim($lastname) === '') 
                    $errors[] = "Last Name Required";
            if( strlen($firstname) > 45) 
                    $errors['firstname'] = "First Name Too Long";
            if( strlen($lastname) > 45)
                    $errors['lastname'] = "Last Name Too Long";
            
            if (empty($errors)) {
                addFriend($connection, $firstname,$lastname);
                header('Location: /index.php');
            }else{
                echo "<script>alert('First Name and/Or Last Name not filled.');</script>";
            }

        }
        
    }else
       die;

?>    
