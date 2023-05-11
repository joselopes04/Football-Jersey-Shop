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
  <!-- Home Screen -->
  <div class="md:flex md:flex-row ml-4 my-10">
    <div class="md:w-3/6 flex flex-col justify-center items-center md:ml-12">
      <h1 class="text-5xl mb-5 dark:text-white">Football Jersey Shop</h1>
      <p class="mb-3 dark:text-white">From the pitch to the stands, FJS has you covered!</p>
      <a href="#popularProducts" class="flex flex-row justify-center px-3 py-2 bg-blue-800 rounded-xl w-48 text-white hover:scale-105 duration-300">Shop Now</a>
    </div>
    <div class="mt-5 md:w-3/6 mr-12 mb-10">
      <img src="images/football.svg" alt="Football Fans" class="w-full">
    </div>
  </div>
  <!-- Home Screen End -->

  <!-- Search form -->
  <div class="mt-6 mx-5 lg:mx-96">
    <h2 class="text-3xl dark:text-white mb-2">Can't find a product ?</h2>
    <form action="<?php echo route("searchProduct"); ?>" method="post">
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <input type="search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="What product do you want to search ?">
        <button type="submit" class="absolute right-2.5 bottom-2.5 font-medium text-sm px-6 py-2 bg-blue-800 rounded-xl text-white hover:scale-105 duration-300">Search</button>
      </div>
    </form>
  </div>
  <!-- Search form End-->
  <!-- Popular Products -->
  <div class="mt-20">
    <div class="flex flex-row justify-between mx-5 my-5">
      <h2 id="popularProducts" class="text-3xl dark:text-white">Trending products🔥</h2>
    </div>
    <div class="grid grid-flow grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10 mx-5">
    <?php foreach ($popularProducts as $product) { ?>
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
              <form action="<?php echo route("addToCart") ?>" method="post">
                <input type="hidden" value="<?php echo $product->ID ?>" name="ID">
                <div class="flex flex-col xl:flex-row justify-between">
                  <button type="submit" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>Add to cart
                  </button>
              </form>
              <a href="<?php echo route('product/' . $product->ID); ?>" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
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
    <!-- Popular Products End-->

    <!-- Recently added Products -->
    <div class="mt-20 mb-5">
      <div class="flex flex-row justify-between mx-5 my-5">
        <h2 class="text-3xl dark:text-white">Newest Products🆕</h2>
      </div>
      <div class="grid grid-flow grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10 mx-5">
        <!-- Products -->
        <?php foreach ($newProducts as $product) { ?>
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
              <form action="<?php echo route("addToCart") ?>" method="post">
                <input type="hidden" value="<?php echo $product->ID ?>" name="ID">
                <div class="flex flex-col xl:flex-row justify-between">
                  <button type="submit" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>Add to cart
                  </button>
              </form>
              <a href="<?php echo route('product/' . $product->ID); ?>" class="flex flex-row justify-center px-3 py-2 my-2 bg-gradient-to-r from-blue-800  to-blue-600 rounded-xl w-36 text-sm text-white hover:scale-105 duration-300">
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
  <!-- Popular Products End-->
</body>
<?php include 'footer.php' ?>

</html>