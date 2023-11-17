<?php 
    session_start();
    $name = $_SESSION['username'] ;
    $Is_admin = $_SESSION['Is_admin'] ;
    if($Is_admin == 0){
        
    }
    elseif($Is_admin == 1){
        header("Location: admin_page.php");
    }else{
        header("Location: index.php");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST['d']==3)
        echo $_SESSION['test']++;
        header("Location: Home_page.php");
    }

?>