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
    <div class="mx-5 mb-3">

        <h2 class="text-3xl my-3 dark:text-white">My profile</h2>
        <!-- My profile -->
        <div class="flex flex-col font-arial">
            <form action="<?php echo route('updateUser/' . $_SESSION['userId']); ?>" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                <div class="flex flex-row my-3">
                    <div class="w-1/2 sm:w-2/12 lg:w-1/12">
                        <span class="text-gray-800 dark:text-gray-200 mr-2">First Name(s):</span>
                    </div>
                    <div class="w-2/2 sm:w-10/12 lg:w-11/12">
                        <input disabled id="registrationFirstName" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="FirstName" value="<?php echo ($_SESSION['firstName']) ?>">
                    </div>
                </div>
                <div class="flex flex-row my-3">
                    <div class="w-1/2 sm:w-2/12 lg:w-1/12">
                        <span class="text-gray-800 dark:text-gray-200 mr-2">Surname(s):</span>
                    </div>
                    <div class="w-2/2 sm:w-10/12 lg:w-11/12">
                        <input disabled id="registrationSurname" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="Surname" value="<?php echo ($_SESSION['surname']) ?>">
                    </div>
                </div>
                <div class="flex flex-row my-3">
                    <div class="w-1/2 sm:w-2/12 lg:w-1/12">
                        <span class="text-gray-800 dark:text-gray-200 mr-2">Email:</span>
                    </div>
                    <div class="w-2/2 sm:w-10/12 lg:w-11/12">
                        <input disabled id="registrationEmail" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="Email" value="<?php echo ($_SESSION['email']) ?>">
                    </div>
                </div>
                <div class="flex flex-row my-3">
                    <div class="w-1/2 sm:w-2/12 lg:w-1/12">
                        <span class="text-gray-800 dark:text-gray-200 mr-2">Address:</span>
                    </div>
                    <div class="w-2/2 sm:w-10/12 lg:w-11/12">
                        <input disabled id="registrationAddress" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="Address" value="<?php echo ($_SESSION['address']) ?>">
                    </div>
                </div>
                <div class="flex flex-row my-3">
                    <div class="w-1/2 sm:w-2/12 lg:w-1/12">
                        <span class="text-gray-800 dark:text-gray-200 mr-2">Phone number:</span>
                    </div>
                    <div class="w-2/2 sm:w-10/12 lg:w-11/12">
                        <input disabled id="registrationPhone" class="py-1 px-2 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="number" name="Phone" value="<?php echo ($_SESSION['phone']) ?>">
                    </div>
                </div>
                <a id="saveButton" class="hidden"><button name="submit" type="submit" class="py-2 px-3 mr-3 bg-green-600 dark:text-white border rounded-xl hover:scale-110 duration-300">Save changes</button></a>
                <a id="cancelButon" class="hidden" onclick="cancelEditProfile(event)"><button class="py-2 px-3 bg-red-700 dark:text-white border rounded-xl hover:scale-110 duration-300">Cancel</button></a>
            </form>
            <div class="flex flex-row my-3">
                <div class="w-fit">
                    <a id="editButton" onclick="editProfile()"><button class="py-2 px-3 mr-3 bg-gray-200 dark:bg-gray-500 dark:text-white border rounded-xl hover:scale-110 duration-300">Edit profile</button></a>
                </div>
                <div class="w-fit">
                    <a id="logoutButon" href="<?php echo route('logout'); ?>"><button class="py-2 px-3 bg-blue-800 dark:text-white border rounded-xl hover:scale-110 duration-300">Logout</button></a>
                </div>
                </form>
            </div>
            <form action="<?php echo route('deleteUser/' . $_SESSION['userId']); ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <a id="deleteButon" class="hidden"><button class="py-2 px-3 bg-red-700 dark:text-white border rounded-xl hover:scale-110 duration-300">Delete account</button></a>
            </form>
        </div>
        <!-- My profile End-->
    </div>

</body>
<?php include 'footer.php' ?>

</html>