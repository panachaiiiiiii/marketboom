<?php 
    require("db/Connect.php");
    session_start();
    $name = $_SESSION['username'] ;
    $Is_admin = $_SESSION['Is_admin'] ;
    $id_user = $_SESSION['ID'];
    if($Is_admin == 0){
        
    }
    elseif($Is_admin == 1){
        
    }if(empty($_SESSION['Is_admin'])) {
        header("Location: index.php");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "SELECT * FROM order_item WHERE I_id = '$_POST[Amount]'  AND U_id = '$id_user' ";
        $result =mysqli_query($connecting,$sql);

        if(mysqli_num_rows($result) == 0){
            $W_sql = "INSERT INTO order_item (U_id, I_id,amount) VALUES ( '$id_user','$_POST[ID]',1);";
            mysqli_query($connecting,$W_sql);
        }else{
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($rows as $row):
                echo "<p>$row[amount]</p>";
                $amount = $row['amount'];
            endforeach;
            $amount++;
            $Up_sql ="UPDATE order_item SET amount = $amount WHERE I_id = '$_POST[ID]'  AND U_id = '$id_user' ";
            mysqli_query($connecting,$Up_sql);
        }
        
        
        header("Location: Home_page.php");
    }

?>