<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Boom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&family=Mitr:wght@300&display=swap');
    </style>

    <?php require("db/Connect.php")?>

</head>
        <?php 
            $sql = "SELECT * FROM user";
            $result =mysqli_query($connecting,$sql);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
    <body style="font-family: 'Mitr', sans-serif;">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="grid grid-cols-2 gap-y-4 min-h-full sm:my-40 ">


                    <div class="mt-15 mb-20 col-span-2">
                        <p class="text-6xl text-center">MY MARKET LOGIN</p>
                    </div>

                    <div class="mx-auto col-span-2">
                        <p>Username</p>
                        <input id="Username" name="Username" type="text" autocomplete="email" required class="block p-1 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                    </div>

                    <div class="mx-auto col-span-2">
                        <p>Password</p>
                        <input id="Password" name="Password" type="Password" autocomplete="email" required class="block p-1 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                    </div>

                    <div class="mx-auto col-span-2">
                        <!-- <a href="" type="submit" class="rounded-lg bg-sky-400 p-2">Login</a> -->
                        <input type="submit" class="rounded-lg bg-sky-400 p-2" value="Submit">
                    </div>

                    <div class="text-right">
                        <p class="">สมัครตรงนี้จ้า -></p>
                    </div>
                    
                    <div class="text-left mx-9">
                        <a href="sign_up.php" class="rounded-lg bg-yellow-400 p-1">Sign Up</a>
                    </div>
            </div>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $U_name = $_POST['Username'];
            $Password = $_POST['Password'];
            foreach ($rows as $row):
                if($U_name == $row["U_username"]){

                    if($Password == $row["U_password"]){
                        
                        if($row["Is_admin"] == "1"){
                            echo "admin logined";
                            break;
                        }
                        else{
                            echo "not admin logined";
                            break;
                        }

                    }
                }
            endforeach;
            }
        ?>
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