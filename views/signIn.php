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

<body>
  <section class="bg-gray-50 dark:bg-gray-800 min-h-screen flex items-center justify-center">
    <!-- login container -->
    <div class="bg-gray-100 dark:bg-gray-900 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
      <div class="md:w-1/2 px-8 md:px-16">
        <h2 class="font-bold text-2xl text-blue-800 dark:text-white">Login</h2>
        <p class="text-xs mt-4 text-blue-800 dark:text-white">If you are already a member, please log in.</p>
        <!-- form -->
        <form id="loginForm" action="" method="post" class="flex flex-col gap-4">
          <div id="loginEmailDiv">
            <input id="loginEmail" class="p-2 mt-8 rounded-xl border w-full focus:outline-none focus:ring focus:border-blue-800" type="email" name="email" placeholder="Email">
            <div class="error text-xs text-red-800"></div>
          </div>
          <div id="loginPassowrdDiv">
            <div class="relative">
              <input id="passwordLogin" class="p-2 rounded-xl border w-full focus:outline-none focus:ring focus:border-blue-800" type="password" name="password" placeholder="Password">
              <svg id="tooglePassword" onclick="togglePasswordVisibility()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>
              <svg id="tooglePasswordVisible" onclick="togglePasswordVisibility()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="hidden bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zm151 118.3C226 97.7 269.5 80 320 80c65.2 0 118.8 29.6 159.9 67.7C518.4 183.5 545 226 558.6 256c-12.6 28-36.6 66.8-70.9 100.9l-53.8-42.2c9.1-17.6 14.2-37.5 14.2-58.7c0-70.7-57.3-128-128-128c-32.2 0-61.7 11.9-84.2 31.5l-46.1-36.1zM394.9 284.2l-81.5-63.9c4.2-8.5 6.6-18.2 6.6-28.3c0-5.5-.7-10.9-2-16c.7 0 1.3 0 2 0c44.2 0 80 35.8 80 80c0 9.9-1.8 19.4-5.1 28.2zm9.4 130.3C378.8 425.4 350.7 432 320 432c-65.2 0-118.8-29.6-159.9-67.7C121.6 328.5 95 286 81.4 256c8.3-18.4 21.5-41.5 39.4-64.8L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5l-41.9-33zM192 256c0 70.7 57.3 128 128 128c13.3 0 26.1-2 38.2-5.8L302 334c-23.5-5.4-43.1-21.2-53.7-42.3l-56.1-44.2c-.2 2.8-.3 5.6-.3 8.5z" />
              </svg>
            </div>
            <div class="error text-xs text-red-800"></div>
          </div>
          <button class="bg-blue-800 rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
        </form>
        <!-- form end-->
        <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
          <hr class="border-gray-400">
          <p class="text-center text-sm">OR</p>
          <hr class="border-gray-400">
        </div>

        <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-blue-800">
          <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
          </svg>
          Login with Google
        </button>

        <div class="mt-5 text-xs border-b border-blue-800 py-4 text-blue-800 dark:text-white">
          <a href="#">Forgot your password?</a>
        </div>

        <div class="mt-3 text-xs flex justify-between items-center text-blue-800 ">
          <p class="dark:text-white">Don't have an account?</p>
          <a href="<?php echo route("register"); ?>"><button class="py-2 px-3 bg-white border rounded-xl hover:scale-110 duration-300">Join the club</button></a>
        </div>
      </div>

      <!-- image -->
      <div class="md:block hidden w-1/2">
        <img class="rounded-2xl" src="images/footballFiled.jpg">
      </div>
    </div>
    <!-- login container end-->
  </section>
</body>

<?php include 'footer.php' ?>

</html>