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
<?php include 'views/navbar.php'; ?>

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
                <form action="<?php echo route('updateProduct/' . $product->ID); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Name:</h3>
                        <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Name" value="<?php echo ($product->Name); ?>">
                    </div>

                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Club:</h3>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="Club">
                            <?php
                            foreach ($clubs as $outherClub) {
                                if ($outherClub->Name == $club->Name) { ?>
                                    <option value="<?php echo $outherClub->ID ?>" selected><?php echo $outherClub->Name ?></option>
                                <?php } else { ?>
                                    <option value="<?php echo $outherClub->ID ?>"><?php echo $outherClub->Name ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Season:</h3>
                        <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Season" value="<?php echo ($product->Year); ?>">
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Type of kit:</h3>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="typeOfKit">
                            <?php
                            foreach ($typeOfKits as $outhertypeOfKit) {
                                if ($outhertypeOfKit->Name == $typeOfKit->Name) { ?>
                                    <option value="<?php echo $outhertypeOfKit->ID ?>" selected><?php echo $outhertypeOfKit->Name ?></option>
                                <?php } else { ?>
                                    <option value="<?php echo $outhertypeOfKit->ID ?>"><?php echo $outhertypeOfKit->Name ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Brand:</h3>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="Brand">
                            <?php
                            foreach ($brands as $outherBrands) {
                                if ($outherBrands->Name == $brand->Name) { ?>
                                    <option value="<?php echo $outherBrands->ID ?>" selected><?php echo $outherBrands->Name ?></option>
                                <?php } else { ?>
                                    <option value="<?php echo $outherBrands->ID ?>"><?php echo $outherBrands->Name ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">State:</h3>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="State">
                            <?php
                            var_dump($states);
                            foreach ($states as $outherStates) {
                                if ($outherStates->Name == $state->Name) { ?>
                                    <option value="<?php echo $outherStates->ID ?>" selected><?php echo $outherStates->Name ?></option>
                                <?php } else { ?>
                                    <option value="<?php echo $outherStates->ID ?>"><?php echo $outherStates->Name ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Material:</h3>
                        <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Material" value="<?php echo ($product->Material); ?>">
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Price:</h3>
                        <input type="number" class="bg-gray-50 border-gray-300 text-gray-900 w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Price" value="<?php echo ($product->Price); ?>">
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">Description:</h3>
                        <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="Description" value="<?php echo ($product->Description); ?>">
                    </div>
                    <div class="my-1 flex flex-row">
                        <h3 class="text-lg dark:text-white mt-3 mr-3">History:</h3>
                        <input type="text" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="History" value="<?php echo ($product->History); ?>">
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
                        <div class="text-xl dark:text-white mt-2">
                            <h3>Images</h3>
                            <p>The new images will replace the old ones</p>
                            <input id="imagesInput" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="image[]" type="file" accept="image/jpeg, image/png, image/jpg" multiple="multiple">
                            <div id="imagesPreview"></div>
                        </div>
                    </div>
                    <div class="flex flex-row mt-5">
                        <button type="submit" class="flex flex-row justify-center px-3 py-2 my-2 bg-green-600 rounded-xl text-sm text-white hover:scale-105 duration-300 mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Save changes
                        </button>
                </form>
                <a href="<?php echo route("myProducts") ?>" class="flex flex-row justify-center px-3 py-2 my-2 bg-red-700 rounded-xl text-sm text-white hover:scale-105 duration-300 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Cancel changes
                </a>
            </div>

        </div>
    </div>
    </div>
</body>
<script src="../views/main.js"></script>
<?php include 'views/footer.php' ?>

</html>