<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Jersey Shop</title>
    <link rel="icon" type="image/x-icon" href="../images/FJSlogo.png">
    <link rel="stylesheet" href="../dist/output.css">
</head>
<?php include 'navbar.php'; ?>

<body class="bg-gray-50 dark:bg-gray-800">
    <div class="ml-5 my-5">
        <div class="container md:grid md:grid-cols-2 gap-4 mb-2">
            <!-- Product Image -->
            <div>
                <img id="mainImg" src="<?php echo route($product->ImagePath); ?>" alt="Product Image" class="mx-auto w-5/6">
                <div class="grid grid-cols-5 gap-4 mt-4">
                    <img onclick="smallImg0()" src="<?php echo route($product->ImagePath); ?>" alt="" class="w-full cursor-pointer border-4 border-blue-800 smallImg">
                    <?php if (isset($product->ImagePath2)) { ?>
                        <img onclick="smallImg1()" src="<?php echo route($product->ImagePath2); ?>" alt="" class="w-full cursor-pointer border smallImg">
                    <?php } ?>
                    <?php if (isset($product->ImagePath3)) { ?>
                        <img onclick="smallImg2()" src="<?php echo route($product->ImagePath3); ?>" alt="" class="w-full cursor-pointer border smallImg">
                    <?php } ?>
                    <?php if (isset($product->ImagePath4)) { ?>
                        <img onclick="smallImg3()" src="<?php echo route($product->ImagePath4); ?>" alt="" class="w-full cursor-pointer border smallImg">
                    <?php } ?>
                    <?php if (isset($product->ImagePath5)) { ?>
                        <img onclick="smallImg4()" src="<?php echo route($product->ImagePath5); ?>" alt="" class="w-full cursor-pointer border smallImg">
                    <?php } ?>
                </div>
            </div>
            <!-- Product Image End -->
            <!-- Product Content -->
            <div class="mr-10">
                <h2 class="text-3xl font-medium mb-2 dark:text-white"><?php echo ($product->Name); ?></h2>
                <div class="flex">
                    <div class="flex gap-1 text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                    </div>
                    <div class="ml-1 text-sm text-gray-400">(150 Reviews)</div>
                </div>
                <div class="my-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200">Availability:</span>
                    <span class="text-green-600">In Stock</span>
                </div>
                <div class="my-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200">Club:</span>
                    <span class="dark:text-white"><?php echo ($club->Name); ?></span>
                </div>
                <div class="my-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200">Season:</span>
                    <span class="dark:text-white"><?php echo ($product->Year); ?></span>
                </div>
                <div class="my-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200">Type of kit:</span>
                    <span class="dark:text-white"><?php echo ($typeOfKit->Name); ?></span>
                </div>
                <div class="my-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200">League:</span>
                    <span class="dark:text-white"><?php echo ($league->Name); ?></span>
                </div>
                <div class="my-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200">Brand:</span>
                    <span class="dark:text-white"><?php echo ($brand->Name); ?></span>
                </div>
                <div class="my-1">
                    <span class="font-medium text-gray-800 dark:text-gray-200">Material:</span>
                    <span class="dark:text-white"><?php echo ($product->Material); ?></span>
                </div>
                <div class="my-1">
                    <span class="font-medium text-2xl dark:text-gray-200">Price:</span>
                    <span class="font-bold  text-2xl dark:text-white"><?php echo ($product->Price); ?>€</span>
                </div>
                <div class="my-1">
                    <span class="text-sm dark:text-white"><?php echo ($product->Description); ?></span>
                </div>
                <div class="my-1">
                    <h3 class="font-medium text-lg text-gray-800 dark:text-gray-200 mb-3">Availabale Sizes:</h3>
                    <div class="flex items-center gap-2">
                        <div>
                            <input type="radio" name="size" hidden id="sizeXS">
                            <label for="sizeXS" class="p-2 rounded text-xs border border-gray-200 dark:text-white hover:bg-blue-800">XS</label>
                        </div>
                        <div>
                            <input type="radio" name="size" hidden id="sizeS">
                            <label for="sizeS" class="p-2 rounded text-xs border border-gray-200 dark:text-white hover:bg-blue-800">S</label>
                        </div>
                        <div>
                            <input type="radio" name="size" hidden id="sizeM">
                            <label for="sizeM" class="p-2 rounded text-xs border border-gray-200 dark:text-white hover:bg-blue-800">M</label>
                        </div>
                        <div>
                            <input type="radio" name="size" hidden id="sizeL">
                            <label for="sizeL" class="p-2 rounded text-xs border border-gray-200 dark:text-white hover:bg-blue-800">L</label>
                        </div>
                        <div>
                            <input type="radio" name="size" hidden id="sizeXL">
                            <label for="sizeXL" class="p-2 rounded text-xs border border-gray-200 text-gray-100 dark:text-white bg-gray-300">XL</label>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <h3 class="font-medium text-lg text-gray-800 dark:text-gray-200 mb-3">Choose a Personalization: <span class="dark:text-gray-200">(Optional)</span></h3>
                    <div class="flex flex-col lg:flex-row lg:items-center md:justify-between">
                        <div id="Personalization">
                            <input id="registrationFirstName" class="p-2 mx-1 my-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="First name" placeholder="Name">
                            <div class="error text-xs text-red-800"></div>
                        </div>
                        <div id="Personalization">
                            <input id="registrationFirstName" class="p-2 mx-1 my-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="number" name="First name" placeholder="Shirt Number">
                            <div class="error text-xs text-red-800"></div>
                        </div>
                        <p class="text-sm dark:text-white">The personalization costs an aditional 8€</p>
                    </div>
                </div>
                <a class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl text-sm text-white hover:scale-105 duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>Add to cart
                </a>
            </div>
        </div>
        <div class="dark:text-white mx-4">
            <h3 class="text-2xl font-medium mt-5 mb-4">History</h3>
            <p class="tracking-wide leading-normal indent-8 mb-6"><?php echo ($product->History); ?></p>
        </div>

    </div>
</body>
<script src="../views/main.js"></script>
<?php include 'footer.php' ?>

</html>