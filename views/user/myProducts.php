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
<?php include 'views/navbar.php' ?>

<body class="bg-gray-50 dark:bg-gray-800">
    <h1 class="text-4xl mt-5 text-center dark:text-white">My Products</h1>
    <div id="popularProducts" class="my-5">
        <h2 class="text-center text-xl dark:text-white mb-4">Products: <?php echo ($numberProducts[0]->Count); ?></h2>
        <div class="grid grid-flow grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10 mx-5">

            <!-- Add Product Form -->
            <div class="row-span-3 mx-2 px-4 pb-6 shadow rounded">
                <form method="post" action="<?php echo route("createProduct"); ?>" enctype="multipart/form-data">
                    <h3 class="text-2xl dark:text-white">Add new product</h3>
                    <div class="divide-y divide-gray-200 space-y-3">
                        <div>
                            <h3 class="text-lg dark:text-white mt-3">Name</h3>
                            <div class="flex items-center">
                                <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Name" placeholder="Set a Name">
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg dark:text-white mt-3">Price</h3>
                            <div class="mt-2 flex items-center">
                                <input type="number" class="bg-gray-50 border-gray-300 text-gray-900 w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Price" placeholder="Set a Price">
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg dark:text-white mt-2">Description</h3>
                            <div class="mt-2 flex items-center">
                                <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Description" placeholder="Set a description">
                            </div>
                        </div>

                        <div>
                            <h3 class="text-xl dark:text-white mt-2">Material</h3>
                            <div class="mt-2 flex items-center">
                                <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Material" placeholder="Set the material">
                            </div>
                        </div>

                        <div>
                            <h3 class="text-xl dark:text-white mt-2">Season</h3>
                            <div class="mt-2 flex items-center">
                                <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Season" placeholder="Set the season ex:(2020/2021)">
                            </div>
                        </div>

                        <div>
                            <h3 class="text-xl dark:text-white mt-2">History</h3>
                            <div class="mt-2 flex items-center">
                                <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="History" placeholder="Tell the story about the season(optional)">
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg dark:text-white mt-2">Brand</h3>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="Brand">
                                <?php
                                foreach ($brands as $brand) { ?>
                                    <option value="<?php echo $brand->ID ?>"><?php echo $brand->Name ?></option>
                                <?php }   ?>
                            </select>
                        </div>

                        <div>
                            <h3 class="text-lg mt-2 dark:text-white">Club</h3>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="Club">
                                <?php
                                foreach ($clubs as $club) { ?>
                                    <option value="<?php echo $club->ID ?>"><?php echo $club->Name ?></option>
                                <?php }   ?>
                            </select>
                        </div>

                        <div class="text-xl dark:text-white mt-2">
                            <h3>State</h3>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="State">
                                <?php
                                foreach ($states as $state) { ?>
                                    <option value="<?php echo $state->ID ?>"><?php echo $state->Name ?></option>
                                <?php }   ?>
                            </select>
                        </div>
                        <div class="text-xl dark:text-white mt-2">
                            <h3>Type of kit</h3> <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="typeOfKit">
                                <?php
                                foreach ($typeOfKits as $typeOfKit) { ?>
                                    <option value="<?php echo $typeOfKit->ID ?>"><?php echo $typeOfKit->Name ?></option>
                                <?php }   ?>
                            </select>
                        </div>
                        <div class="text-xl dark:text-white mt-2">
                            <h3>Images</h3>
                            <input id="imagesInput" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="image[]" type="file" accept="image/jpeg, image/png, image/jpg" multiple="multiple">
                            <div id="imagesPreview"></div>
                        </div>
                        <div>
                            <h3 class="text-xl dark:text-white mt-2">Sizes</h3>
                            <div class="mt-2 flex items-center">
                                <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">XL</div>
                                <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">L</div>
                                <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">M</div>
                                <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">S</div>
                                <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2 hover:bg-blue-800">XS</div>
                            </div>
                        </div>
                        <button href="" type="submit" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-green-500 to-green-700 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
            <!-- Add Product Form END -->

            <!-- Products -->
            <?php foreach ($myProducts as $product) { ?>
                <div class="shadow-lg rounded-lg">
                    <a href="<?php echo route('product/' . $product->ID); ?>">
                        <img src="<?php echo route($product->ImagePath); ?>" alt="">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl dark:text-white mb-2"><?php echo ($product->Name); ?></h3>
                        <div class="flex flex-row dark:text-white">
                            <h6>Price: </h6>
                            <h6><?php echo ($product->Price); ?>€</h6>
                        </div>
                        <div class="flex flex-row my-3">
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XL</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">L</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">M</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">S</div>
                            <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XS</div>
                        </div>
                        <div class="flex flex-col xl:flex-row justify-between">
                            <a href="<?php echo route('editProduct/' . $product->ID); ?>" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                                Edit
                            </a>
                            <form action="<?php echo route('deleteProduct/' . $product->ID); ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
              <!-- Products End-->
              
        </div>
    </div>
    <script src="views/main.js"></script>
</body>
<?php include 'views/footer.php' ?>

</html>