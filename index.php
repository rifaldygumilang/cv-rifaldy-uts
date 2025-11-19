<?php


$data_cv = [
    'nama_lengkap' => 'Rifaldy Gumilang M.',
    'posisi' => 'Jurusan Teknik Informatika',
    'email' => 'rifaldygumilang@gmail.com',
    'telepon' => '081564xxxxx',
    'alamat' => 'J. Sukabumi',
    'ringkasan_diri' => 'Saya merupakan mahasiswa Teknik Informatika di Universitas Muhammadiyah Sukabumi yang memiliki ketertarikan di bidang teknologi informasi, pengembangan sistem, dan pemrograman web. Di sini saya masih dalam proses belajar mengelola data dan membuat aplikasi berbasis web.',
    
    
    'pendidikan' => [
        [
            'jurusan' => 'Teknik Informatika',
            'institusi' => 'Universitas Muhammadiyah Sukabumi',
            'tahun_mulai' => '2023',
            'tahun_selesai' => '2027',
            'deskripsi' => ''
        ],
        [
            'jurusan' => 'Ilmu Pengatahuan Sosial (IPS)',
            'institusi' => 'SMK Negeri 1 Sukabumi',
            'tahun_mulai' => '2020',
            'tahun_selesai' => '2023',
            'deskripsi' => ''
        ],
        [
            'jurusan' => 'Tentang Keislaman',
            'institusi' => 'MTS Nurul Islam Yasni',
            'tahun_mulai' => '2016',
            'tahun_selesai' => '2019',
            'deskripsi' => ''
        ],
        [
            'jurusan' => 'SDN BATUKARUT',
            'institusi' => '',
            'tahun_mulai' => '2012',
            'tahun_selesai' => '2016',
            'deskripsi' => ''
        ]
    ],
    
    
    'pengalaman' => [
        [
            'judul' => 'Panitia Masa Orientasi Teknik Informatika (MOTIF 2024)',
            'nama_perusahaan' => '',
            'jenis' => 'Organisasi',
            'tahun_mulai' => '2024',
            'tahun_selesai' => '2024',
            'deskripsi' => 'Saya pernah menjadi anggota Divisi Transportasi pada kegiatan Motif. Dalam peran ini, saya membantu mengoordinasikan dan melaksanakan pengaturan transportasi untuk panitia, Maba. Tugas saya meliputi memastikan ketersediaan kendaraan, membantu penyusunan jadwal keberangkatan dan kepulangan, serta mendukung kelancaran mobilitas selama kegiatan berlangsung.'
        ],
        [
            'judul' => 'Panitia Hari Teknik Informatika (Penanggung Jawab Acara TI CUP)',
            'nama_perusahaan' => '',
            'jenis' => 'Organisasi',
            'tahun_mulai' => '2024',
            'tahun_selesai' => '2024',
            'deskripsi' => 'Saya pernah menjadi Panitia Hari Teknik Informatika dengan peran sebagai Penanggung Jawab Acara TI CUP. Dalam peran ini, saya bertanggung jawab atas perencanaan, pelaksanaan, dan evaluasi keseluruhan kegiatan TI CUP. Saya mengoordinasikan tim panitia untuk memastikan jalannya pertandingan dan acara pendukung berjalan lancar, tertib, dan sesuai jadwal. Selain itu, saya juga berperan dalam menjalin komunikasi dengan peserta, wasit, dan pihak terkait lainnya agar seluruh rangkaian kegiatan dapat terlaksana dengan baik dan mencapai tujuan yang telah ditetapkan.'
        ],
        [
            'judul' => 'Anggota OSIS MTS NURUL ISLAM YASNI',
            'nama_perusahaan' => '',
            'jenis' => 'Organisasi',
            'tahun_mulai' => '2016',
            'tahun_selesai' => '2019',
            'deskripsi' => 'Saya pernah menjadi anggota OSIS di MTS Nurul Islam/SMP. Dalam peran ini, saya ikut berkontribusi dalam perencanaan dan pelaksanaan berbagai kegiatan sekolah, baik di bidang akademik maupun non-akademik. Saya berperan aktif dalam membantu penyelenggaraan acara seperti peringatan hari besar nasional, kegiatan lomba antar kelas, serta program sosial dan keagamaan sekolah.'
        ]
    ],
    
    
    'keahlian' => [
        [ 'nama_keahlian' => 'Pemrograman Web', 'tingkat' => 'Menengah' ],
        [ 'nama_keahlian' => 'Penggunaan XAMPP', 'tingkat' => 'Menengah' ],
        [ 'nama_keahlian' => 'HTML/CSS', 'tingkat' => 'Menengah' ],
        [ 'nama_keahlian' => 'Jaringan Komputer', 'tingkat' => 'Dasar' ],
        [ 'nama_keahlian' => 'JavaScript (Dasar)', 'tingkat' => 'Menengah' ],
        [ 'nama_keahlian' => 'Microsoft Office (Word, Excel, PowerPoint)', 'tingkat' => 'Menengah' ],
        [ 'nama_keahlian' => 'Pemahaman Database (MySQL)', 'tingkat' => 'Dasar' ],
        [ 'nama_keahlian' => 'PHP', 'tingkat' => 'Dasar' ]
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Pribadi - <?php echo $data_cv['nama_lengkap']; ?></title>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
       
        html { scroll-behavior: smooth; } 
        
        body { background-color: #1e293b; color: #e2e8f0; }
        .section-header { border-bottom: 3px solid #60a5fa; padding-bottom: 0.5rem; margin-bottom: 2rem; }
        .ui-card { transition: all 0.3s ease; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.5); }
        .deep-nav { background-color: #172554; }
        .main-heading { font-weight: 900; }
        .profile-photo { width: 300px; height: 300px; }
    </style>
</head>
<body class="font-sans">

<div class="container mx-auto p-4 md:p-8">

    <nav class="deep-nav text-white p-4 rounded-xl shadow-xl mb-12 sticky top-0 z-10 ui-card" data-aos="fade-down">
        <ul class="flex flex-wrap justify-center space-x-4 md:space-x-8 text-sm md:text-base font-medium">
            <li><a href="#home" class="hover:bg-blue-800 p-2 rounded-lg transition duration-200">🏠 Home</a></li>
            <li><a href="#pendidikan" class="hover:bg-blue-800 p-2 rounded-lg transition duration-200">🎓 Pendidikan</a></li>
            <li><a href="#pengalaman" class="hover:bg-blue-800 p-2 rounded-lg transition duration-200">💼 Pengalaman</a></li>
            <li><a href="#keahlian" class="hover:bg-blue-800 p-2 rounded-lg transition duration-200">💡 Keahlian</a></li>
        </ul>
    </nav>
    
    <section id="home" class="bg-indigo-950 p-6 md:p-10 shadow-2xl mb-12 ui-card" data-aos="fade-up" data-aos-duration="1000">
        <header class="flex flex-col md:flex-row md:justify-between items-start pb-6 border-b-2 border-indigo-900">
            
            <div class="flex flex-col md:flex-row items-start md:space-x-8 mb-6 md:mb-0"> 
                <div data-aos="zoom-in" data-aos-delay="200">
                     <img src="foto_saya.jpg" alt="Foto Profil" class="profile-photo rounded-lg object-cover border-4 border-blue-500 shadow-xl mb-4 md:mb-0">
                </div>
                
                <div data-aos="fade-right" data-aos-delay="400">
                    <h1 class="text-5xl main-heading text-white"><?php echo $data_cv['nama_lengkap']; ?></h1>
                    <p class="text-xl text-blue-400 mt-2 font-semibold"><?php echo $data_cv['posisi']; ?></p>
                </div>
            </div>
            
            <div class="mt-0 md:mt-0 text-gray-200 space-y-2 text-right" data-aos="fade-left" data-aos-delay="600">
                <p class="flex items-center justify-end">📧 <span class="ml-2 font-semibold text-white"><?php echo $data_cv['email']; ?></span></p>
                <p class="flex items-center justify-end">📞 <span class="ml-2 font-semibold text-white"><?php echo $data_cv['telepon']; ?></span></p>
                <p class="flex items-center justify-end">📍 <span class="ml-2"><?php echo $data_cv['alamat']; ?></span></p>
            </div>
        </header>
        <div class="mt-8" data-aos="fade-up" data-aos-delay="800">
            <h2 class="text-2xl font-bold section-header text-blue-400">Ringkasan Diri</h2>
            <p class="text-gray-300 leading-relaxed"><?php echo nl2br($data_cv['ringkasan_diri']); ?></p>
        </div>
    </section>

    <section id="pendidikan" class="bg-indigo-950 p-6 md:p-10 shadow-lg mb-12 ui-card" data-aos="fade-up">
        <h2 class="text-3xl font-bold section-header text-blue-400">🎓 Riwayat Pendidikan</h2>
        
        <?php if (!empty($data_cv['pendidikan'])): ?>
            <?php foreach ($data_cv['pendidikan'] as $p): ?>
                <div class="mb-6 p-5 border-l-4 border-blue-600 bg-indigo-900 rounded-lg hover:bg-indigo-800 transition duration-300" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="font-extrabold text-xl text-white"><?php echo $p['jurusan']; ?></h3>
                    <p class="text-blue-500 font-semibold mt-1"><?php echo $p['institusi']; ?></p>
                    <p class="text-sm text-gray-400 mt-1"><?php echo $p['tahun_mulai']; ?> - <?php echo $p['tahun_selesai']; ?></p>
                    <?php if (isset($p['deskripsi']) && !empty($p['deskripsi'])): ?>
                        <p class="text-gray-300 mt-3 text-sm leading-relaxed"><?php echo nl2br($p['deskripsi']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
             <p class="text-gray-500">Data riwayat pendidikan belum tersedia.</p>
        <?php endif; ?>

    </section>

    <section id="pengalaman" class="bg-indigo-950 p-6 md:p-10 shadow-lg mb-12 ui-card" data-aos="fade-up">
        <h2 class="text-3xl font-bold section-header text-blue-400">💼 Riwayat Pengalaman</h2>

        <?php if (!empty($data_cv['pengalaman'])): ?>
            <?php foreach ($data_cv['pengalaman'] as $p): ?>
                <div class="mb-6 p-5 border-l-4 border-blue-600 bg-indigo-900 rounded-lg hover:bg-indigo-800 transition duration-300" data-aos="fade-left" data-aos-delay="100">
                    <div class="flex justify-between items-start">
                        <h3 class="font-bold text-xl text-white"><?php echo $p['judul']; ?></h3> 
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-600 text-white"><?php echo $p['jenis']; ?></span> 
                    </div>
                    <?php if (isset($p['nama_perusahaan']) && !empty($p['nama_perusahaan'])): ?>
                         <p class="text-blue-500 font-semibold mt-1"><?php echo $p['nama_perusahaan']; ?></p>
                    <?php endif; ?>
                    <p class="text-sm text-gray-400 mt-1"><?php echo $p['tahun_mulai']; ?> - <?php echo $p['tahun_selesai']; ?></p>
                    <p class="text-gray-300 mt-3 text-sm leading-relaxed"><?php echo nl2br($p['deskripsi']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
             <p class="text-gray-500">Data riwayat pengalaman belum tersedia.</p>
        <?php endif; ?>

    </section>

    <section id="keahlian" class="bg-indigo-950 p-6 md:p-10 shadow-lg mb-12 ui-card" data-aos="fade-up">
        <h2 class="text-3xl font-bold section-header text-blue-400">💡 Keahlian (Skills)</h2>
        
        <?php if (!empty($data_cv['keahlian'])): ?>
            <div class="flex flex-wrap gap-4" data-aos="zoom-in" data-aos-delay="100">
                <?php foreach ($data_cv['keahlian'] as $k): ?>
                    <span class="px-5 py-2 rounded-full text-sm font-semibold tracking-wide 
                        <?php 
                            if ($k['tingkat'] == 'Mahir') echo 'bg-blue-600 text-white shadow-md'; 
                            else if ($k['tingkat'] == 'Menengah') echo 'bg-blue-400 text-gray-900 shadow-sm'; 
                            else echo 'bg-gray-600 text-white';
                        ?>
                    ">
                        <?php echo $k['nama_keahlian']; ?>
                        <span class="ml-2 px-2 py-0.5 text-xs rounded-full 
                            <?php 
                                if ($k['tingkat'] == 'Mahir') echo 'bg-blue-800 text-white'; 
                                else if ($k['tingkat'] == 'Menengah') echo 'bg-blue-600 text-white'; 
                                else echo 'bg-gray-700 text-white';
                            ?>
                        ">
                            <?php echo $k['tingkat']; ?>
                        </span>
                    </span>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
             <p class="text-gray-500">Data keahlian belum tersedia.</p>
        <?php endif; ?>
    </section>
    
    <footer class="text-center text-gray-500 p-4 border-t border-gray-700 mt-8 text-sm">
        Aplikasi CV Rifaldy - <?php echo date('Y'); ?>. Desain UI/UX
    </footer>

</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
