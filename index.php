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
        <div class="grid grid-cols-2 gap-y-6 min-h-full sm:my-40 ">
                <div class="my-20 col-span-2">
                    <p class="text-4xl text-center">BOOM MARKET LOGIN</p>
                </div>

                <div class="mx-auto col-span-2">
                    <p>Username</p>
                    <input id="Username" name="Username" type="Username" autocomplete="email" required class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                </div>

                <div class="mx-auto col-span-2">
                    <p>Password</p>
                    <input id="Password" name="Password" type="Password" autocomplete="email" required class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 m:text-sm sm:leading-6">
                </div>

                <div class="mx-auto col-span-2">
                    <a href="" class="rounded-lg bg-sky-400 p-2">Login</a>
                </div>

                <div class="text-right">
                    <p class="">สมัครตรงนี้จ้า</p>
                </div>
                
                <div class="text-left mx-9">
                    <a href="" class="rounded-lg bg-sky-400 p-1">Register</a>
                </div>

        </div>
    </body>
</html>