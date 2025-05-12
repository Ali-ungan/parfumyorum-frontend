<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>

<body class="bg-[#f9f9f9] text-gray-800 font-sans relative flex flex-col min-h-screen max-lg:overflow-scroll">

    <header class="w-full fixed top-0 left-0 z-50 bg-white border-b border-gray-200 shadow-sm px-4 md:px-8 h-[80px] flex items-center">
        <div class="container mx-auto flex justify-between items-center h-full">
            <a href="/" class="text-2xl font-bold text-gray-800 tracking-wide select-none h-full flex items-center max-w-[185px]">
                <img src="/images/logo.png">
            </a>

            <!-- Mobile menu toggle -->
            <button id="menuToggle" class="hidden max-lg:flex text-2xl text-gray-700 hover:text-black focus:outline-none transition cursor-pointer">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Desktop Nav -->
            <nav class="max-lg:hidden flex items-center gap-8">
                <a href="/perfumes.php" class="nav-link">Parfüm İncelemeleri</a>
                <a href="/compare.php" class="nav-link">Karşılaştırmalar</a>
                <a href="/blog.php" class="nav-link">Blog</a>
            </nav>

            <!-- Desktop Giriş -->
            <div class="max-lg:hidden flex items-center gap-4">
                <form method="GET" class="w-full">
                    <div class="flex items-center gap-2 bg-white border border-gray-300 rounded-full px-4 py-2 shadow-sm focus:outline-none transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                        </svg>
                        <input type="text" minlength="3" name="s" required placeholder="Ara" class="w-full border-none focus:outline-none text-sm text-gray-700 placeholder-gray-400 bg-transparent" />
                    </div>
                </form>
            </div>

            <div id="mobileMenu" class="fixed hidden top-[80px] left-0 w-full bg-white border-t border-gray-200 shadow-md z-40 flex-col px-6 py-4 space-y-2">
                <div class="flex flex-col">

                    <a href="/perfumes.php" class="mobile-nav-link">Parfüm İncelemeleri</a>
                    <a href="/compare.php" class="mobile-nav-link">Karşılaştırmalar</a>
                    <a href="/blog.php" class="mobile-nav-link">Blog</a>
                    <a href="/iletisim.php" class="mobile-nav-link">İletişim</a>
                    <button id="mobileProfileBtn" class="mt-4 max-w-[130px] bg-black text-white px-4 py-2 rounded-full text-sm font-medium flex justify-center items-center gap-2 transition">
                        <i class="fas fa-user-circle"></i>
                        Giriş Yap
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->

    </header>