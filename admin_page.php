<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    $id_user = $_SESSION['ID'];
    $name = $_SESSION['username'] ;
    $Is_admin = $_SESSION['Is_admin'] ;
    
    if($Is_admin == 0){
        header("Location: Home_page.php");
    }
    elseif($Is_admin == 1){

    }else{
        header("Location: index.php");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market admin page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&family=Mitr:wght@300&display=swap');
    </style>

    <?php require("db/Connect.php")?>

</head>
    <body style="font-family: 'Mitr', sans-serif;">
        <div class="grid grid-cols-2 gap-y-4  p-6" style=" background-color: #3A4D39; ">
        
            <div class="">
                <p class="text-6xl " style="color: #ECE3CE;">ADMIN PAGE</p>
            </div>
            <div class="text-right">
                <button type="submit">
                    <img src="img/shopping-cart.png" alt="cartpng" width="55"/>
                </button>
                </div>

            
        </div>
    
                        
    </body>
</html>

<?php mysqli_close($connecting);?>
<!-- 
git add .    
git commit -m "first"
git branch -M main
git remote add origin https://github.com/panachaiiiiiii/marketboom.git
git push - u origin main

-->