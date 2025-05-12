<?php include 'header.php'; ?>

<main class="flex-grow pt-[80px] pb-16">
    <section class="relative lg:h-[300px] max-md:h-[200px] w-full mb-10">
        <img src="/images/compare-banner.webp" alt="Kapak Görseli" class="absolute inset-0 w-full h-full object-cover rounded-none">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 container mx-auto h-full flex items-center px-4">
            <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-md:text-2xl">
                Parfüm Karşılaştırması: Dior vs Chanel
            </h1>
        </div>
    </section>

    <div class="container mx-auto px-4 max-w-4xl">
        <article class="custom-text-editor overflow-auto">

            <p>Parfüm dünyasında, Dior ve Chanel gibi ikonik markalar arasında seçim yapmak zor olabilir. Bu karşılaştırmada, iki popüler parfümü inceleyeceğiz: Dior Sauvage ve Bleu de Chanel.</p>
            <p>Her iki parfüm de kendine özgü özelliklere sahip ve farklı kitlelere hitap ediyor. İşte bu iki parfümün detaylı karşılaştırması:</p>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; text-align: left;">
                <thead>
                    <tr>
                        <th style="width: 25%; border:0"></th>
                        <th>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <img src="/images/perfume.webp" alt="Parfüm 1" width="100" height="100"><br>
                                <strong>Dior Sauvage</strong>
                            </div>
                        </th>
                        <th>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <img src="/images/perfume-2.webp" alt="Parfüm 2" width="100" height="100"><br>
                                <strong>Bleu de Chanel</strong>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Koku Tipi</strong></td>
                        <td style="text-align: center;">Odunsu & Ferah</td>
                        <td style="text-align: center;">Narenciye & Baharatlı</td>
                    </tr>
                    <tr>
                        <td><strong>Kalıcılık</strong></td>
                        <td style="text-align: center;">5-6 Saat</td>
                        <td style="text-align: center;">7-8 Saat</td>
                    </tr>
                    <tr>
                        <td><strong>Kullanım Zamanı</strong></td>
                        <td style="text-align: center;">Günlük</td>
                        <td style="text-align: center;">Özel Günler</td>
                    </tr>
                    <tr>
                        <td><strong>Hedef Kitle</strong></td>
                        <td style="text-align: center;">Genç</td>
                        <td style="text-align: center;">Yetişkin</td>
                    </tr>
                    <tr>
                        <td><strong>Fiyat</strong></td>
                        <td style="text-align: center;">1000₺</td>
                        <td style="text-align: center;">1400₺</td>
                    </tr>
                </tbody>
            </table>
        </article>

        <div class="mt-10 border-t border-gray-300 pt-6 flex items-center justify-between gap-4 text-sm text-gray-600 flex-wrap">
            <div class="flex items-center gap-4">
                <span class="whitespace-nowrap">Bu karşılaştırmayı paylaş:</span>
                <a href="#" class="hover:text-blue-500 transition" title="Facebook" aria-label="Facebook'ta paylaş"><i class="fab fa-facebook-square text-lg"></i></a>
                <a href="#" class="hover:text-black transition" title="X" aria-label="X'te paylaş"><i class="fab fa-x-twitter text-lg"></i></a>
                <a href="#" class="hover:text-blue-600 transition" title="LinkedIn" aria-label="Linkedin'de paylaş"><i class="fab fa-linkedin text-lg"></i></a>
                <a href="mailto:?subject=Parfüm Karşılaştırması&body=<?php echo urlencode('https://siteadresin.com/karsilastirma') ?>" aria-label="Mail ile paylaş" class="hover:text-red-500 transition" title="E-posta">
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


    </div>

    <div id="copyPopup" class="fixed top-6 right-6 bg-blue-600 text-white text-sm px-4 py-2 rounded-md shadow-md opacity-0 pointer-events-none transition-opacity duration-300 z-50">
        Bağlantı kopyalandı
    </div>
</main>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const copyLinkBtn = document.getElementById('copyLinkBtn');
        const copyPopup = document.getElementById('copyPopup');

        copyLinkBtn?.addEventListener('click', () => {
            navigator.clipboard.writeText(window.location.href).then(() => {
                copyPopup.classList.remove('opacity-0', 'pointer-events-none');
                copyPopup.classList.add('opacity-100');
                setTimeout(() => {
                    copyPopup.classList.add('opacity-0');
                    copyPopup.classList.remove('opacity-100');
                }, 2000);
            });
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
    });
</script>