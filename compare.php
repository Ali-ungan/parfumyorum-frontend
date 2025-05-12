<?php include 'header.php'; ?>

<main class="flex-grow pt-[150px] pb-16 max-lg:pt-[100px]">
    <div class="container mx-auto px-4 max-w-6xl">

        <nav class="text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex space-x-1">
                <li><a href="/" class="hover:underline">Anasayfa</a></li>
                <li>/</li>
                <li class="text-gray-700">Karşılaştırmalar</li>
            </ol>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Parfüm Karşılaştırmaları</h1>

            <form action="/blog" method="GET" class="w-full md:w-80">
                <div class="flex items-center gap-2 bg-white border border-gray-300 rounded-full px-4 py-2 shadow-sm focus-within:ring-1 focus:outline-none focus-within:ring-black transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                    </svg>
                    <input type="text" name="q" placeholder="Karşılaştırma ara..." class="w-full border-none focus:outline-none text-sm text-gray-700 placeholder-gray-400 bg-transparent" />
                </div>
            </form>
        </div>

        <div id="filterPanel" class="mb-8 border border-gray-200 rounded-lg p-6 bg-gray-50">
            <div class="grid md:grid-cols-2 gap-4">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">1. Parfüm</label>
                    <input type="text" placeholder="Parfüm ara..." class="filter-search-input1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-black text-sm mb-3" />

                    <ul id="filter-list-1" class="text-sm text-gray-700 max-h-[230px] overflow-y-auto border border-gray-200 rounded-lg p-2 space-y-1 bg-white">
                        <?php
                        $perfumes = ['Dior Sauvage', 'Bleu de Chanel', 'YSL La Nuit', 'Tom Ford Noir', 'Versace Eros', 'Gucci Guilty', 'Calvin Klein One'];
                        foreach ($perfumes as $p) {
                            echo "<li><label class='flex items-center gap-2 px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer'>
                            <input type='radio' name='parfum1' value='bleu-de-chanel' class='parfum1-radio custom-checkbox'>
                            <span>$p</span>
                          </label></li>";
                        }
                        ?>
                    </ul>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">2. Parfüm</label>
                    <input type="text" placeholder="Parfüm ara..." class="filter-search-input2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-black text-sm mb-3" />

                    <ul id="filter-list-2" class="text-sm text-gray-700 max-h-[230px] overflow-y-auto border border-gray-200 rounded-lg p-2 space-y-1 bg-white">
                        <?php
                        foreach ($perfumes as $p) {
                            echo "<li><label class='flex items-center gap-2 px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer'>
                            <input type='radio' name='parfum2' value='versace-eros' class='parfum2-radio custom-checkbox'>
                            <span>$p</span>
                          </label></li>";
                        }
                        ?>
                    </ul>
                </div>

            </div>

            <div class="flex justify-center mt-4">
                <a href="#" id="compareBtn" class="bg-black text-white px-6 py-2 rounded-full font-medium text-sm opacity-50 pointer-events-none transition">Karşılaştır</a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <?php for ($i = 0; $i < 6; $i++): ?>
                <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm hover:shadow-md transition">
                    <div class="grid grid-cols-2 gap-4 items-center mb-4">
                        <div class="flex flex-col items-center">
                            <img src="/images/perfume-2.webp" alt="Parfüm A" class="w-[100px] h-[100px] object-cover rounded-xl mb-2">
                            <span class="text-sm font-medium text-gray-800">MFK - Oud</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="/images/perfume-3.webp" alt="Parfüm B" class="w-[100px] h-[100px] object-cover rounded-xl mb-2">
                            <span class="text-sm font-medium text-gray-800">MFK - Baccarat</span>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <a href="compare-detail.php" class="px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition">Detayları Gör</a>
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterPanel = document.getElementById('filterPanel');
        const compareBtn = document.getElementById('compareBtn');

        function updateButtonState() {
            const p1 = document.querySelector('input[name="parfum1"]:checked')?.value;
            const p2 = document.querySelector('input[name="parfum2"]:checked')?.value;

            if (p1 && p2 && p1 !== p2) {
                compareBtn.classList.remove('opacity-50', 'pointer-events-none');
                compareBtn.href = `/compare-detail-2.php?parfum1=${encodeURIComponent(p1)}&parfum2=${encodeURIComponent(p2)}`;
            } else {
                compareBtn.classList.add('opacity-50', 'pointer-events-none');
                compareBtn.removeAttribute('href');
            }
        }

        document.querySelectorAll('.parfum1-radio, .parfum2-radio').forEach(el => {
            el.addEventListener('change', updateButtonState);
        });

        // Filtre inputları için canlı arama
        function setupFilter(inputSelector, listSelector) {
            const input = document.querySelector(inputSelector);
            const list = document.querySelectorAll(`${listSelector} li`);

            input.addEventListener('input', () => {
                const query = input.value.toLowerCase();
                list.forEach(li => {
                    const text = li.innerText.toLowerCase();
                    li.style.display = text.includes(query) ? 'block' : 'none';
                });
            });
        }

        setupFilter('.filter-search-input1', '#filter-list-1');
        setupFilter('.filter-search-input2', '#filter-list-2');
    });
</script>