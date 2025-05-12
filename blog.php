<?php include 'header.php'; ?>

<main class="flex-grow pt-[150px] pb-16 max-lg:pt-[100px]">
    <div class="container mx-auto px-4 max-w-6xl">

        <nav class="text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex space-x-1">
                <li><a href="/" class="hover:underline">Anasayfa</a></li>
                <li>/</li>
                <li class="text-gray-700">Blog</li>
            </ol>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Blog Yazıları</h1>

            <form action="/blog" method="GET" class="w-full md:w-80">
                <div class="flex items-center gap-2 bg-white border border-gray-300 rounded-full px-4 py-2 shadow-sm focus-within:ring-1 focus:outline-none focus-within:ring-black transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                    </svg>
                    <input type="text" name="q" placeholder="Blog ara..." class="w-full border-none focus:outline-none text-sm text-gray-700 placeholder-gray-400 bg-transparent" />
                </div>
            </form>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php for ($i = 0; $i < 9; $i++): ?>
                <div class="bg-white rounded-xl shadow hover:shadow-md transition border border-gray-100 overflow-hidden">
                    <a href="/blog-detail.php">
                        <img src="/images/banner.jpg" alt="Blog" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-5">
                        <a href="/blog-detail.php" class="block font-semibold text-lg text-gray-800 mb-2">
                            2025’in En Çok Tercih Edilen 10 Parfümü
                        </a>
                        <p class="text-sm text-gray-600 mb-5">Yeni trendler ve kullanıcı puanlarıyla hazırladığımız bu listeye göz atın.</p>
                        <a href="" class="px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition">Devamını Oku</a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="flex justify-center">
            <nav class="inline-flex space-x-2" aria-label="Sayfalandırma">
                <a href="#" class="pagination-link">‹</a>
                <a href="#" class="pagination-link active">1</a>
                <a href="#" class="pagination-link">2</a>
                <a href="#" class="pagination-link">3</a>
                <a href="#" class="pagination-link">›</a>
            </nav>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>