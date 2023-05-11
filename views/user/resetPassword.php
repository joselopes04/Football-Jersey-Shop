<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Jersey Shop</title>
    <link rel="icon" type="image/x-icon" href="images/FJSlogo.png">
    <link rel="stylesheet" href="dist/output.css">
</head>
<?php include 'views/navbar.php'; ?>

<body class="bg-gray-50 dark:bg-gray-800">
    <section class="bg-gray-50 dark:bg-gray-800 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 dark:bg-gray-900 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
            <div class="md:w-1/2 px-8 md:px-16">
                <h2 class="font-bold text-2xl text-blue-800 dark:text-white">Reset Password</h2>
                <p class="text-xs mt-4 text-blue-800 dark:text-white">Enter your email address to receive a password reset email.</p>
                <!-- form -->
                <form id="loginForm" action="<?php echo route("resetPasswordDB"); ?>" method="post" onsubmit="return validateLoginInputs()" class="flex flex-col gap-3">
                <input type="hidden" name="_method" value="PATCH">   
                <input id="loginEmail" class="p-2 mt-8 rounded-xl border w-full focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="email" name="email" placeholder="Email">
                    <div class="error text-xs text-red-800">
                        <?php if (isset($_SESSION['ErrorResetPassword'])) {
                            echo ($_SESSION['ErrorResetPassword']);
                        }; ?>
                    </div>
                    <button type="submit" class="bg-blue-800 rounded-xl text-white py-2 hover:scale-105 duration-300">Send Email</button>
                </form>
                <!-- form end-->
                <div class="mt-3 text-xs flex justify-between items-center text-blue-800 ">
                    <a href="<?php echo route("loginView"); ?>"><button class="py-2 px-3 mt-3 bg-white border rounded-xl hover:scale-110 duration-300">Go back</button></a>
                </div>
            </div>

            <!-- image -->
            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="images/goalkeeper.jpeg">
            </div>
        </div>
        <!-- login container end-->
    </section>


</body>
<script src="views/main.js"></script>
<?php include 'views/footer.php' ?>

</html>