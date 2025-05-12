<?php include 'header.php'; ?>

<main class="flex-grow pt-[150px] pb-16 max-lg:pt-[100px]">
    <div class="container mx-auto px-4 max-w-6xl grid grid-cols-1 lg:grid-cols-4 gap-8">

        <aside class="col-span-1 max-lg:col-span-4">
            <nav class="space-y-2 bg-white border border-gray-200 rounded-lg p-4 text-sm font-medium text-gray-700">
                <a href="profile.php" class="sidebar-link">
                    Profilim
                </a>
                <a href="comments.php" class="sidebar-link active">
                    Yorumlarım
                </a>
                <a href="/logout.php" class="block px-3 py-2 rounded text-red-600 hover:bg-red-50 hover:text-red-700 transition">
                    Çıkış Yap
                </a>
            </nav>
        </aside>

        <section class="col-span-3 max-lg:col-span-4 bg-white border border-gray-200 rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Yorumlarım</h1>
            <div class="space-y-6">
                <?php
                $yorumlar = [
                    [
                        'baslik' => 'Dior Sauvage Eau De Parfum',
                        'puan' => 5,
                        'yorum' => 'Kalıcılığı harika, tam bir klasik. Hem yaz hem kış kullanılır.',
                        'url' => '/parfume-detail.php'
                    ],
                    [
                        'baslik' => 'YSL La Nuit de L’Homme',
                        'puan' => 3,
                        'yorum' => 'Kokusu güzel ama performansı biraz zayıf kaldı bende.',
                        'url' => '/parfume-detail.php'
                    ],
                ];

                foreach ($yorumlar as $yorum) {
                    echo '<div class="relative border border-gray-200 rounded-lg p-5 bg-white shadow-sm">';
                    echo '<button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition cursor-pointer w-[20px] h-[20px] flex items-center justify-center" title="Yorumu Sil"><i class="fas fa-trash-alt"></i></button>';
                    echo '<h2 class="text-lg font-semibold text-gray-800 mb-1">' . $yorum['baslik'] . '</h2>';
                    echo '<div class="flex text-yellow-400 text-sm mb-2">';
                    for ($i = 1; $i <= 5; $i++) {
                        $class = $i <= $yorum['puan'] ? 'text-yellow-400' : 'text-gray-300';
                        echo '<i class="fas fa-star ' . $class . '"></i>';
                    }
                    echo '</div>';
                    echo '<p class="text-gray-700 text-sm mb-4 italic">“' . $yorum['yorum'] . '”</p>';
                    echo '<button id="profileBtn" class="bg-white hover:bg-gray-50 text-black border border-gray-300 px-4 py-2 rounded-full text-sm font-medium transition cursor-pointer">
                            <i class="fas fa-eye"></i> Yorumu Gör</a>
                        </button>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>