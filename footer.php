<footer class="bg-[#f9f9f9] border-t border-gray-300 h-[80px] text-sm text-gray-500 max-lg:flex-col max-lg:py-3 flex items-center justify-between px-4">
    <div class="text-center sm:text-left w-full sm:w-auto">
        © 2025 Parfüm Yorum | Tüm hakları saklıdır.
    </div>
    <div class="flex gap-4">
        <a href="/iletisim.php" class="hover:underline">İletişim</a>
        <a href="/gizlilik-politikasi.php" class="hover:underline">Gizlilik Politikası</a>
        <a href="/kullanim-sartlari.php" class="hover:underline">Kullanım Şartları</a>
    </div>
</footer>
</body>

<div id="loginModal" class="fixed inset-0 bg-black/50 flex items-center justify-center transition-all duration-300 ease-in-out opacity-0 invisible pointer-events-none z-51">
    <div data-modal-inner class="bg-white p-10 rounded-lg shadow-lg w-[90%] max-w-md transform transition-all duration-300 scale-95 flex flex-col gap-3">
        <h2 class="text-lg font-semibold text-gray-800 w-full flex justify-center">Giriş Yap</h2>
        <hr class="border-gray-300 h-[0.5px] w-full mb-4">
        <form class="max-w-sm">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-Posta</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" placeholder="ornek@gmail.com" required />
            </div>
            <div class="mb-5">
                <label for="login-password" class="block mb-2 text-sm font-medium text-gray-900">Şifre</label>
                <input type="password" id="login-password" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" required />
            </div>
            <div class="flex items-center justify-between mb-5">
                <div class="flex items-center h-5 relative">
                    <div class="flex items-center h-5 relative">
                        <div class="position-absolute top-0 left-0 rounded-full duration-200 size-4 overflow-hidden flex items-center justify-center bg-white border border-black">
                            <input id="remember" type="checkbox" name="remember" class="hidden peer" required />
                            <div class="size-[50%] rounded-full peer-checked:bg-black duration-200"></div>
                        </div>
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Beni hatırla</label>
                </div>
                <span id="forgotPassword" class="text-sm font-medium text-black hover:underline cursor-pointer decoration-0">Şifremi unuttum</span>
            </div>
            <button type="submit" class="button text-white bg-black hover:bg-gray-800 duration-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center cursor-pointer">Giriş Yap</button>
        </form>
        <p class="mt-2 text-sm text-gray-500">Hesabın yok mu? <button id="openRegister" class="font-medium text-black hover:underline cursor-pointer decoration-0">Kayıt Ol</button>.</p>
    </div>
</div>

<div id="registerModal" class="fixed inset-0 bg-black/50 flex items-center justify-center transition-all duration-300 ease-in-out opacity-0 invisible pointer-events-none z-51">
    <div data-modal-inner class="bg-white p-10 rounded-lg shadow-lg w-[90%] max-w-md transform transition-all duration-300 scale-95 flex flex-col gap-3">
        <h2 class="text-lg font-semibold text-gray-800 w-full flex justify-center">Kayıt ol</h2>
        <hr class="border-gray-300 h-[0.5px] w-full mb-4">
        <form class="w-full">
            <div class="mb-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Ad</label>
                <input type="text" name="first_name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" required />
            </div>
            <div class="mb-2">
                <label for="surname" class="block mb-2 text-sm font-medium text-gray-900">Soyad</label>
                <input type="text" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" required />
            </div>
            <div class="mb-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-Posta</label>
                <input type="email" name="user_email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" required />
            </div>
            <div class="mb-2">
                <label for="register-password" class="block mb-2 text-sm font-medium text-gray-900">Şifre</label>
                <input type="password" name="password" id="register-password" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" required />
            </div>
            <div class="mb-5">
                <label for="register-password-repeat" class="block mb-2 text-sm font-medium text-gray-900">Şifre Tekrar</label>
                <input type="password" name="password_repeat" id="register-password-repeat" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" required />
            </div>
            <div class="flex items-center mb-5">
                <div class="position-absolute top-0 left-0 rounded-full duration-200 size-4 overflow-hidden flex items-center justify-center bg-white border border-black">
                    <input id="kvkk" type="checkbox" name="kvkk" class="hidden peer" required />
                    <div class="size-[50%] rounded-full peer-checked:bg-black duration-200"></div>
                </div>
                <label for="kvkk" class="ms-2 text-sm font-medium text-gray-900">Beni hatırla</label>
            </div>
            <button type="submit" class="button text-white bg-black hover:bg-gray-800 duration-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center cursor-pointer">Kayıt Ol</button>
        </form>
        <p class="mt-2 text-sm text-gray-500">Hesabın var mı? <button class="font-medium text-black hover:underline  cursor-pointer decoration-0 openLogin">Giriş Yap</button>.</p>
    </div>
</div>

<div id="passwordEmail" class="fixed inset-0 bg-black/50 flex items-center justify-center transition-all duration-300 ease-in-out opacity-0 invisible pointer-events-none z-51">
    <div data-modal-inner class="bg-white p-10 rounded-lg shadow-lg w-[90%] max-w-md transform transition-all duration-300 scale-95 flex flex-col gap-3">
        <h2 class="text-lg font-semibold text-gray-800 w-full flex justify-center">E-Posta'nızı girin.</h2>
        <hr class="border-gray-300 h-[0.5px] w-full mb-4">
        <form class="w-full">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-Posta</label>
                <input type="email" name="user_email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 focus-visible:outline-none text-sm rounded-lg hover:border-gray-400 block w-full p-2.5" required />
            </div>
            <button type="submit" class="button text-white bg-black hover:bg-gray-800 duration-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center cursor-pointer">Şifremi Sıfırla</button>
        </form>
        <p class="mt-2 text-sm text-gray-500">Hesabın var mı? <button class="font-medium text-black hover:underline  cursor-pointer decoration-0 openLogin">Giriş Yap</button>.</p>
    </div>
</div>

<div id="cookie-banner" class="fixed bottom-5 right-5 w-full max-w-sm bg-white/90 backdrop-blur-md border border-gray-300 shadow-xl rounded-2xl p-5 text-sm text-gray-800 z-50 hidden animate-fade-in transition-all duration-300">
    <div class="flex items-start gap-3">
        <!-- Yeni Cookie İkonu -->
        <div class="mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2a10 10 0 1 0 10 10 7 7 0 0 1-7-7A10 10 0 0 0 12 2Zm-1 5a1 1 0 1 1 1 1 1 1 0 0 1-1-1Zm-4 4a1 1 0 1 1 1 1 1 1 0 0 1-1-1Zm8 5a1 1 0 1 1-1-1 1 1 0 0 1 1 1Zm-6 2a1 1 0 1 1-1-1 1 1 0 0 1 1 1Z" />
            </svg>
        </div>

        <div>
            <p class="mb-3 leading-snug">
                Web sitemizde en iyi deneyimi yaşamanız için çerezleri kullanıyoruz.
                <a href="/gizlilik-politikasi.php" class="underline text-blue-600 hover:text-blue-800">Gizlilik Politikası</a> ve
                <a href="/kullanim-sartlari.php" class="underline text-blue-600 hover:text-blue-800">Kullanım Şartları</a>’na göz atabilirsiniz.
            </p>

            <!-- Butonlar -->
            <div class="flex justify-end gap-3 mt-4">
                <button id="cookie-reject" class="px-4 py-2 rounded-lg border text-gray-600 hover:text-red-500 hover:border-red-400 transition cursor-pointer">
                    Reddet
                </button>
                <button id="cookie-accept" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition cursor-pointer">
                    Kabul Et
                </button>
            </div>
        </div>
    </div>
</div>

<div id="preloader" class="fixed inset-0 bg-black/10 backdrop-blur-sm flex items-center justify-center z-[9999] opacity-0 pointer-events-none transition-opacity duration-200">
    <div class="w-10 h-10 border-4 border-black border-t-transparent rounded-full animate-spin"></div>
</div>

<div id="notificationTooltip" class="fixed top-6 right-6 z-[9999] px-4 py-2 rounded-md text-sm font-medium shadow-lg transition-opacity duration-300 opacity-0 pointer-events-none">
    <span id="notificationText"></span>
</div>

<script src="script.js"></script>

</html>
<script>
    function showNotification(message, type = 'success', duration = 3000) {
        const notif = document.getElementById('notificationTooltip');
        const textEl = document.getElementById('notificationText');

        notif.classList.remove('success', 'danger');
        void notif.offsetWidth;

        notif.classList.add(type);

        textEl.textContent = message;
        notif.classList.remove('opacity-0', 'pointer-events-none');
        notif.classList.add('opacity-100');

        setTimeout(() => {
            notif.classList.remove('opacity-100');
            notif.classList.add('opacity-0', 'pointer-events-none');
        }, duration);
    }
</script>