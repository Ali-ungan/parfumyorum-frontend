<?php include 'header.php'; ?>

<main class="flex-grow pt-[150px] pb-16 max-lg:pt-[100px]">
    <div class="container mx-auto px-4 max-w-6xl flex max-lg:flex-col gap-8">

        <aside id="mobileFilterSidebar" class="lg:block col-span-1 min-w-[250px] max-lg:hidden">
            <div class="space-y-5">
                <div class="bg-gray-50 group/filter border border-gray-200 rounded-lg">
                    <button type="button" data-toggle-target="brand-filter" class="w-full flex justify-between items-center px-4 py-2 text-sm font-semibold text-black bg-gray-50 hover:bg-gray-100 rounded-lg transition cursor-pointer focus:outline-none">
                        <span class="select-none">Markalar</span>
                        <svg class="w-4 h-4 transition-transform duration-200 rotate-180" data-toggle-icon viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="brand-filter" class="transition-all duration-300 max-h-[250px] overflow-y-auto px-4 py-3 border-t border-gray-200 bg-white rounded-b-lg">
                        <input type="text" placeholder="Marka ara..." class="filter-search-input mb-3 placeholder:select-none w-full px-3 py-1.5 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-gray-500" data-target="brand-list" />
                        <ul id="brand-list" class="text-sm text-gray-700 filter-scroll">
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Dior</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Chanel</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>YSL</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Tom Ford</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Versace</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Gucci</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Calvin Klein</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded-lg">
                    <button type="button" data-toggle-target="note-filter" class="w-full flex justify-between items-center px-4 py-2 text-sm font-semibold text-black bg-gray-50 hover:bg-gray-100 rounded-lg transition cursor-pointer focus:outline-none">
                        <span class="select-none">Notalar</span>
                        <svg class="w-4 h-4 transition-transform duration-200" data-toggle-icon viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="note-filter" class="transition-all duration-300 max-h-[250px] overflow-y-auto px-4 py-3 border-t border-gray-200 bg-white rounded-b-lg hidden">
                        <input type="text" placeholder="Nota ara..." class="filter-search-input mb-3 placeholder:select-none w-full px-3 py-1.5 border border-gray-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-gray-500" data-target="note-list" />
                        <ul id="note-list" class="text-sm text-gray-700 pr-1 filter-scroll">
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Lavanta</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Amber</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Sedir</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Bergamot</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Paçuli</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Anason</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Grey Pepper</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Tarçın</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Misk</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded-lg">
                    <button type="button" data-toggle-target="gender-filter" class="w-full flex justify-between items-center px-4 py-2 text-sm font-semibold text-black bg-gray-50 hover:bg-gray-100 rounded-lg transition cursor-pointer focus:outline-none">
                        <span class="select-none">Cinsiyet</span>
                        <svg class="w-4 h-4 transition-transform duration-200" data-toggle-icon viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="gender-filter" class="transition-all duration-300 max-h-[250px] overflow-y-auto px-4 py-3 border-t border-gray-200 bg-white rounded-b-lg hidden">
                        <ul id="gender-list" class="text-sm text-gray-700 pr-1 filter-scroll">
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Erkek</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Kadın</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center w-full px-2 py-1.5 rounded hover:bg-gray-100 transition cursor-pointer">
                                    <input type="checkbox" class="custom-checkbox mr-3">
                                    <span>Unisex</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <button class="button text-white bg-black hover:bg-gray-800 duration-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center cursor-pointer">Filtrele</button>
            </div>
        </aside>

        <div class="col-span-3 min-lg:min-w-[850]">
            <div class="flex items-center justify-between mb-6 gap-3">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Parfümler</h1>
                <form action="/parfumler" method="GET" class="w-full max-w-sm flex items-center justify-end gap-3">
                    <div class="relative">
                        <input type="text" id="search" name="q" placeholder="Parfüm ara..." class="w-full bg-white border z-1 border-gray-300 rounded-full py-2 pl-4 pr-12 text-sm focus:outline-none hover:border-gray-400" />
                        <button type="submit" class="absolute right-3 top-2 text-gray-500 hover:text-black transition z-0 cursor-pointer">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div id="mobileFilterToggle" class="hidden cursor-pointer max-lg:flex items-center gap-2 bg-white border border-gray-300 rounded-full px-4 py-2 shadow-sm text-black hover:shadow-md hover:text-gray-800 hover:border-gray-400 transition-all duration-200">
                        <i class="fas fa-filter"></i>
                        <span class="text-sm">Filtrele</span>
                    </div>
                </form>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php for ($i = 0; $i < 12; $i++): ?>
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <a href="/perfume-detail.php" class="block mb-3">
                            <img src="/images/banner.jpg" alt="Parfüm" class="w-full h-48 object-cover rounded-lg" />
                        </a>
                        <h3 class="text-lg font-semibold text-gray-800">Dior Sauvage</h3>
                        <p class="text-sm text-gray-500 mb-3">Erkek · Ferah · Odunsu</p>
                        <div class="text-yellow-500 mb-2">★★★★☆ (4.2)</div>
                        <div class="flex justify-between items-center mb-2">
                            <a href="/perfume-detail.php#comments" class="text-blue-600 text-sm hover:underline">132 yorum</a>
                            <a href="" class="px-4 py-2 rounded-full bg-white text-sm font-medium border border-gray-300 hover:bg-gray-50 hover:text-black transition">İncele</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="flex justify-center mt-10">
                <nav class="inline-flex space-x-2" aria-label="Sayfalandırma">
                    <a href="#" class="pagination-link">‹</a>
                    <a href="#" class="pagination-link active">1</a>
                    <a href="#" class="pagination-link">2</a>
                    <a href="#" class="pagination-link">3</a>
                    <a href="#" class="pagination-link">›</a>
                </nav>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterInputs = document.querySelectorAll('.filter-search-input');

        filterInputs.forEach(input => {
            input.addEventListener('input', function() {
                const targetId = input.getAttribute('data-target');
                const list = document.getElementById(targetId);
                const query = input.value.toLowerCase();

                list.querySelectorAll('li').forEach(li => {
                    const text = li.innerText.toLowerCase();
                    li.style.display = text.includes(query) ? 'block' : 'none';
                });
            });
        });

        document.querySelectorAll('.filter-search-input').forEach(input => {
            input.addEventListener('input', function() {
                const targetId = input.getAttribute('data-target');
                const list = document.getElementById(targetId);
                const query = input.value.toLowerCase();

                list.querySelectorAll('li').forEach(li => {
                    const text = li.innerText.toLowerCase();
                    li.style.display = text.includes(query) ? 'block' : 'none';
                });
            });
        });

        document.querySelectorAll('[data-toggle-target]').forEach(button => {
            button.addEventListener('click', () => {
                const target = document.getElementById(button.dataset.toggleTarget);
                const icon = button.querySelector('[data-toggle-icon]');
                target.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        const toggleBtn = document.getElementById('mobileFilterToggle');
        const sidebar = document.getElementById('mobileFilterSidebar');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('max-lg:hidden');
        });
    });
</script>