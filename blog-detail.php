<?php include 'header.php'; ?>

<main class="flex-grow pt-[80px] pb-16">
    <section class="relative lg:h-[300px] max-md:h-[200px] w-full mb-10">
        <img src="/images/breadcrumb.webp" alt="Kapak Görseli" class="absolute inset-0 w-full h-full object-cover rounded-none">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 container mx-auto h-full flex flex-col justify-center px-4">
            <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-md:text-2xl">
                En Çok Tercih Edilen 10 Parfüm
            </h1>
            <p class="text-white text-sm md:text-base mt-2 opacity-80">
                16 Nisan 2025
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4 max-w-4xl lg:grid lg:grid-cols-4 gap-12">

        <aside class="col-span-1 sticky top-32 self-start hidden lg:block">
            <div class="bg-white rounded-lg border p-4 shadow-sm">
                <h2 class="text-lg font-semibold text-gray-700 mb-3 flex justify-between items-center">İçindekiler <a href="#comments" class="text-sm font-normal ml-4 text-blue-400 underline">( 24 yorum )</a></h2>
                <hr class="border-gray-300 mb-3">
                <ol class="text-sm text-gray-700 space-y-2 list-inside pl-2" id="tableOfContents"></ol>
            </div>
        </aside>

        <div class="col-span-3 w-full">
            <article class="custom-text-editor">
                <p>Parfüm seçerken dikkat edilmesi gereken bazı noktalar vardır. Bu yazıda, parfüm dünyasına dair önemli ipuçları ve öneriler sunulmaktadır.</p>
                <h2>1. Parfümün Yapıtaşları</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nota Türü</th>
                            <th>Örnek Kokular</th>
                            <th>Etkileşim Süresi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Üst Nota</td>
                            <td>Narenciye, Lavanta</td>
                            <td>5-15 dk</td>
                        </tr>
                        <tr>
                            <td>Orta Nota</td>
                            <td>Gül, Yasemin</td>
                            <td>15-45 dk</td>
                        </tr>
                        <tr>
                            <td>Baz Nota</td>
                            <td>Amber, Sandal Ağacı</td>
                            <td>4+ saat</td>
                        </tr>
                    </tbody>
                </table>
                <h2>2. Mevsime Göre Koku Tercihleri</h2>
                <p>Her mevsimin havasına uygun parfümler tercih edilmelidir.</p>
                <ul>
                    <li><strong>Yaz:</strong> Narenciye ve su bazlı kokular</li>
                    <li><strong>Sonbahar:</strong> Baharatlı, hafif odunsu</li>
                    <li><strong>Kış:</strong> Yoğun, oryantal notalar</li>
                    <li><strong>İlkbahar:</strong> Çiçeksi, yeşil notalar</li>
                </ul>
                <h2>3. Parfüm Ambalajları</h2>
                <img src="/images/perfume.webp" width="200" height="100" alt="Parfüm">
                <img src="/images/perfume-2.webp" width="200" height="100" alt="Parfüm">
                <img src="/images/perfume-3.webp" width="200" height="100" alt="Parfüm">


            </article>

            <div class="mt-10 border-t border-gray-300 pt-6 flex items-center justify-between gap-4 text-sm text-gray-600 flex-wrap">
                <div class="flex items-center gap-4">
                    <span class="whitespace-nowrap">Bu yazıyı paylaş:</span>
                    <a href="#" class="hover:text-blue-600 transition" title="Facebook" aria-label="Facebook ile paylaş"><i class="fab fa-facebook-square text-lg"></i></a>
                    <a href="#" class="hover:text-black transition" title="X" aria-label="X ile paylaş"><i class="fab fa-x-twitter text-lg"></i></a>
                    <a href="#" class="hover:text-blue-700 transition" title="LinkedIn" aria-label="LinkedIn ile paylaş"><i class="fab fa-linkedin text-lg"></i></a>
                    <a href="mailto:?subject=Blog Yazısı&body=<?php echo urlencode('https://siteadresin.com/blog-detail') ?>" aria-label="Mail ile paylaş" class="hover:text-red-500 transition" title="E-posta">
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
                <div class="mt-4 space-y-6 mb-16">
                    <?php
                    $comments = [
                        [
                            'initial' => 'E',
                            'name' => 'Elif K.',
                            'date' => '14 Nisan 2025',
                            'star' => 2,
                            'comment' => 'Harika bilgiler içeriyor. Parfüm seçiminde çok faydalı oldu.'
                        ],
                        [
                            'initial' => 'M',
                            'name' => 'Mehmet T.',
                            'date' => '12 Nisan 2025',
                            'star' => 4,
                            'comment' => 'Özellikle mevsime göre koku önerileri bölümü çok işime yaradı.'
                        ]
                    ];

                    foreach ($comments as $c) {
                        echo '<div class="flex items-start gap-3" data-star="' . $c['star'] . '">';
                        echo '<div class="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white font-bold text-sm">' . $c['initial'] . '</div>';
                        echo '<div>';

                        echo '<div class="flex mb-1">';
                        for ($i = 1; $i <= 5; $i++) {
                            $color = $i <= $c['star'] ? 'text-yellow-400' : 'text-gray-300';
                            echo '<i class="fas fa-star ' . $color . '"></i>';
                        }
                        echo '</div>';

                        echo '<p class="text-sm text-gray-600 italic mb-1">“' . $c['comment'] . '”</p>';
                        echo '<div class="text-xs text-gray-500">— ' . $c['name'] . ', ' . $c['date'] . '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Yorum Yap</h3>
                <form class="space-y-6" aria-label="Yorum formu">
                    <div>
                        <div class="flex flex-row-reverse items-center gap-1 justify-end" aria-label="Yıldız Seçiniz" id="rating-stars">
                            <?php
                            for ($i = 5; $i >= 1; $i--) {
                                echo '<input type="radio" id="star-' . $i . '" name="rating" value="' . $i . '" class="hidden peer" />
                                <label for="star-' . $i . '" data-id="' . $i . '" class="cursor-pointer text-gray-300 hover:text-yellow-400 peer-checked:text-yellow-400 peer-checked:~label:text-yellow-400 transition text-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.112 3.429a1 1 0 00.95.69h3.6c.969 0 1.371 1.24.588 1.81l-2.916 2.12a1 1 0 00-.364 1.118l1.112 3.429c.3.921-.755 1.688-1.538 1.118l-2.916-2.12a1 1 0 00-1.175 0l-2.916 2.12c-.783.57-1.838-.197-1.538-1.118l1.112-3.429a1 1 0 00-.364-1.118L2.799 8.856c-.783-.57-.38-1.81.588-1.81h3.6a1 1 0 00.95-.69l1.112-3.429z" />
                                    </svg>
                                </label>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" name="name" placeholder="Ad Soyad" required class="h-12 w-full px-4 border border-gray-300 rounded-lg focus:ring-1 focus:ring-black focus:outline-none text-sm" />
                        <input type="email" name="email" placeholder="E-posta Adresi" required class="h-12 w-full px-4 border border-gray-300 rounded-lg focus:ring-1 focus:ring-black focus:outline-none text-sm" />
                    </div>

                    <textarea name="comment" placeholder="Yorumunuz..." rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-black focus:outline-none text-sm resize-none" required></textarea>

                    <div class="flex items-start justify-between gap-2">
                        <span class="text-md comment-response">
                            <p class="text-green-500">Yorumunuz gönderildi. Teşekkürler!</p>
                        </span>
                        <button type="submit" class="bg-black cursor-pointer hover:bg-gray-800 transition text-white px-6 py-3 rounded-full text-sm font-medium">Yorumu Gönder</button>
                    </div>
                </form>
            </section>
        </div>
    </div>


    <!-- Diğer Bloglar -->
    <section class="container mx-auto px-4 pt-16 pb-10">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 select-none max-lg:text-[18px]">Diğer Bloglar</h2>
            <div class="flex items-center gap-3 max-lg:gap-2">
                <div class="swiper-button-prev-other-blog cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-200 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                <div class="swiper-button-next-other-blog cursor-pointer w-9 h-9 rounded-full border border-gray-300 text-gray-700 flex items-center justify-center hover:bg-gray-200 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                <a href="/blog" class="px-5 py-2 max-lg:px-2 select-none rounded-full border border-gray-300 text-sm font-medium text-gray-800 hover:bg-gray-100 hover:text-gray-900 transition-all duration-200">
                    Tümünü Gör
                </a>
            </div>
        </div>

        <div class="swiper other-blog-swiper">
            <div class="swiper-wrapper py-2">
                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <div class="swiper-slide">
                        <div class="bg-white border border-gray-100 p-5 rounded-xl shadow hover:shadow-md transition">
                            <a href="/blog-detail.php" class="block mb-3">
                                <img src="/images/banner.jpg" alt="Blog" class="w-full h-40 object-cover rounded">
                            </a>
                            <a href="/blog-detail.php" class="font-semibold text-lg block mb-2 hover:underline">
                                2025’in En Çok Tercih Edilen 10 Parfümü
                            </a>
                            <p class="text-sm text-gray-600 mb-4">Yeni trendler ve kullanıcı puanlarıyla hazırladığımız bu listeye göz atın.</p>
                            <a href="" class='px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-100 hover:text-black transition'>Devamını Oku</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>



    <div id="copyPopup" class="fixed top-6 right-6 bg-black text-white text-sm px-4 py-2 rounded-md shadow-md opacity-0 pointer-events-none transition-opacity duration-300 z-50">
        Bağlantı kopyalandı
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        const copyLinkBtn = document.getElementById('copyLinkBtn');
        const copyPopup = document.getElementById('copyPopup');

        copyLinkBtn.addEventListener('click', () => {
            navigator.clipboard.writeText(window.location.href).then(() => {
                copyPopup.classList.remove('opacity-0', 'pointer-events-none');
                copyPopup.classList.add('opacity-100');

                setTimeout(() => {
                    copyPopup.classList.add('opacity-0');
                    copyPopup.classList.remove('opacity-100');
                }, 2000);
            });
        });

        const toc = document.getElementById('tableOfContents');
        const content = document.querySelector('.custom-text-editor');
        const headings = content.querySelectorAll('h2');

        headings.forEach((heading, index) => {
            const id = `heading-${index}`;
            heading.setAttribute('id', id);

            const li = document.createElement('li');
            const a = document.createElement('a');
            a.href = `#${id}`;
            a.textContent = heading.textContent;
            a.className = 'hover:text-black';

            li.appendChild(a);
            toc.appendChild(li);
        });



        const editor = document.querySelector(".custom-text-editor");
        if (!editor) return;

        const images = editor.querySelectorAll("img");

        images.forEach((img) => {
            if (img.closest("a")) return;

            const wrapper = document.createElement("a");
            wrapper.href = img.src;
            wrapper.setAttribute("data-fancybox", "gallery");

            img.parentNode.insertBefore(wrapper, img);
            wrapper.appendChild(img);
        });


        window.addEventListener("scroll", () => {
            let currentId = null;

            headings.forEach((heading) => {
                const rect = heading.getBoundingClientRect();
                if (rect.top < 120 && rect.bottom > 120) {
                    currentId = heading.getAttribute("id");
                }
            });

            document.querySelectorAll('#tableOfContents a').forEach((link) => {
                if (link.getAttribute('href') === `#${currentId}`) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active");
                }
            });
        });


        function printCustomEditor() {
            const content = document.querySelector('.custom-text-editor');
            if (!content) return;

            const printWindow = window.open('', '', 'width=800,height=600');
            printWindow.document.write(`
                <html>
                <head>
                    <title>Yazdır</title>
                    <link rel="stylesheet" href="/output.css">
                    <style>
                        body {
                            padding: 20px;
                            font-family: sans-serif;
                            color: #1f2937;
                        }
                    </style>
                </head>
                <body>
                    ${content.innerHTML}
                </body>
                </html>
            `);
            printWindow.document.close();
            printWindow.focus();
            printWindow.print();
            printWindow.close();
        }
        const printButton = document.querySelector('.print');
        if (printButton) {
            printButton.addEventListener('click', (e) => {
                e.preventDefault();
                printCustomEditor();
            });
        }


        const otherBlogSwiper = new Swiper('.other-blog-swiper', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next-other-blog',
                prevEl: '.swiper-button-prev-other-blog'
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
    })
</script>