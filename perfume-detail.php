<?php include 'header.php'; ?>

<main class="flex-grow pt-[150px] pb-16 max-lg:pt-[100px]">
    <div class="container mx-auto px-4 max-w-6xl grid grid-cols-1 lg:grid-cols-3 gap-12 max-lg:flex max-lg:flex-col">

        <div class="lg:col-span-1">
            <div class="sticky top-32">
                <div class="w-full overflow-hidden rounded-xl lg:shadow-md ">
                    <img src="/images/perfume-2.webp" alt="Dior Sauvage" class="w-full h-auto lg:object-cover object-contain object-center max-lg:max-h-[400px] max-lg:shadow-2xl">
                </div>
            </div>
        </div>

        <div class="lg:col-span-2">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Dior Sauvage Eau De Parfum
            </h1>

            <article class="custom-text-editor sm:mb-12">
                <h2>1. Parfüm Hakkında Genel Bilgi</h2>
                <p>Dior Sauvage, çağdaş erkeğin imzası haline gelmiş, taze ve etkileyici bir kokudur.</p>
                <h2>2. Tasarım ve Şişe Detayları</h2>
                <p>Minimalist ve şık şişe tasarımı ile modernlik sunar.</p>
                <h2>3. Kullanım Deneyimi</h2>
                <p>Günlük ve özel kullanım için ideal bir seçimdir.</p>
            </article>

            <section class="lg:mb-16 max-lg:mb-8 pt-8 bg-gray-50 rounded-xl">
                <div class="flex justify-between max-xl:grid max-xl:grid-cols-1 max-xl:gap-4">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <div class="max-xl:divide-y max-xl:divide-gray-300">
                            <h3 class="text-xl font-semibold text-black mb-4 xl:text-center max-xl:pb-2">Üst Nota</h3>
                            <div class="max-xl:grid max-xl:grid-rows-[1fr]">
                                <div class="grid grid-cols-2 items-center gap-5 max-sm:grid-cols-3 max-md:grid-cols-4 max-xl:grid-cols-5 max-xl:overflow-hidden">
                                    <?php for ($a = 0; $a < 6; $a++): ?>
                                        <div class="bg-white shadow p-2 rounded-xl flex flex-col justify-center items-center gap-2 w-[100px] h-[100px]">
                                            <img src="/images/note-1.jpg" alt="Bergamot" class="w-12 h-12 object-contain">
                                            <span class="text-gray-700 text-sm text-center">Bergamot</span>
                                        </div>
                                    <?php endfor; ?>

                                </div>
                            </div>
                        </div>
                        <div class="h-auto w-px bg-black/10 hidden lg:block last:hidden"></div>
                    <?php endfor; ?>
                </div>
            </section>



            <div class="lg:mt-10 border-t border-gray-300 pt-6 flex items-center justify-between gap-4 text-sm text-gray-600 flex-wrap">
                <div class="flex items-center gap-4">
                    <span class="whitespace-nowrap">Bu yazıyı paylaş:</span>
                    <a href="#" class="hover:text-blue-500 transition" title="Facebook" aria-label="Facebook ile paylaş"><i class="fab fa-facebook-square text-lg"></i></a>
                    <a href="#" class="hover:text-black transition" title="X" aria-label="X ile paylaş"><i class="fab fa-x-twitter text-lg"></i></a>
                    <a href="#" class="hover:text-blue-600 transition" title="LinkedIn" aria-label="LinkedIn ile paylaş"><i class="fab fa-linkedin text-lg"></i></a>
                    <a href="mailto:?subject=Blog Yazısı&body=<?php echo urlencode('https://siteadresin.com/blog-detay') ?>" aria-label="Mail ile paylaş" class="hover:text-red-500 transition" title="E-posta">
                        <i class="fas fa-envelope text-lg"></i>
                    </a>
                </div>
                <div class="flex gap-4 text-gray-500 text-xl">
                    <button id="copyLinkBtn" class="hover:text-black transition cursor-pointer" aria-label="Bağlantıyı kopyala" title="Linki Kopyala">
                        <i class="fas fa-link"></i>
                    </button>
                    <button class="hover:text-black transition print cursor-pointer" aria-label="Yazdır" title="Yazdır">
                        <i class="fas fa-print"></i>
                    </button>
                </div>
            </div>






            <section id="comments" class="mt-6 border-t border-gray-300 pt-8">
                <h4 class="text-xl font-semibold text-gray-800 mb-6">Tüm Yorumlar</h4>
                <div class="mt-4 space-y-6 lg:mb-16">

                    <!-- Yorum 1 -->
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white font-bold text-sm">
                            E
                        </div>
                        <div>
                            <div class="flex mb-2 text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p class="text-sm text-gray-600 italic mb-2">“Harika bilgiler içeriyor. Parfüm seçiminde çok faydalı oldu.”</p>
                            <div class="text-xs text-gray-500 mb-2">— Elif K., 14 Nisan 2025</div>
                            <div class="flex items-center gap-4 text-gray-500 text-sm mt-2 select-none">
                                <button type="button" class="flex items-center gap-1 like-btn hover:text-green-500 transition-colors duration-200 cursor-pointer">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>0</span>
                                </button>
                                <button type="button" class="flex items-center gap-1 dislike-btn hover:text-red-500 transition-colors duration-200 cursor-pointer">
                                    <i class="fas fa-thumbs-down"></i>
                                    <span>0</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Yorum 2 -->
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white font-bold text-sm">
                            M
                        </div>
                        <div>
                            <div class="flex mb-1 text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-gray-300"></i>
                            </div>
                            <p class="text-sm text-gray-600 italic mb-2">“Özellikle mevsime göre koku önerileri bölümü çok işime yaradı.”</p>
                            <div class="text-xs text-gray-500 mb-2">— Mehmet T., 12 Nisan 2025</div>
                            <div class="flex items-center gap-4 text-gray-500 text-sm mt-2 select-none">
                                <button type="button" class="flex items-center gap-1 like-btn hover:text-green-700 transition-colors duration-200 cursor-pointer text-green-700">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>0</span>
                                </button>
                                <button type="button" class="flex items-center gap-1 dislike-btn hover:text-red-700 transition-colors duration-200 cursor-pointer text-red-700">
                                    <i class="fas fa-thumbs-down"></i>
                                    <span>0</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Font Awesome CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" defer></script>






        </div>

        <section class="container mx-auto px-4 lg:pt-10 lg:col-span-3">
            <div class="flex max-sm:flex-col max-sm:gap-4 items-center justify-between mb-2">
                <h2 class="text-2xl font-semibold text-gray-800 select-none max-lg:text-[18px]">Diğer Parfümler</h2>
                <div class="flex items-center gap-3 max-lg:gap-2 max-sm:flex-row-reverse">
                    <div class="flex items-center gap-2">
                        <div class="swiper-button-prev-related bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                        <div class="swiper-button-next-related bg-white cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                    <a href="/parfumler" class="bg-white px-5 py-2 max-lg:px-2 select-none rounded-full border border-gray-300 text-sm font-medium text-gray-800 hover:bg-gray-100 hover:text-gray-900 transition-all duration-200">
                        Tümünü Gör
                    </a>
                </div>
            </div>

            <div class="swiper related-swiper">
                <div class="swiper-wrapper py-5">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-lg transition transform">
                                <a href="/parfume-detail.php" class="relative block">
                                    <img src="/images/banner.jpg" alt="Parfüm" class="w-full h-48 object-cover rounded-xl mb-4">
                                </a>
                                <h3 class="font-semibold text-lg">
                                    <a href="/parfume-detail.php">YSL La Nuit</a>
                                </h3>
                                <p class="text-sm text-gray-500 mb-2">Erkek · Baharatlı · Yoğun</p>
                                <div class="text-yellow-500 mb-2">★★★★☆ (4.5)</div>
                                <div class="flex justify-between items-center mb-2">
                                    <a href="#comments" class="text-blue-500 text-sm hover:underline">67 yorum</a>
                                    <a href="" class="px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition">İncele</a>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
    </div>

    <div id="copyPopup" class="fixed top-6 right-6 bg-black text-white text-sm px-4 py-2 rounded-md shadow-md opacity-0 pointer-events-none transition-opacity duration-300 z-50">
        Bağlantı kopyalandı
    </div>
</main>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const copyBtn = document.getElementById('copyLinkBtn');
        const popup = document.getElementById('copyPopup');

        copyBtn?.addEventListener('click', () => {
            navigator.clipboard.writeText(window.location.href).then(() => {
                popup.classList.remove('opacity-0', 'pointer-events-none');
                popup.classList.add('opacity-100');
                setTimeout(() => {
                    popup.classList.remove('opacity-100');
                    popup.classList.add('opacity-0');
                }, 2000);
            });
        });

        const sticky = document.querySelector(".sticky");
        if (!sticky) return;

        const images = sticky.querySelectorAll("img");
        images.forEach((img) => {
            if (img.closest("a")) return;
            const wrapper = document.createElement("a");
            wrapper.href = img.src;
            wrapper.setAttribute("data-fancybox", "gallery");
            img.parentNode.insertBefore(wrapper, img);
            wrapper.appendChild(img);
        });


        const relatedSwiper = new Swiper('.related-swiper', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next-related',
                prevEl: '.swiper-button-prev-related'
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
    });
</script>