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
    <body style="font-family: 'Mitr', sans-serif;">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="grid grid-cols-2 gap-y-4 min-h-full sm:my-20 ">


                    <div class="mt-2 mb-5 col-span-2">
                        <p class="text-6xl text-center">Sign UP</p>
                    </div>

                    <div class="mx-auto col-span-2">
                        <p>Email</p>
                        <input id="Email" name="Email" type="Email" autocomplete="email" required class="block p-1 rounded-md border- py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                    </div>
                    <div class="mx-auto col-span-2">
                        <p>Username</p>
                        <input id="Username" name="Username" type="text" autocomplete="email" required class="block p-1  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                    </div>

                    <div class="mx-auto col-span-2">
                        <p>Password</p>
                        <input id="Password" name="Password" type="Password" autocomplete="email" required class="block  rounded-md p-1 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                    </div>
                    <div class="mx-auto col-span-2">
                        <p>Repeat Password</p>
                        <input id="Re_Password" name="Re_Password" type="Password" autocomplete="email" required class="block p-1 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                    </div>

                    <div class="mx-auto col-span-2">
                        <!-- <a href="" type="submit" class="rounded-lg bg-sky-400 p-2">Login</a> -->
                        <input type="submit" class="rounded-lg bg-sky-400 p-2 hover:bg-sky-600" value="Sign Up">
                    </div>
            </div>
            
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sql = "SELECT * FROM user WHERE U_username = '$_POST[Username]' ";
                $result = mysqli_query($connecting,$sql);
                if(mysqli_num_rows($result) == 0){

                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    if($_POST['Password'] == $_POST['Re_Password']){                     
                        $W_sql = "INSERT INTO user (U_email, U_username, U_password,Is_admin) VALUES ( '$_POST[Email]','$_POST[Username]','$_POST[Password]',0);";
                        mysqli_query($connecting,$W_sql);
                        header("Location: index.php");
                        
                        
                    }
                    else{
                        echo "password not fomath";
                    }
                }else{
                    echo "not use";
            }
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