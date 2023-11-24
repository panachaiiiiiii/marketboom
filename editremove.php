<?php 
    require("db/Connect.php");
    session_start();
    $name = $_SESSION['username'] ;
    $Is_admin = $_SESSION['Is_admin'] ;
    $id_user = $_SESSION['ID'];
    if(!isset($_SESSION['ID']) && empty($_SESSION['ID'])){
        header("Location: index.php");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "SELECT * FROM order_item WHERE I_id = '$_POST[ID]'";
        $result =mysqli_query($connecting,$sql);

        if(mysqli_num_rows($result) == 0){
        }else{
            $amount;
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($rows as $row):
                $amount = $row['amount'];
            endforeach;
            $amount--;
            $Up_sql ="UPDATE order_item SET amount = $amount WHERE I_id = '$_POST[ID]'  AND U_id = '$id_user' ";
            mysqli_query($connecting,$Up_sql);
            if($amount == 0){
                $sql_d  = "DELETE FROM order_item WHERE I_id = '$_POST[ID]'";
                mysqli_query($connecting,$sql_d);
            }
        }
        header("Location: cart.php");
    }

?>