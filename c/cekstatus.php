<?php 
    include('../m/connect.php');
    
    if(isset($_POST['submit'])){
        $user       =   $_POST['username'];
        $passwd     =   $_POST['passwd'];
        $query      =   "SELECT username, _password FROM user_plinplan JOIN level_user AS a ON level_user_id = a.id WHERE a.id = 1";
        $pdo        =   $connect->prepare($query);
        $pdo->execute();
        
        $result     =   $pdo->fetch(PDO::FETCH_ASSOC);
        if($result['username'] == $user && $result['_password'] == $passwd){
            session_start();
            $_SESSION['nama']   =   $result['username'];
            $_SESSION['status'] =   true;
                
        }
        else{
            echo "login gagal";
        }
    }    
    if($_SESSION['status'] = true){
        header("location:../index.php");
    }
    else{
        echo "Login Gagal";
    }
    
?>