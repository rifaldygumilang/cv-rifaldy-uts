<?php
include 'koneksi.php';
// $data_cv sudah tersedia di sini dari koneksi.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Pribadi - <?php echo $data_cv['nama_lengkap']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html { scroll-behavior: smooth; }
        .section-header { border-bottom: 2px solid #4f46e5; padding-bottom: 0.5rem; margin-bottom: 1.5rem; }
    </style>
</head>
<body class="bg-gray-50 font-sans">

<div class="container mx-auto p-4 md:p-8">

    <nav class="bg-indigo-700 text-white p-4 rounded-lg shadow-lg mb-8 sticky top-0 z-10">
        <ul class="flex flex-wrap justify-center space-x-4 md:space-x-8 text-sm md:text-base font-medium">
            <li><a href="#home" class="hover:bg-indigo-500 p-2 rounded transition duration-200">🏠 Home</a></li>
            <li><a href="#pendidikan" class="hover:bg-indigo-500 p-2 rounded transition duration-200">🎓 Pendidikan</a></li>
            <li><a href="#pengalaman" class="hover:bg-indigo-500 p-2 rounded transition duration-200">💼 Pengalaman</a></li>
            <li><a href="#keahlian" class="hover:bg-indigo-500 p-2 rounded transition duration-200">💡 Keahlian</a></li>
        </ul>
    </nav>
    
    <section id="home" class="bg-white p-6 md:p-10 shadow-2xl rounded-xl mb-12">
        <header class="flex flex-col md:flex-row md:justify-between items-center pb-6 border-b-2 border-gray-200">
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-extrabold text-gray-900"><?php echo $data_cv['nama_lengkap']; ?></h1>
                <p class="text-xl text-indigo-600 mt-1"><?php echo $data_cv['posisi']; ?></p>
            </div>
            <div class="mt-4 md:mt-0 text-gray-700 space-y-1">
                <p>📧 <?php echo $data_cv['email']; ?></p>
                <p>📞 <?php echo $data_cv['telepon']; ?></p>
                <p>📍 <?php echo $data_cv['alamat']; ?></p>
            </div>
        </header>
        <div class="mt-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Ringkasan Diri</h2>
            <p class="text-gray-600 leading-relaxed"><?php echo nl2br($data_cv['ringkasan_diri']); ?></p>
        </div>
    </section>

    <section id="pendidikan" class="bg-white p-6 md:p-10 shadow-lg rounded-xl mb-12">
        <h2 class="text-3xl font-bold section-header text-indigo-700">🎓 Riwayat Pendidikan</h2>
        <?php if (!empty($data_cv['pendidikan'])): ?>
            <?php foreach ($data_cv['pendidikan'] as $p): ?>
                <div class="mb-6 p-4 border-l-4 border-indigo-500 bg-indigo-50 hover:bg-indigo-100 transition duration-300">
                    <h3 class="font-bold text-xl text-gray-800"><?php echo $p['jurusan']; ?></h3>
                    <p class="text-gray-600 mt-1"><?php echo $p['institusi']; ?></p>
                    <p class="text-sm text-gray-500 mt-1"><?php echo $p['tahun_mulai']; ?> - <?php echo $p['tahun_selesai']; ?></p>
                    <p class="text-gray-700 mt-2 text-sm"><?php echo nl2br($p['deskripsi']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
             <p class="text-gray-500">Data riwayat pendidikan belum tersedia.</p>
        <?php endif; ?>
    </section>

    <section id="pengalaman" class="bg-white p-6 md:p-10 shadow-lg rounded-xl mb-12">
        <h2 class="text-3xl font-bold section-header text-indigo-700">💼 Riwayat Pengalaman</h2>
        <?php if (!empty($data_cv['pengalaman'])): ?>
            <?php foreach ($data_cv['pengalaman'] as $p): ?>
                <div class="mb-6 p-4 border-l-4 border-teal-500 bg-teal-50 hover:bg-teal-100 transition duration-300">
                    <h3 class="font-bold text-xl text-gray-800"><?php echo $p['judul']; ?> <span class="text-sm font-normal text-teal-600">(<?php echo $p['jenis']; ?>)</span></h3>
                    <p class="text-sm text-gray-500 mt-1"><?php echo $p['tahun_mulai']; ?> - <?php echo $p['tahun_selesai']; ?></p>
                    <p class="text-gray-700 mt-2 text-sm"><?php echo nl2br($p['deskripsi']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
             <p class="text-gray-500">Data riwayat pengalaman (Organisasi/Kerja/Proyek) belum tersedia.</p>
        <?php endif; ?>
    </section>

    <section id="keahlian" class="bg-white p-6 md:p-10 shadow-lg rounded-xl mb-12">
        <h2 class="text-3xl font-bold section-header text-indigo-700">💡 Keahlian (Skills)</h2>
        <?php if (!empty($data_cv['keahlian'])): ?>
            <div class="flex flex-wrap gap-3">
                <?php foreach ($data_cv['keahlian'] as $k): ?>
                    <span class="px-4 py-2 rounded-full text-sm font-semibold 
                        <?php 
                            if ($k['tingkat'] == 'Mahir') echo 'bg-blue-600 text-white'; 
                            else if ($k['tingkat'] == 'Menengah') echo 'bg-yellow-400 text-gray-800'; 
                            else echo 'bg-gray-300 text-gray-700';
                        ?>
                    ">
                        <?php echo $k['nama_keahlian']; ?> (<?php echo $k['tingkat']; ?>)
                    </span>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
             <p class="text-gray-500">Data keahlian belum tersedia.</p>
        <?php endif; ?>
    </section>
    
    <footer class="text-center text-gray-500 p-4 border-t mt-8">
        Aplikasi CV UTS - <?php echo date('Y'); ?>
    </footer>

</div>

</body>
</html>