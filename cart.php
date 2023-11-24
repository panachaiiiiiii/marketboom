<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    $name = $_SESSION['username'] ;
    $Is_admin = $_SESSION['Is_admin'] ;
    $id_user = $_SESSION['ID'];
    if($Is_admin == 0){
        
    }
    elseif($Is_admin == 1){

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
<body class="" style="font-family: 'Mitr', sans-serif; background-color: #FFF2D4; ">
        <div class="grid grid-cols-2 gap-y-4  p-6" style=" background-color: #3A4D39; ">
            <div class="">
                <p class="text-3xl sm:text-5xl lg:text-4xl xl:text-6xl " style="color: #ECE3CE;">CART</p>
            </div>
            <div class="text-right">
                <button  >
                    <a href="Home_page.php"><img src="img/home.png" alt="home" width="55"/></a>
                </button>
                
                </div>  
        </div>
        <div class="h-5"></div>
                <div class="grid grid-cols-6 items-center ">
                    <div class="grid grid-cols-6 col-span-5 ml-16 items-center my-2">
                    <div class="text-3xl py-4 ml-7"><p>สินค้า</p></div>
                        <div class="text-3xl py-4 col-span-3"></div>
                        <div class="text-3xl py-4 ml-9"><p>จำนวน</p></div>
                        <div class="text-3xl py-4 ml-9"><p>ราคารวม</p></div>
                    </div>
                    <div class="text-3xl py-4 my-2"></div>
                </div>

            <?php 
                $sql = "SELECT * FROM order_item WHERE  U_id = '$id_user' ";
                $result = mysqli_query($connecting,$sql);
                if(mysqli_num_rows($result) == 0){

                }else{
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($rows as $row):
                        $sql_i = "SELECT * FROM item WHERE  Item_id = '$row[I_id]' ";
                        $result_i =mysqli_query($connecting,$sql_i);
                        $rows_i = mysqli_fetch_all($result_i, MYSQLI_ASSOC);
                        foreach ($rows_i as $row_i):?>

                <div class="grid grid-cols-6 items-center ">
                    <div class="grid grid-cols-6 col-span-5 ml-16 items-center my-2">
                        <div><img class="rounded-lg h-32 w-32" src="<?php echo $row_i["Item_img"] ;?>" alt=""></div>
                        <div class="text-xl py-4 col-span-3"><?php echo "<p>$row_i[Item_name]</p> ";?></div>
                        <div class="grid grid-cols-3 text-3xl py-4">

                        <form id="myForm" action="editremove.php" method="POST">
                                <button value="<?php echo $row["I_id"];?>" name="ID" type="submit"  class="place-self-center"><div class=" rounded-full text-center px-4" style="background-color:#4F6F52;">-</div></button>
                        </form>
                                <div class=" text-center"><p  class=" text-center"><?php echo "$row[amount]";?></p></div>

                            <form id="myForm" action="editadd.php" method="POST">
                                <button value="<?php echo $row["I_id"];?>" name="ID" type="submit"><div class="rounded-full text-center px-4" style="background-color:#4F6F52;">+</div></button>
                            </form>

                        </div><?php $sum =$row_i['Item_price']*$row['amount']; ?>
                        <div class="text-3xl py-4 ml-16"><p><?php echo "<p>$sum</p>" ; ?></p></div>
                    </div>
                    <div class="text-3xl py-4 my-2">button</div>
                </div>
                
                            <?php endforeach; 
                            
                             endforeach;
                } ?>
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