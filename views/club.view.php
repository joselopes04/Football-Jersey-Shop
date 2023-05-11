<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Jersey Shop</title>
    <link rel="icon" type="image/x-icon" href="../images/FJSlogo.png">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="../views/main.js"></script>
</head>
<?php include 'navbar.php' ?>

<body class="bg-gray-50 dark:bg-gray-800">
    <div id="popularProducts" class="my-20">
        <div class="flex flex-row justify-between mx-5 mb-3">
            <h2 class="text-3xl dark:text-white"><?php echo $league->Name ?></h2>
        </div>
        
        <!-- Navigation -->
        <nav class="w-full p-4 ">
            <ol class="flex h-8 space-x-2">
                <li class="flex items-center dark:text-white">
                    <a href="<?php echo route('leagueView'); ?>" class="flex items-center hover:underline">Leagues</a>
                </li>
                <li class="flex items-center space-x-1">
                    <span class="dark:text-gray-400">/</span>
                </li>
            </ol>
        </nav>
        <!-- Navigation END-->

        <!-- Single Club Info -->
        <div class="grid grid-flow grid-cols-1 md:grid-cols-4 xl:grid-cols-6 gap-10 mx-5 mt-10">
            <?php
            foreach ($clubs as $club) { ?>
                <div class="shadow-lg rounded-lg">
                    <a href="<?php echo route('club/' . $club->ID); ?>">
                        <img src="<?php echo route($club->ImagePath); ?>" alt="">
                    </a>
                    <div class="mt-4 mb-2">
                        <p class="text-lg text-center dark:text-white"><?php echo $club->Name; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Single Club Info End-->
    </div>
</body>
<?php include 'footer.php' ?>

</html>