<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Jersey Shop</title>
    <link rel="icon" type="image/x-icon" href="<?php echo route("images/FJSlogo.png")?>">
    <link rel="stylesheet" href="<?php echo route("dist/output.css") ?>">
</head>
<?php include 'navbar.php' ?>

<body class="bg-gray-50 dark:bg-gray-800">
    <?php if(isset($club->Name)){ ?>
        <h2 class="text-3xl text-center dark:text-white mt-4"><?php echo($club->Name);?></h2>
    <?php } else{ ?>

  <!-- Search form -->
  <div class="mt-6 mx-96">
    <h2 class="text-3xl dark:text-white mb-2">Search</h2>
    <form action="<?php echo route("searchProduct"); ?>" method="post" >
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <input type="search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $searchTerm ?>">
        <button type="submit" class="absolute right-2.5 bottom-2.5 font-medium text-sm px-6 py-2  bg-blue-800 rounded-xl text-white hover:scale-105 duration-300">Search</button>
      </div>
    </form>
  </div>
   <!-- Search form End-->
    <?php } ?>
    
    <div id="popularProducts" class="my-5">
    <h2 class="text-center text-xl dark:text-white mb-4">Products: <?php if(isset($numberProducts[0]->Count)){echo ($numberProducts[0]->Count);}else{ echo $numberOfResults;}  
    ?></h2>
        <div class="grid grid-flow grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10 mx-5">
            <!-- Shop Filters -->
            <div class="row-span-1 mx-2 px-4 pb-6 shadow rounded">
                <div class="divide-y divide-gray-200 space-y-5">
                    <div class="mt-4">
                        <h3 class="text-xl dark:text-white">Brands</h3>
                        <?php foreach($brands as $id => $brand){?>
                            <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                
                                <input type="checkbox" id="category-<?php echo $id ?>">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="category-<?php echo $id ?>"><?php if(isset($brand->Name)){echo($brand->Name);}else{ echo ($names);} ?></label>
                                <div class="ml-auto text-gray-600 text-sm">(<?php echo($brand->Count);?>)</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div>
                        <h3 class="text-xl dark:text-white mt-2">Price</h3>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="minPrice" placeholder="Min Price">
                            <span class="mx-3 dark:text-white">-</span>
                            <input type="number" class="w-full p-2 mt-1 rounded-xl border focus:outline-none focus:ring focus:border-blue-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" type="text" name="maxPrice" placeholder="Max Price">
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
                        <?php foreach($states as $id => $state) {?>
                        <div class="space-y-2">
                            <div class="flex items-center ml-3 dark:text-white">
                                <input type="checkbox" id="state-<?php $id ?>">
                                <label class="ml-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2" for="state-<?php $id ?>"><?php echo($state->Name);?></label>
                                <div class="ml-auto text-gray-600 text-sm">(<?php echo($state->Count);?>)</div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Shop Filters END-->
            <!-- Products -->
           <?php foreach ($products as $product) { ?>
            <div class="shadow-lg rounded-lg">
                <a href="<?php echo route('product/' . $product->ID);?>">
                    <img src="<?php echo route($product->ImagePath);?>" alt="">
                </a>
                <div class="p-5">
                    <h3 class="text-xl dark:text-white mb-2"><?php echo($product->Name);?></h3>
                    <div class="flex flex-row dark:text-white">
                        <h6>Price: </h6>
                        <h6><?php echo($product->Price);?>€</h6>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XL</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">L</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">M</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">S</div>
                        <div class="border-2 border-gray-300 dark:text-white rounded-md text-xs px-2 py-1 mr-2">XS</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>Add to cart
                        </a>
                        <a href="<?php echo route('product/' . $product->ID);?>" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                            View details
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="<?php echo route("views/main.js")?>"></script>
</body>
<?php include 'footer.php' ?>

</html>