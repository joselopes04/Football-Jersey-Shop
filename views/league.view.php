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
    <div id="popularProducts" class="my-20">
        <div class="flex flex-row justify-between mx-5 mb-3">
            <h2 class="text-3xl dark:text-white">Leagues</h2>
        </div>
        <!-- Single league Info -->
        <div class="grid grid-flow grid-cols-1 md:grid-cols-4 xl:grid-cols-6 gap-10 mx-5 mt-10">
            <?php
            foreach ($leagues as $league) { ?>
                <div class="shadow-lg rounded-lg">
                    <a href="<?php echo route('league/' . $league->ID); ?>">
                        <img src="<?php echo $league->ImagePath ?>" alt="">
                    </a>
                </div>
            <?php } ?>
        </div>
        <!-- Single league Info End-->
    </div>
</body>
<?php include 'footer.php' ?>

</html>