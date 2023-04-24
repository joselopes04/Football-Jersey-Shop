<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header class="flex justify-between px-3 bg-slate-200 dark:bg-gray-900 dark:text-white">
        <!-- Logo -->
        <div class="py-navbar-item ">
            <a href=" <?php echo route(""); ?> "><img src="<?php echo route("images/FJSlogoHorizontal.png"); ?>" style="height: 25px;" alt="Brand Logo"></a>
        </div>
        <!-- Logo End -->
        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden md:hidden fixed top-0 bottom-0 left-0 h-full w-[220] shadow-2xl transition-all bg-slate-300 dark:bg-gray-900 z-50">
            <div class="py-navbar-item ">
                <a href="<?php echo route(""); ?> "><img src="<?php echo route("images/FJSlogoHorizontal.png"); ?>" style="height: 30px;" alt="Brand Logo"></a>
            </div>
            <ul>
                <li><a href="<?php echo route(''); ?>" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Home</a></li>
                <li><a href="<?php echo route("leagueView"); ?> " class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Leagues</a></li>
                <li><a href="" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">National Teams</a></li>
                <li><a href="" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Other Clubs</a></li>
                <li><a href="" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Retro</a></li>
            </ul>
            <ul>
                <li>
                    <a href="<?php echo route("login"); ?>" class="flex items-center py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <!-- MOBILE MENU End-->
        <!-- Center Menu -->
        <nav class="hidden md:block">
            <ul class="grid grid-flow-col">
                <li><a href="<?php echo route(""); ?>" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Home</a></li>
                <li><a href="<?php echo route("leagueView"); ?>" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Leagues</a></li>
                <li><a href="" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">National Teams</a></li>
                <li><a href="" class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Other Clubs</a></li>
                <li><a href="<?php echo route("leagueView"); ?> " class="block py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">Retro</a></li>
            </ul>
        </nav>
        <!-- Center Menu End-->
        <!-- Right menu -->
        <nav class="hidden md:block">
            <ul class="grid grid-flow-col">
                <li>
                    <a href="<?php echo route("login"); ?>" class="flex items-center py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center py-navbar-item px-navbar-item  hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">
                        <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="toogle-dark flex items-center py-navbar-item px-navbar-item hover:bg-slate-400 dark:hover:bg-slate-700 transition-all">
                        <svg id="sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                        <svg id="moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Right menu end-->
        <!-- Open mobile menu -->
        <button class="block md:hidden" onclick="hamburguerClicked()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </header>
</body>

</html>