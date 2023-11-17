<!DOCTYPE html>
<html lang="en">
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
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Home page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&family=Mitr:wght@300&display=swap');
    </style>

    <?php require("db/Connect.php")?>

</head>
<body class="regal-green-70022" style="font-family: 'Mitr', sans-serif; background-color: #FFF2D4; ">
        <div class="grid grid-cols-2 gap-y-4  p-6" style=" background-color: #3A4D39; ">
            <div class="">
                <p class="text-3xl sm:text-5xl lg:text-4xl xl:text-6xl " style="color: #ECE3CE;">ADMIN PAGE</p>
            </div>
            <div class="text-right">
                <button type="submit">
                    <img src="img/shopping-cart.png" alt="cartpng" width="55"/>
                </button>
                </div>  
        </div>
        <div class="h-5"></div>
        <div class="mx-4 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 xl:gap-x-8" >
            <?php 
                 $sql = "SELECT * FROM item ";
                 $result =mysqli_query($connecting,$sql);
                 $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $p = 'img/shopping-cart.png';
            $pp = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg';
            ?>
            <?php foreach ($rows as $row):?>
                <form id="myForm" action="getitem.php" method="POST">
                    <button value="<?php echo $row["Item_id"] ?>" type="submit" name="d" class="grid-cols-1 grid-rows-5 rounded-lg border-2 border-[#739072]  hover:border-[#3A4D39] background-[#FFF2D4]">
                        <div class="row-span-3">
                            <img class="rounded-lg" src=<?php echo $row["Item_img"] ?> alt="">
                        </div>
                        <div class="">
                            <?php echo $row["Item_name"] ?>
                        </div>
                        <div class="">
                            <?php echo $row["Item_price"] ?>
                        </div>
                    </button>
                </form>
                

                <?php   endforeach;?>

            <?php 
                
                    echo $_SESSION['test'];

                
            
            ?>
            
            
            
            

            


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