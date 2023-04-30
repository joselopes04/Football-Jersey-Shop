<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Jersey Shop</title>
    <link rel="icon" type="image/x-icon" href="images/FJSlogo.png">
    <link rel="stylesheet" href="dist/output.css">
    <script src="views/main.js"></script>
</head>
<?php include 'navbar.php' ?>

<body class="bg-gray-50 dark:bg-gray-800">
    <h1 class="text-4xl mt-5 text-center dark:text-white">Hello <?php echo ($_SESSION['firstName'] . " " . $_SESSION['surname']) ?> !</h1>
    <div class="mx-5">

        <h2 class="text-3xl my-3 dark:text-white">My profile</h2>
        <!-- My profile -->
        <div class="flex flex-col">
            <div class="flex flex-row my-3">
                <div class="w-1/2 sm:w-1/12">
                    <span class="text-gray-800 dark:text-gray-200 mr-2">First Name(s):</span>
                </div>
                <div class="w-2/2 sm:w-11/12">
                    <input disabled id="registrationFirstName" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="FirstName" placeholder="<?php echo ($_SESSION['firstName']) ?>">
                </div>
            </div>
            <div class="flex flex-row my-3">
                <div class="w-1/2 sm:w-1/12">
                    <span class="text-gray-800 dark:text-gray-200 mr-2">Surname(s):</span>
                </div>
                <div class="w-2/2 sm:w-11/12">
                    <input disabled id="registrationFirstName" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="FirstName" placeholder="<?php echo ($_SESSION['surname']) ?>">
                </div>
            </div>
            <div class="flex flex-row my-3">
                <div class="w-1/2 sm:w-1/12">
                    <span class="text-gray-800 dark:text-gray-200 mr-2">Email:</span>
                </div>
                <div class="w-2/2 sm:w-11/12">
                    <input disabled id="registrationFirstName" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="FirstName" placeholder="<?php echo ($_SESSION['email']) ?>">
                </div>
            </div>
            <div class="flex flex-row my-3">
                <div class="w-1/2 sm:w-1/12">
                    <span class="text-gray-800 dark:text-gray-200 mr-2">Address:</span>
                </div>
                <div class="w-2/2 sm:w-11/12">
                    <input disabled id="registrationFirstName" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="FirstName" placeholder="<?php echo ($_SESSION['address']) ?>">
                </div>
            </div>
            <div class="flex flex-row my-3">
                <div class="w-1/2 sm:w-1/12">
                    <span class="text-gray-800 dark:text-gray-200 mr-2">Phone number:</span>
                </div>
                <div class="w-2/2 sm:w-11/12">
                    <input disabled id="registrationFirstName" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="FirstName" placeholder="<?php echo ($_SESSION['phone']) ?>">
                </div>
            </div>
        </div>

        <!-- My profile End-->
    </div>


</body>
<?php include 'footer.php' ?>

</html>