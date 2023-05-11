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

    <section class="flex items-center justify-center">

        <div class="flex flex-col max-w-3xl p-6 space-y-4 my-3 mx-3 sm:p-10 dark:bg-gray-900 dark:text-gray-100">
            <h2 class="text-xl font-semibold">Your cart</h2>
            <ul class="flex flex-col divide-y divide-gray-700">

                <?php foreach ($products as $product) { ?>

                    <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                        <div class="flex w-full space-x-2 sm:space-x-4">
                            <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500" src="<?php echo $product->image ?>" alt="Image">
                            <div class="flex flex-col justify-between w-full pb-4">
                                <div class="flex justify-between w-full pb-2 space-x-2">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-semibold leading-snug sm:pr-8"><?php echo $product->Name ?></h3>
                                        <p class="text-sm dark:text-gray-400">Quantity: <?php echo $product->quantity ?></p>
                                        <?php if (($product->Personalization)) { ?>
                                            <p class="text-sm dark:text-gray-400">Personalization: <?php echo $product->Personalization ?></p>
                                        <?php } ?>
                                        <?php if (($product->shirtNumber)) { ?>
                                            <p class="text-sm dark:text-gray-400">Shirt number: <?php echo $product->shirtNumber ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-semibold"><?php echo $product->price ?>€</p>
                                    </div>
                                </div>
                                <div class="flex text-sm hover:text-red-700">
                                    <button type="button" class="flex items-center px-2 py-1 pl-0 space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-current">
                                            <path d="M96,472a23.82,23.82,0,0,0,23.579,24H392.421A23.82,23.82,0,0,0,416,472V152H96Zm32-288H384V464H128Z"></path>
                                            <rect width="32" height="200" x="168" y="216"></rect>
                                            <rect width="32" height="200" x="240" y="216"></rect>
                                            <rect width="32" height="200" x="312" y="216"></rect>
                                            <path d="M328,88V40c0-13.458-9.488-24-21.6-24H205.6C193.488,16,184,26.542,184,40V88H64v32H448V88ZM216,48h80V88H216Z"></path>
                                        </svg>
                                        <form action="<?php echo route("removeFromCart/" . $product->ID) ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit">Remove</button>
                                        </form>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php }  ?>
            </ul>
            <div class="space-y-1 text-right">
                <p>Total amount:
                    <span class="font-semibold"><?php echo $totalPrice ?> €</span>
                </p>
                <p class="text-sm dark:text-gray-400">Not including taxes and shipping costs</p>
            </div>
            <div class="flex justify-end space-x-4">
                <a href="<?php echo route("") ?>" class="px-6 py-2 border rounded-md dark:border-blue-800 hover:scale-105 duration-300">Back
                    <span class="sr-only sm:not-sr-only">to shop</span>
                </a>
                <button type="button" class="font-medium text-sm px-6 py-2 bg-blue-800 rounded-xl text-white hover:scale-105 duration-300">
                    <span class="sr-only sm:not-sr-only">Continue to </span>Checkout
                </button>
            </div>
        </div>
    </section>
</body>
<script src="views/main.js"></script>
<?php include 'views/footer.php' ?>

</html>