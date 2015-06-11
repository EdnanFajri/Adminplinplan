<?php 
    include('/m/connect.php');
    
    if($_SESSION['status'] == true){
        
        if(isset($_POST['submit'])){
            $user       =   $_POST['username'];
            $passwd     =   $_POST['passwd'];
            $query      =   "SELECT * FROM tb_user";
            $pdo        =   $connect->prepare($query);
            $pdo->execute();
        
            $result     =   $pdo->fetch(PDO::FETCH_ASSOC);
            if($result['username'] == $user && $result['passwd'] == $passwd && $result['status'] == 0){
                session_start();
                $_SESSION['nama']   =   $result['nama'];
                $_SESSION['status'] =   true;
                
            }
        }
    }
    else{
        echo "Login Gagal";
    }
    
?>