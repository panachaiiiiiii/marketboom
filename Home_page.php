<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    $name = $_SESSION['username'] ;
    $Is_admin = $_SESSION['Is_admin'] ;
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
    <body style="font-family: 'Mitr', sans-serif;">
    <?php 
        echo $name;
    ?>

        <p>สวัสดีคุณ <?php 
        echo $name ;
        ?></p>
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