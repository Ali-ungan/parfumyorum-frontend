<?php include 'header.php'; ?>

<main class="flex-grow pt-[150px] pb-16 max-lg:pt-[100px]">
    <div class="container mx-auto px-4 max-w-6xl grid grid-cols-1 lg:grid-cols-4 gap-8">

        <aside class="col-span-1 max-lg:col-span-4">
            <nav class="space-y-2 bg-white border border-gray-200 rounded-lg p-4 text-sm font-medium text-gray-700">
                <a href="profile.php" class="sidebar-link active">
                    Profilim
                </a>
                <a href="comments.php" class="sidebar-link">
                    Yorumlarım
                </a>
                <a href="/logout.php" class="block px-3 py-2 rounded text-red-600 hover:bg-red-50 hover:text-red-700 transition">
                    Çıkış Yap
                </a>
            </nav>
        </aside>

        <section class="col-span-3 bg-white border border-gray-200 rounded-lg p-6 max-lg:col-span-4">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Profilim</h1>

            <!-- Profil Bilgileri -->
            <form class="space-y-5 max-w-xl mb-10">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Ad Soyad</label>
                    <input type="text" id="name" value="Ali Üngan" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm " />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-posta</label>
                    <input type="email" id="email" value="ali@example.com" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm " />
                </div>
                <div class="flex justify-between">
                    <span class="response"></span>
                    <button type="submit" class="bg-black hover:bg-gray-800 text-white text-sm px-6 py-2 rounded-full transition cursor-pointer">Güncelle</button>
                </div>
            </form>

            <h2 class="text-xl font-semibold text-gray-800 mb-4">Şifre Değiştir</h2>
            <form class="space-y-5 max-w-xl">
                <div class="relative">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Eski Şifre</label>
                    <input type="password" id="old-password" class="password-input w-full border border-gray-300 rounded-lg px-4 py-2 text-sm pr-10 " />
                    <button type="button" class="cursor-pointer toggle-password absolute right-3 top-8 text-gray-500 hover:text-black">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <div class="relative">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Yeni Şifre</label>
                    <input type="password" id="new-password" class="password-input w-full border border-gray-300 rounded-lg px-4 py-2 text-sm pr-10 " />
                    <button type="button" class="cursor-pointer toggle-password absolute right-3 top-8 text-gray-500 hover:text-black">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <div class="relative">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Yeni Şifre (Tekrar)</label>
                    <input type="password" id="repeat-password" class="password-input w-full border border-gray-300 rounded-lg px-4 py-2 text-sm pr-10 " />
                    <button type="button" class="cursor-pointer toggle-password absolute right-3 top-8 text-gray-500 hover:text-black">
                        <i class="fas fa-eye"></i>
                    </button>

                </div>

                <div class="flex justify-between">
                    <span class="response"></span>
                    <button type="submit" class="bg-black hover:bg-gray-800 text-white text-sm px-6 py-2 rounded-full transition cursor-pointer">Şifreyi Güncelle</button>
                </div>
            </form>
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>

<script>
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', () => {
            const input = button.previousElementSibling;
            input.type = input.type === 'password' ? 'text' : 'password';
            const icon = button.querySelector('i');
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    });
</script>