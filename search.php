<?php include 'header.php'; ?>

<main class="flex-grow pt-[150px] pb-16 max-lg:pt-[100px]">
    <div class="container mx-auto px-4 max-w-6xl">
        <?php
        $q = htmlspecialchars($_GET['q'] ?? '');
        ?>

        <div class="mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">“<?= $q ?>” için arama sonuçları</h1>
            <p class="text-gray-600 text-sm">Arama kelimesiyle eşleşen içerikler aşağıda listelenmiştir.</p>
        </div>

        <!-- Parfümler -->
        <section class="mb-16">
            <h2 class="text-2xl mb-6">“<strong><?= $q ?></strong>” ile ilgili parfümler</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="bg-white p-4 rounded-xl shadow hover:shadow-md transition border border-gray-100">
                        <a href="/parfume-detail.php" class="block mb-3">
                            <img src="/images/banner.jpg" alt="Parfüm" class="w-full h-48 object-cover rounded">
                        </a>
                        <h3 class="text-lg font-semibold mb-1">
                            <a href="/parfume-detail.php">Dior Sauvage</a>
                        </h3>
                        <p class="text-sm text-gray-500 mb-1">Erkek · Ferah · Odunsu</p>
                        <div class="text-yellow-500 text-sm">★★★★☆ (4.3)</div>
                        <div class="flex justify-between items-center mb-2">
                            <a href="/perfume-detail.php#comments" class="text-blue-600 text-sm hover:underline">132 yorum</a>
                            <a href="" class='px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition'>İncele</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <!-- Karşılaştırmalar -->
        <section class="mb-16">
            <h2 class="text-2xl mb-6">“<strong><?= $q ?></strong>” ile ilgili karşılaştırmalar</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php for ($i = 0; $i < 2; $i++) : ?>
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
                            <a href="" class="px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition">Detayları Gör</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <!-- Blog Yazıları -->
        <section>
            <h2 class="text-2xl mb-6">“<strong><?= $q ?></strong>” ile ilgili blog yazıları</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="bg-white p-5 rounded-xl shadow hover:shadow-md transition border border-gray-100">
                        <a href="/blog-detail.php" class="block mb-4">
                            <img src="/images/banner.jpg" alt="Blog" class="w-full h-48 object-cover rounded">
                        </a>
                        <h3 class="text-lg font-semibold mb-2">
                            <a href="/blog-detail.php">Yazlık Parfüm Seçme Rehberi</a>
                        </h3>
                        <p class="text-sm text-gray-600 mb-5">Yaz mevsimi için en ideal ferah parfümler burada...</p>
                        <a href="" class="px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition">Devamını Oku</a>
                    </div>
                <?php endfor; ?>
            </div>
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>