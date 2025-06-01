<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi Penyimpangan Tumbuh Kembang Anak</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
            scroll-behavior: smooth;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://i.pinimg.com/1200x/4f/73/4f/4f734ffab94a3e30383382460adc951a.jpg') center/cover;
            opacity: 0.2;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(52, 152, 219, 0.1);
            color: var(--primary-color);
        }

        .timeline {
            position: relative;
            padding-left: 3rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 1.5rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--primary-color);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -3rem;
            top: 0.5rem;
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 50%;
            background: var(--primary-color);
            border: 3px solid white;
        }

        .stats-card {
            border-left: 4px solid var(--primary-color);
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
        }

        footer {
            background-color: var(--dark-color);
            color: white;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            line-height: 50px;
            font-size: 1.2rem;
            z-index: 999;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .back-to-top:hover {
            background-color: var(--secondary-color);
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-child me-2"></i>Klasifikasi Tumbuh Kembang
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#klasifikasi">Klasifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gejala">Gejala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#penanganan">Penanganan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Deteksi Dini Penyimpangan Tumbuh Kembang Anak</h1>
                    <p class="lead mb-4">Platform edukasi untuk memahami berbagai klasifikasi penyimpangan tumbuh
                        kembang anak dan langkah penanganannya.</p>
                    <div class="d-flex gap-3">
                        <a href="#klasifikasi" class="btn btn-light btn-lg px-4">Pelajari Lebih Lanjut</a>
                        <a href="#kontak" class="btn btn-outline-light btn-lg px-4">Konsultasi Ahli</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://images.pexels.com/photos/10838444/pexels-photo-10838444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Anak Bermain" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik -->
    {{-- <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <h2 class="display-4 fw-bold text-primary">15%</h2>
                            <p class="mb-0">Anak mengalami gangguan perkembangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <h2 class="display-4 fw-bold text-primary">1 dari 6</h2>
                            <p class="mb-0">Anak memiliki keterlambatan perkembangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <h2 class="display-4 fw-bold text-primary">70%</h2>
                            <p class="mb-0">Kasus bisa dideteksi sebelum usia 2 tahun</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center">
                            <h2 class="display-4 fw-bold text-primary">90%</h2>
                            <p class="mb-0">Lebih efektif dengan intervensi dini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Klasifikasi -->
    <section id="klasifikasi" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Klasifikasi Penyimpangan Tumbuh Kembang Anak</h2>
                <p class="lead text-muted">Kenali berbagai jenis penyimpangan tumbuh kembang pada anak</p>
            </div>

            <div class="row g-4 d-flex justify-content-center">

                {{-- <div class="col-md-6 col-lg-3">
                    <div class="card h-100 card-hover">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h4 class="card-title">Gangguan Kognitif</h4>
                            <p class="card-text">Termasuk keterbelakangan mental, kesulitan belajar spesifik, dan
                                gangguan pemrosesan informasi.</p>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#kognitifModal">Detail</a>
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 card-hover">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h4 class="card-title">Gangguan Bahasa & Bicara</h4>
                            <p class="card-text">Seperti keterlambatan bicara, gangguan artikulasi, gagap, dan gangguan
                                bahasa reseptif/ekspresif.</p>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#bicaraModal">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 card-hover">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-running"></i>
                            </div>
                            <h4 class="card-title">Gangguan Motorik</h4>
                            <p class="card-text">Termasuk keterlambatan motorik kasar/halus, dispraksia, cerebral palsy,
                                dan gangguan koordinasi.</p>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#motorikModal">Detail</a>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-3">
                    <div class="card h-100 card-hover">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="card-title">Gangguan Sosial-Emosional</h4>
                            <p class="card-text">Seperti gangguan spektrum autisme, ADHD, gangguan kecemasan, dan
                                gangguan perilaku.</p>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#sosialModal">Detail</a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    <!-- Gejala dan Tanda -->
    <section id="gejala" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Gejala dan Tanda Penyimpangan</h2>
                <p class="lead text-muted">Kenali tanda-tanda yang perlu diwaspadai pada setiap tahap usia</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4 card-hover">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Tahap Usia 0-12 Bulan</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak merespon suara atau
                                    senyuman</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa mengangkat
                                    kepala saat usia 3-4 bulan</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa duduk tanpa
                                    bantuan usia 9 bulan</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak ada kontak mata
                                </li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak mengoceh atau
                                    meniru suara</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4 card-hover">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Tahap Usia 1-3 Tahun</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak berjalan usia 18
                                    bulan</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa mengatakan
                                    kata tunggal usia 16 bulan</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak menunjukkan minat
                                    pada anak lain</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Kehilangan kemampuan yang
                                    sebelumnya dikuasai</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa menumpuk 4
                                    balok usia 2 tahun</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mb-4 card-hover">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Tahap Usia 3-5 Tahun</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Kesulitan bermain dengan
                                    teman sebaya</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Ucapan tidak jelas atau
                                    sulit dipahami</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa melompat di
                                    tempat usia 4 tahun</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa menggambar
                                    lingkaran usia 3 tahun</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa menceritakan
                                    kegiatan sehari-hari</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4 card-hover">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Tahap Usia 5+ Tahun</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Kesulitan mengikuti
                                    instruksi sederhana</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa menulis nama
                                    sendiri</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Tidak bisa mengancingkan
                                    baju</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Kesulitan fokus atau
                                    duduk diam</li>
                                <li class="list-group-item"><i
                                        class="fas fa-exclamation-circle text-danger me-2"></i>Perilaku ekstrem (agresif
                                    atau penarikan diri)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proses Penanganan -->
    <section id="penanganan" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Proses Penanganan dan Intervensi</h2>
                <p class="lead text-muted">Langkah-langkah penting dalam menangani penyimpangan tumbuh kembang</p>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <h4>Deteksi Dini</h4>
                    <p>Pengamatan terhadap milestone perkembangan anak dan skrining menggunakan instrumen standar
                        seperti Kuesioner Pra Skrining Perkembangan (KPSP) atau Denver II.</p>
                </div>

                <div class="timeline-item">
                    <h4>Evaluasi Komprehensif</h4>
                    <p>Pemeriksaan oleh tim multidisiplin (dokter anak, psikolog, terapis) untuk menegakkan diagnosis
                        melalui anamnesis, observasi, dan tes standar.</p>
                </div>

                <div class="timeline-item">
                    <h4>Rencana Intervensi Individual</h4>
                    <p>Penyusunan program terapi yang disesuaikan dengan kebutuhan spesifik anak, meliputi terapi
                        wicara, okupasi, fisioterapi, atau intervensi perilaku.</p>
                </div>

                <div class="timeline-item">
                    <h4>Terapi Rutin dan Monitoring</h4>
                    <p>Pelaksanaan terapi secara konsisten dengan evaluasi berkala untuk menilai kemajuan dan
                        menyesuaikan program intervensi.</p>
                </div>

                <div class="timeline-item">
                    <h4>Dukungan Keluarga dan Sekolah</h4>
                    <p>Pelatihan orang tua dan guru untuk mendukung perkembangan anak di rumah dan lingkungan sekolah
                        melalui modifikasi lingkungan dan pendekatan khusus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Pertanyaan yang Sering Diajukan</h2>
                <p class="lead text-muted">Temukan jawaban atas pertanyaan umum seputar tumbuh kembang anak</p>
            </div>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            Apa perbedaan antara keterlambatan perkembangan dan gangguan perkembangan?
                        </button>
                    </h3>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Keterlambatan perkembangan berarti anak mencapai milestone perkembangan lebih lambat dari
                            rata-rata tetapi masih dalam rentang normal dan mungkin mengejar ketertinggalan. Gangguan
                            perkembangan mengacu pada pola perkembangan yang tidak biasa atau tidak lengkap yang
                            kemungkinan akan berlanjut tanpa intervensi khusus.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Kapan orang tua harus mulai khawatir tentang perkembangan anak?
                        </button>
                    </h3>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Orang tua harus berkonsultasi dengan profesional jika anak: 1) Tidak mencapai milestone
                            perkembangan sesuai usia, 2) Kehilangan keterampilan yang sebelumnya dikuasai, 3)
                            Menunjukkan perilaku yang sangat berbeda dari teman sebaya, atau 4) Jika ada kekhawatiran
                            dari pengasuh atau guru. Deteksi dini sangat penting untuk hasil intervensi yang optimal.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Apakah penyimpangan tumbuh kembang bisa disembuhkan?
                        </button>
                    </h3>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Hasil bervariasi tergantung jenis dan tingkat keparahan kondisi, usia diagnosis, dan
                            ketepatan intervensi. Beberapa anak dapat mengejar ketertinggalan sepenuhnya, sementara yang
                            lain mungkin memerlukan dukungan berkelanjutan. Intervensi dini secara signifikan
                            meningkatkan peluang hasil yang positif. Tujuan utama adalah memaksimalkan potensi anak dan
                            meningkatkan kualitas hidup.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            Bagaimana peran orang tua dalam menangani penyimpangan tumbuh kembang?
                        </button>
                    </h3>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Orang tua memainkan peran sentral sebagai: 1) Pengamat pertama yang mengenali tanda-tanda
                            awal, 2) Fasilitator yang konsisten menerapkan strategi intervensi di rumah, 3) Advokat yang
                            memastikan anak mendapatkan layanan yang dibutuhkan, dan 4) Sumber dukungan emosional utama.
                            Keterlibatan aktif orang tua secara signifikan meningkatkan efektivitas intervensi
                            profesional.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            Tes apa saja yang digunakan untuk mendiagnosis penyimpangan tumbuh kembang?
                        </button>
                    </h3>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Berbagai alat assessment dapat digunakan tergantung kekhawatiran spesifik, termasuk: 1) Tes
                            skrining seperti Denver II atau M-CHAT, 2) Evaluasi formal oleh psikolog (tes IQ, tes
                            perkembangan), 3) Pemeriksaan medis (neurologis, genetik), 4) Observasi perilaku, dan 5)
                            Wawancara dengan orang tua/pengasuh. Pendekatan multidisiplin seringkali diperlukan untuk
                            diagnosis yang komprehensif.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Konsultasi -->
    {{-- <section id="kontak" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Konsultasi dengan Ahli Kami</h2>
                    <p class="lead">Tim profesional kami siap membantu Anda memahami lebih jauh tentang tumbuh kembang
                        anak dan memberikan rekomendasi yang tepat.</p>

                    <div class="mt-5">
                        <div class="d-flex align-items-start mb-4">
                            <i class="fas fa-phone-alt text-primary me-3 mt-1"></i>
                            <div>
                                <h5 class="mb-1">Telepon</h5>
                                <p class="mb-0">(021) 1234-5678</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                            <div>
                                <h5 class="mb-1">Email</h5>
                                <p class="mb-0">info@tumbuhkembanganku.id</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                            <div>
                                <h5 class="mb-1">Lokasi</h5>
                                <p class="mb-0">Jl. Kesehatan Anak No. 123, Jakarta Pusat</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4">Formulir Konsultasi</h4>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>

                                <div class="mb-3">
                                    <label for="childAge" class="form-label">Usia Anak</label>
                                    <input type="text" class="form-control" id="childAge">
                                </div>

                                <div class="mb-3">
                                    <label for="concern" class="form-label">Kekhawatiran Utama</label>
                                    <select class="form-select" id="concern">
                                        <option selected>Pilih kategori...</option>
                                        <option>Keterlambatan bicara</option>
                                        <option>Keterlambatan motorik</option>
                                        <option>Gangguan sosial/interaksi</option>
                                        <option>Kesulitan belajar</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Deskripsi Lengkap</label>
                                    <textarea class="form-control" id="message" rows="4"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Kirim Permohonan Konsultasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4">Tentang Kami</h5>
                    <p>Platform edukasi dan konsultasi tumbuh kembang anak yang dikelola oleh tim profesional
                        multidisiplin untuk mendukung orang tua dan pengasuh.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white">Beranda</a></li>
                        <li class="mb-2"><a href="#klasifikasi" class="text-white">Klasifikasi</a></li>
                        <li class="mb-2"><a href="#gejala" class="text-white">Gejala</a></li>
                        <li class="mb-2"><a href="#penanganan" class="text-white">Penanganan</a></li>
                        <li class="mb-2"><a href="#faq" class="text-white">FAQ</a></li>
                        <li><a href="#kontak" class="text-white">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Layanan Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white">Skrining Perkembangan</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Konsultasi Psikolog</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Terapi Wicara</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Terapi Okupasi</a></li>
                        <li><a href="#" class="text-white">Pelatihan Orang Tua</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase mb-4">Newsletter</h5>
                    <p>Daftar untuk mendapatkan informasi terbaru seputar tumbuh kembang anak.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Alamat Email">
                        <button class="btn btn-primary" type="button">Daftar</button>
                    </div>
                </div>
            </div>

            <hr class="my-4 bg-light">

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Klasifikasi Tumbuh Kembang Anak. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></a>

    <!-- Modal -->
    <div class="modal fade" id="kognitifModal" tabindex="-1" aria-labelledby="kognitifModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kognitifModalLabel">Gangguan Kognitif</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Definisi:</h5>
                    <p>Gangguan kognitif mengacu pada kesulitan dalam proses berpikir, belajar, memori, pemecahan
                        masalah, atau pengambilan keputusan yang secara signifikan mempengaruhi fungsi sehari-hari.</p>

                    <h5 class="mt-4">Klasifikasi:</h5>
                    <ul>
                        <li><strong>Keterbelakangan Mental:</strong> Fungsi intelektual secara signifikan di bawah
                            rata-rata (IQ <70) dengan defisit dalam perilaku adaptif</li>
                        <li><strong>Kesulitan Belajar Spesifik:</strong> Disleksia (membaca), disgrafia (menulis),
                            diskalkulia (matematika)</li>
                        <li><strong>Gangguan Pemrosesan Informasi:</strong> Kesulitan memproses informasi visual atau
                            auditori</li>
                    </ul>

                    <h5 class="mt-4">Tanda-tanda:</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Kesulitan memahami konsep abstrak</li>
                                <li>Lambat dalam mempelajari keterampilan baru</li>
                                <li>Masalah memori jangka pendek</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Kesulitan mengikuti instruksi multi-langkah</li>
                                <li>Masalah organisasi dan perencanaan</li>
                                <li>Keterampilan pemecahan masalah yang terbatas</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Pelajari Lebih Lanjut</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal lainnya (bicaraModal, motorikModal, sosialModal) bisa ditambahkan dengan struktur serupa -->
    <!-- Modal Gangguan Bahasa & Bicara -->
    <div class="modal fade" id="bicaraModal" tabindex="-1" aria-labelledby="bicaraModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bicaraModalLabel">Gangguan Bahasa & Bicara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Definisi:</h5>
                            <p>Gangguan dalam pemahaman atau penggunaan bahasa lisan, tulisan, atau sistem simbol lainnya
                                yang mempengaruhi produksi atau pemahaman bahasa.</p>
    
                            <h5 class="mt-4">Klasifikasi:</h5>
                            <ul>
                                <li><strong>Keterlambatan Bicara:</strong> Perkembangan bahasa lebih lambat dari teman
                                    sebaya</li>
                                <li><strong>Gangguan Artikulasi:</strong> Kesulitan menghasilkan suara tertentu</li>
                                <li><strong>Gagap:</strong> Gangguan kelancaran bicara</li>
                                <li><strong>Gangguan Bahasa Reseptif/Ekspresif:</strong> Kesulitan memahami atau
                                    mengekspresikan bahasa</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Tanda-tanda:</h5>
                            <ul>
                                <li>Tidak mengoceh di usia 12 bulan</li>
                                <li>Tidak mengatakan kata tunggal di usia 16 bulan</li>
                                <li>Tidak menggabungkan 2 kata di usia 2 tahun</li>
                                <li>Ucapan sulit dipahami oleh orang asing di usia 3 tahun</li>
                                <li>Kesulitan mengikuti instruksi sederhana</li>
                                <li>Kurangnya variasi dalam kosakata</li>
                            </ul>
    
                            <h5 class="mt-4">Intervensi:</h5>
                            <ul>
                                <li>Terapi wicara dengan patolog bahasa</li>
                                <li>Stimulasi bahasa di rumah</li>
                                <li>Penggunaan alat bantu visual</li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="alert alert-info mt-4">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Fakta Penting:</strong> Sekitar 5-10% anak prasekolah mengalami gangguan bahasa/bicara.
                        Intervensi dini sebelum usia 3 tahun memberikan hasil terbaik.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Download Panduan Stimulasi</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Gangguan Motorik -->
    <div class="modal fade" id="motorikModal" tabindex="-1" aria-labelledby="motorikModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="motorikModalLabel">Gangguan Motorik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Definisi:</h5>
                            <p>Gangguan yang mempengaruhi kemampuan untuk melakukan gerakan tubuh secara terkoordinasi dan
                                terampil, baik motorik kasar maupun halus.</p>
    
                            <h5 class="mt-4">Klasifikasi:</h5>
                            <ul>
                                <li><strong>Cerebral Palsy:</strong> Gangguan gerakan dan postur akibat kerusakan otak</li>
                                <li><strong>Gangguan Koordinasi Perkembangan (DCD):</strong> Kesulitan koordinasi tanpa
                                    defisit neurologis jelas</li>
                                <li><strong>Dispraksia:</strong> Kesulitan perencanaan dan eksekusi gerakan</li>
                                <li><strong>Hipotonia:</strong> Tonus otot rendah</li>
                            </ul>
    
                            <h5 class="mt-4">Tanda Motorik Kasar:</h5>
                            <ul>
                                <li>Tidak bisa duduk tanpa bantuan usia 9 bulan</li>
                                <li>Tidak merangkak usia 12 bulan</li>
                                <li>Tidak berjalan usia 18 bulan</li>
                                <li>Sering jatuh/tersandung</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Tanda Motorik Halus:</h5>
                            <ul>
                                <li>Kesulitan memegang crayon/pensil</li>
                                <li>Tidak bisa menumpuk 4 balok usia 2 tahun</li>
                                <li>Kesulitan mengancing baju</li>
                                <li>Gerakan canggung/tidak terkoordinasi</li>
                            </ul>
    
                            <h5 class="mt-4">Intervensi:</h5>
                            <ul>
                                <li>Fisioterapi untuk motorik kasar</li>
                                <li>Terapi okupasi untuk motorik halus</li>
                                <li>Adaptasi alat bantu dan lingkungan</li>
                                <li>Program olahraga khusus</li>
                            </ul>
    
                            <div class="alert alert-warning mt-3">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Perhatian:</strong> Gangguan motorik seringkali berhubungan dengan kondisi
                                neurologis yang memerlukan evaluasi medis menyeluruh.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Lihat Video Terapi</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Gangguan Sosial-Emosional -->
    <div class="modal fade" id="sosialModal" tabindex="-1" aria-labelledby="sosialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sosialModalLabel">Gangguan Sosial-Emosional</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Definisi:</h5>
                            <p>Gangguan yang mempengaruhi kemampuan anak untuk berinteraksi dengan orang lain, mengatur
                                emosi, dan berperilaku sesuai norma sosial.</p>
    
                            <h5 class="mt-4">Klasifikasi:</h5>
                            <ul>
                                <li><strong>Gangguan Spektrum Autisme (GSA):</strong> Kesulitan interaksi sosial dan
                                    perilaku repetitif</li>
                                <li><strong>ADHD:</strong> Gangguan pemusatan perhatian dan hiperaktivitas</li>
                                <li><strong>Gangguan Kecemasan:</strong> Ketakutan berlebihan yang mengganggu fungsi</li>
                                <li><strong>Gangguan Perilaku:</strong> Pola perilaku mengganggu dan agresif</li>
                            </ul>
    
                            <h5 class="mt-4">Tanda Sosial:</h5>
                            <ul>
                                <li>Kurang kontak mata</li>
                                <li>Tidak tertarik bermain dengan teman</li>
                                <li>Kesulitan memahami emosi orang lain</li>
                                <li>Perilaku tidak sesuai konteks sosial</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Tanda Emosional:</h5>
                            <ul>
                                <li>Tantrum berlebihan</li>
                                <li>Kesulitan transisi/perubahan rutinitas</li>
                                <li>Perilaku repetitif/stereotipik</li>
                                <li>Hiperaktif/impulsif yang mengganggu</li>
                            </ul>
    
                            <h5 class="mt-4">Intervensi:</h5>
                            <ul>
                                <li>Terapi perilaku (ABA, CBT)</li>
                                <li>Pelatihan keterampilan sosial</li>
                                <li>Intervensi berbasis keluarga</li>
                                <li>Dukungan di lingkungan sekolah</li>
                                <li>Obat (untuk kasus tertentu)</li>
                            </ul>
    
                            <div class="alert alert-success mt-3">
                                <i class="fas fa-lightbulb me-2"></i>
                                <strong>Tips:</strong> Anak dengan gangguan sosial-emosional merespon baik dengan struktur
                                rutin yang jelas, instruksi visual, dan penguatan positif.
                            </div>
                        </div>
                    </div>
    
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h6 class="mb-0">Skrining Awal untuk Gangguan Sosial-Emosional</h6>
                        </div>
                        <div class="card-body">
                            <p>Orang tua dapat menggunakan checklist M-CHAT-R (Modified Checklist for Autism in Toddlers,
                                Revised) untuk skrining awal autisme pada anak usia 16-30 bulan:</p>
                            <ol>
                                <li>Apakah anak menunjuk untuk menunjukkan ketertarikan?</li>
                                <li>Apakah anak menikmati permainan sosial seperti cilukba?</li>
                                <li>Apakah anak meniru Anda (misalnya mengangkat tangan jika Anda melakukannya)?</li>
                            </ol>
                            <p class="mb-0"><small>Jika jawaban "Tidak" untuk beberapa pertanyaan, konsultasikan dengan
                                    profesional.</small></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Download Checklist M-CHAT</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Deteksi Dini -->
    <div class="modal fade" id="deteksiModal" tabindex="-1" aria-labelledby="deteksiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="deteksiModalLabel"><i class="fas fa-clipboard-check me-2"></i>Checklist
                        Deteksi Dini</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Panduan Orang Tua untuk Memantau Perkembangan Anak</h6>
                    <p>Centang milestone yang sudah dicapai anak Anda:</p>
    
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="milestone1">
                        <label class="form-check-label" for="milestone1">Tersenyum sosial (2-3 bulan)</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="milestone2">
                        <label class="form-check-label" for="milestone2">Berguling (4-6 bulan)</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="milestone3">
                        <label class="form-check-label" for="milestone3">Duduk tanpa bantuan (6-8 bulan)</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="milestone4">
                        <label class="form-check-label" for="milestone4">Mengucapkan "mama/papa" spesifik (9-12
                            bulan)</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="milestone5">
                        <label class="form-check-label" for="milestone5">Berjalan sendiri (12-15 bulan)</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="milestone6">
                        <label class="form-check-label" for="milestone6">Menggabungkan 2 kata (18-24 bulan)</label>
                    </div>
    
                    <div class="alert alert-warning mt-3">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        Jika anak Anda belum mencapai beberapa milestone sesuai rentang usia, pertimbangkan untuk
                        berkonsultasi dengan profesional.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Simpan Checklist</button>
                    <button type="button" class="btn btn-primary">Cetak Hasil</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Back to top button
        window.addEventListener('scroll', function () {
            var backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });

        document.getElementById('backToTop').addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Active nav link on scroll
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        window.addEventListener('scroll', function () {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (pageYOffset >= sectionTop - 300) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>