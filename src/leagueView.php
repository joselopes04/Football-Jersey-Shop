<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Jersey Shop</title>
    <link rel="icon" type="image/x-icon" href="../images/FJSlogo.png">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="main.js"></script>
</head>
<?php include 'navbar.html' ?>

<body class="bg-gray-50 dark:bg-gray-800">
    <!-- Show Leagues -->
    <div id="popularProducts" class="my-20">
        <div class="flex flex-row justify-between mx-5 mb-3">
            <h2 class="text-3xl dark:text-white">Leagues</h2>
        </div>
        <div class="grid grid-flow grid-cols-1 md:grid-cols-4 xl:grid-cols-6 gap-10 mx-5">
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/logosLeagues/PremierLeague.png" alt="">
                </a>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/logosLeagues/Bundesliga.png" alt="">
                </a>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/logosLeagues/Laliga.png" alt="">
                </a>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/logosLeagues/SerieA.png" alt="">
                </a>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/logosLeagues/Ligue1.png" alt="">
                </a>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="shop.php">
                    <img src="../images/logosLeagues/LigaPortugalBwin.png" alt="">
                </a>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.html' ?>

</html>