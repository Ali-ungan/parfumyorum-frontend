<?php include 'header.php' ?>

<main class="flex-grow pt-[80px] flex items-center">
    <div class="container mx-auto px-4 w-full">
        <h1 class="text-3xl font-bold mb-5 select-none max-lg:pt-5">İletişim</h1>
        <div class="bg-white shadow-lg rounded-xl grid grid-cols-1 md:grid-cols-2 max-lg:overflow-scroll">
            <div class="md:h-auto h-full">
                <img src="../images/contact-banner.webp" alt="İletişim" class="w-full h-full object-cover max-h-[630px]">
            </div>

            <div class="p-8 md:p-12">
                <h1 class="text-2xl font-semibold text-gray-800 mb-6 select-none">Bize Ulaşın</h1>
                <form action="/iletisim-gonder" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Ad Soyad</label>
                        <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-black">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-posta</label>
                        <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-black">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">E-posta</label>
                        <input type="tel" id="phone" name="phone" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-black">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mesaj</label>
                        <textarea id="message" name="message" rows="5" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-black"></textarea>
                    </div>
                    <button type="submit" class="bg-black float-right hover:bg-gray-800 text-white font-medium px-6 py-2 rounded-md transition-all duration-200 cursor-pointer">
                        Gönder
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php' ?>

<script>
    document.querySelector('body').classList.add('overflow-hidden');
</script>