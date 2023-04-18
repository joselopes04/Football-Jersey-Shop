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
    <h2 class="text-3xl text-center dark:text-white mt-4">Liga Portugal BWIN</h2>

    <div id="popularProducts" class="my-5">
        <div class="grid grid-flow grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10 mx-5">
            <!-- Shop Filters -->
            <div class="row-span-2 mx-2 px-4 pb-6 shadow rounded">
                <div class="divide-y divide-gray-200 space-y-5">
                    <div class="mt-4">
                        <h3 class="text-xl dark:text-white">Brands</h3>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="category-1">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-1">Adidas</label>
                                <div class="ml-auto text-gray-600 text-sm">(15)</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="category-2">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-2">Puma</label>
                                <div class="ml-auto text-gray-600 text-sm">(3)</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="category-3">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-3">Nike</label>
                                <div class="ml-auto text-gray-600 text-sm">(5)</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="category-4">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-4">Humbro</label>
                                <div class="ml-auto text-gray-600 text-sm">(7)</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="category-5">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-5">New balance</label>
                                <div class="ml-auto text-gray-600 text-sm">(7)</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl dark:text-white mt-2">Price</h3>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="minPrice" placeholder="Min Price">
                            <span class="mx-3 dark:text-white">-</span>
                            <input type="number" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800" type="text" name="maxPrice" placeholder="Max Price">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl dark:text-white mt-2">Size</h3>
                        <div class="mt-2 flex items-center">
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">XL</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">L</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">M</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">S</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">XS</div>
                        </div>
                    </div>
                    <div class="text-xl dark:text-white mt-2">
                        <h3>Status</h3>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="category-3">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-4">New</label>
                                <div class="ml-auto text-gray-600 text-sm">(51)</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="category-4">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-4">Used</label>
                                <div class="ml-auto text-gray-600 text-sm">(7)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Filters END-->
            <!-- Products -->
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/jerseys/benfica2223.png" alt="">
                </a>
                <div class="p-5">
                    <h3 class="text-xl dark:text-white mb-2">Benfica Jersey 2022/2023</h3>
                    <div class="flex flex-row dark:text-white">
                        <h6>Price: </h6>
                        <h6>50€</h6>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XL</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">L</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">M</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">S</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XS</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>Add to cart
                        </a>
                        <a href="../src/productView.php" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                            View details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/jerseys/barcelona2223.jpg" alt="">
                </a>
                <div class="p-5">
                    <h3 class="text-xl dark:text-white mb-2">Barcelona Jersey 2022/2023</h3>
                    <div class="flex flex-row dark:text-white">
                        <h6>Price: </h6>
                        <h6>50€</h6>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XL</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">L</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">M</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">S</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XS</div>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between">
                        <a class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>Add to cart
                        </a>
                        <a href="../src/productView.php" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                            View details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/jerseys/juventus2223.jpg" alt="">
                </a>
                <div class="p-5">
                    <h3 class="text-xl dark:text-white mb-2">Juventus Jersey 2022/2023</h3>
                    <div class="flex flex-row dark:text-white">
                        <h6>Price: </h6>
                        <h6>50€</h6>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XL</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">L</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">M</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">S</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XS</div>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between">
                        <a class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>Add to cart
                        </a>
                        <a href="../src/productView.php" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                            View details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="">
                    <img src="../images/jerseys/arsenal2223.png" alt="">
                </a>
                <div class="p-5">
                    <h3 class="text-xl dark:text-white mb-2">Arsenal Jersey 2022/2023</h3>
                    <div class="flex flex-row dark:text-white">
                        <h6>Price: </h6>
                        <h6>50€</h6>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XL</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">L</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">M</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">S</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XS</div>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between">
                        <a class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>Add to cart
                        </a>
                        <a href="../src/productView.php" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                            View details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.html' ?>

</html>