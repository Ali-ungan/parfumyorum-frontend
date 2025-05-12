<?php include 'header.php' ?>

<main class="container mx-auto">

    <section class="pt-32 pb-4 border-b border-gray-200">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Parfüm dünyasını keşfet</h1>
            <p class="text-gray-600 max-w-xl mx-auto mb-8">Markaya, koku tipine veya parfüm adına göre arama yapın. Binlerce yoruma ulaşın.</p>

            <form action="/arama" method="GET" aria-label="Parfüm arama formu" class="max-w-xl mx-auto">
                <div class="flex items-center gap-2 bg-white border border-gray-300 rounded-full pl-4 pr-3 py-2 shadow-sm focus-within:ring-1 focus:outline-none focus-within:ring-black transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                    </svg>
                    <input type="text" name="q" aria-label="Parfüm arama alanı" placeholder="Parfüm ara..." class="w-full border-none focus:outline-none text-sm text-gray-700 placeholder-gray-400 bg-transparent" />
                    <button type="submit" class="ml-2 flex items-center px-2 py-2 bg-black hover:bg-black text-white text-sm font-medium rounded-full transition">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>

            <div class="container mx-auto px-4 py-6">
                <div class="flex flex-wrap gap-3 items-center justify-center">
                    <?php
                    $categories = ['Erkek', 'Kadın', 'Unisex', 'Yazlık', 'Kışlık'];
                    foreach ($categories as $cat) {
                        echo "<a href='search.php?q=erkek' class='px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition'>$cat</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php /*
    <div class="container mx-auto px-4 py-6">
        <div class="w-full h-[90px] bg-gray-50 rounded flex items-center justify-center text-gray-500 text-sm shadow-inner">
            Reklam Alanı (Google Ads Banner)
        </div>
    </div> */ ?>

    <section class="container mx-auto px-4 pt-10 pb-10">
        <div class="flex items-center justify-between mb-2">
            <h2 class="text-2xl font-semibold text-gray-800 select-none max-lg:text-[18px]">Popüler Parfümler</h2>
            <div class="flex items-center gap-3 max-lg:gap-2">
                <div aria-label="Önceki parfümü göster" class="swiper-button-prev-parfum bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                <div aria-label="Sonraki parfümü göster" class="swiper-button-next-parfum bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                <a href="/parfumler" aria-label="Tüm popüler parfümleri gör" class="bg-white px-5 py-2 max-lg:px-2 select-none rounded-full border border-gray-300 text-sm font-medium text-gray-800 hover:bg-gray-50 hover:text-gray-900 transition-all duration-200">
                    Tümünü Gör
                </a>
            </div>
        </div>
        <div class="swiper parfum-swiper relative">
            <div class="swiper-wrapper py-5">
                <?php for ($i = 0; $i < 8; $i++) : ?>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-lg transition transform">
                            <a href="/perfume-detail.php" class="relative">
                                <img src="/images/banner.jpg" alt="Parfüm" class="w-full h-48 object-cover rounded-xl mb-4">
                            </a>
                            <h3 class="font-semibold text-lg">
                                <a href="">Dior Sauvage</a>
                            </h3>
                            <p class="text-sm text-gray-500 mb-2">Erkek · Ferah · Odunsu</p>
                            <div class="rating mb-2 flex max-w-[100px]" data-star="4.9"></div>
                            <div class="flex justify-between items-center mb-2">
                                <a href="/perfume-detail.php#comments" class="text-blue-600 text-sm hover:underline">132 yorum</a>
                                <a href="" class='px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition'>İncele</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 pb-16 bg-gray-50">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 select-none max-lg:text-[18px]">Parfüm Karşılaştırmaları</h2>
            <div class="flex items-center gap-3 max-lg:gap-2">
                <div aria-label="Önceki karşılaştırmayı göster" class="swiper-button-prev-compare bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                <div aria-label="Sonraki karşılaştırmayı göster" class="swiper-button-next-compare bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                <a href="/karsilastirmalar" aria-label="Tüm parfüm karşılaştırmalarını gör" class="bg-white px-5 py-2 max-lg:px-2 select-none rounded-full border border-gray-300 text-sm font-medium text-gray-800 hover:bg-gray-50 hover:text-gray-900 transition-all duration-200">
                    Tümünü Gör
                </a>
            </div>
        </div>

        <div class="swiper compare-swiper">
            <div class="swiper-wrapper py-2">
                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm hover:shadow-md transition">
                            <div class="grid grid-cols-2 gap-4 items-center mb-4">
                                <div class="flex flex-col items-center">
                                    <img src="/images/perfume-2.webp" alt="Parfüm A" class="w-[100px] h-[100px] object-cover rounded-xl mb-2">
                                    <span class="text-sm font-medium text-gray-800">Dior Sauvage</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="/images/perfume-3.webp" alt="Parfüm B" class="w-[100px] h-[100px] object-cover rounded-xl mb-2">
                                    <span class="text-sm font-medium text-gray-800">Bleu de Chanel</span>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <a href="" class='px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition'>Detayları Gör</a>

                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 mb-16 max-lg:mb-5">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 select-none max-lg:text-[18px]">Blog & Yenilikler</h2>
            <div class="flex items-center gap-3 max-lg:gap-2">
                <div aria-label="Önceki yazıyı göster" class="swiper-button-prev-blog bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                <div aria-label="Sonraki yazıyı göster" class="swiper-button-next-blog bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                <a href="/parfumler" class="bg-white px-5 py-2 max-lg:px-2 select-none rounded-full border border-gray-300 text-sm font-medium text-gray-800 hover:bg-gray-50 hover:text-gray-900 transition-all duration-200">
                    Tümünü Gör
                </a>
            </div>
        </div>
        <div class="swiper blog-swiper relative">
            <div class="swiper-wrapper py-2">
                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <div class="swiper-slide">
                        <div class="bg-[#fefefe] p-5 rounded-xl shadow hover:shadow-md transition border border-gray-50">
                            <a href="/blog-detail.php" class="relative">
                                <img src="/images/banner.jpg" alt="Blog" class="w-full h-48 object-cover rounded mb-4">
                            </a>
                            <a href="" class="font-semibold text-lg mb-2">2025’in En Çok Tercih Edilen 10 Parfümü</a>
                            <p class="text-sm text-gray-600 mb-5">Yeni trendler ve kullanıcı puanlarıyla hazırladığımız bu listeye göz atın.</p>
                            <a href="" class="px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition">Devamını Oku</a>

                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

</main>

<?php include 'footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    const parfumSwiper = new Swiper('.parfum-swiper', {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next-parfum',
            prevEl: '.swiper-button-prev-parfum'
        },
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 4
            }
        }
    });

    const blogSwiper = new Swiper('.blog-swiper', {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next-blog',
            prevEl: '.swiper-button-prev-blog'
        },
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        }
    });

    const compareSwiper = new Swiper('.compare-swiper', {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 32,
        navigation: {
            nextEl: '.swiper-button-next-compare',
            prevEl: '.swiper-button-prev-compare'
        },
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2
            },
        }
    });
</script>