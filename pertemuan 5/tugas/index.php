<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Rahman - Layanan Kesehatan Terbaik</title>
    <style>
        :root {
            --primary: #2a7fba;
            --secondary: #f8f9fa;
            --accent: #ff6b6b;
            --dark: #343a40;
            --light: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), #1a5276);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 15px;
        }
        
        .logo-text h1 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }
        
        .logo-text p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 20px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        nav ul li a:hover {
            color: var(--accent);
        }
        
        .hero {
            background: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            height: 500px;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 600px;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }
        
        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #ff5252;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid white;
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }
        
        section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent);
        }
        
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-img {
            height: 200px;
            overflow: hidden;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-img img {
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 20px;
        }
        
        .service-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary);
        }
        
        .team-section {
            background: var(--secondary);
        }
        
        /* Tabel Paramedik yang Dipercantik */
        .paramedik-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .paramedik-table thead tr {
            background-color: var(--primary);
            color: white;
            text-align: left;
        }
        
        .paramedik-table th,
        .paramedik-table td {
            padding: 15px;
        }
        
        .paramedik-table tbody tr {
            border-bottom: 1px solid #dddddd;
            background-color: white;
            transition: all 0.3s ease;
        }
        
        .paramedik-table tbody tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }
        
        .paramedik-table tbody tr:last-of-type {
            border-bottom: 2px solid var(--primary);
        }
        
        .paramedik-table tbody tr:hover {
            background-color: #f1f1f1;
            transform: scale(1.01);
        }
        
        .action-btn {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
            margin-right: 5px;
            transition: all 0.3s ease;
        }
        
        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }
        
        .edit-btn:hover {
            background-color: #3e8e41;
        }
        
        .delete-btn {
            background-color: #f44336;
            color: white;
        }
        
        .delete-btn:hover {
            background-color: #d32f2f;
        }
        
        .add-btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .add-btn:hover {
            background-color: #1a5276;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        
        footer {
            background: var(--dark);
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--accent);
        }
        
        .footer-column p, .footer-column a {
            margin-bottom: 10px;
            display: block;
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-column a:hover {
            color: var(--accent);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #adb5bd;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 20px;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0 10px;
            }
            
            .hero {
                height: 400px;
                text-align: center;
            }
            
            .hero-content {
                max-width: 100%;
                padding: 0 20px;
            }
            
            .btn-outline {
                margin-left: 0;
                margin-top: 15px;
                display: block;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                
                    <div class="logo-text">
                        <h1>Puskesmas Rahman</h1>
                        <p>Layanan Kesehatan Terbaik untuk Masyarakat</p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#team">Tim Medis</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h2>Pelayanan Kesehatan Berkualitas</h2>
                <p>Puskesmas Profesional memberikan layanan kesehatan terpadu dengan tenaga medis berpengalaman dan fasilitas modern untuk kesehatan optimal masyarakat.</p>
                <a href="#services" class="btn">Lihat Layanan</a>
                <a href="#contact" class="btn btn-outline">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kami</h2>
            </div>
            <div class="services">
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Pelayanan Umum">
                    </div>
                    <div class="service-content">
                        <h3>Pelayanan Umum</h3>
                        <p>Pemeriksaan kesehatan umum, pengobatan penyakit ringan, dan konsultasi kesehatan dengan dokter umum.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="KIA">
                    </div>
                    <div class="service-content">
                        <h3>Kesehatan Ibu dan Anak</h3>
                        <p>Pelayanan kesehatan khusus untuk ibu hamil, ibu menyusui, bayi, dan balita termasuk imunisasi.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1579684453423-f84349ef60b0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gigi">
                    </div>
                    <div class="service-content">
                        <h3>Pelayanan Gigi</h3>
                        <p>Pemeriksaan kesehatan gigi dan mulut, perawatan gigi, serta edukasi kesehatan gigi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section" id="team">
        <div class="container">
            <div class="section-title">
                <h2>Tim Paramedik Kami</h2>
            </div>
            
            <a href="tambah_paramedik.php" class="add-btn">+ Tambah Paramedik</a>
            
            <table class="paramedik-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Kategori</th>
                        <th>Unit Kerja</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';
                    $sql = "SELECT p.*, u.nama AS unit FROM paramedik p
                            LEFT JOIN unit_kerja u ON p.unit_kerja_id = u.id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$row['nama']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['kategori']}</td>
                            <td>{$row['unit']}</td>
                            <td>
                                <a href='edit_paramedik.php?id={$row['id']}' class='action-btn edit-btn'>Edit</a>
                                <a href='hapus_paramedik.php?id={$row['id']}' class='action-btn delete-btn'>Hapus</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Kami</h2>
            </div>
            <div class="contact-content">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                    <div>
                        <h3 style="margin-bottom: 20px; color: var(--primary);">Informasi Kontak</h3>
                        <p style="margin-bottom: 15px;"><strong>Alamat:</strong> Jl. Kesehatan No. 123, Kota Sehat</p>
                        <p style="margin-bottom: 15px;"><strong>Telepon:</strong> (021) 1234567</p>
                        <p style="margin-bottom: 15px;"><strong>Email:</strong> info@puskesmasprofesional.id</p>
                        <p style="margin-bottom: 15px;"><strong>Jam Operasional:</strong> Senin-Jumat: 08.00-16.00, Sabtu: 08.00-14.00</p>
                    </div>
                    <div>
                        <h3 style="margin-bottom: 20px; color: var(--primary);">Lokasi Kami</h3>
                        <div style="height: 250px; background: #ddd; border-radius: 10px; overflow: hidden;">
                            <!-- Ganti dengan embed Google Maps -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e839560ef85!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1623394257721!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Tentang Kami</h3>
                    <p>Puskesmas Profesional adalah fasilitas kesehatan primer yang memberikan pelayanan kesehatan menyeluruh kepada masyarakat.</p>
                </div>
                <div class="footer-column">
                    <h3>Layanan Cepat</h3>
                    <a href="#services">Pelayanan Umum</a>
                    <a href="#services">Kesehatan Ibu dan Anak</a>
                    <a href="#services">Pelayanan Gigi</a>
                    <a href="#services">Laboratorium</a>
                </div>
                <div class="footer-column">
                    <h3>Informasi</h3>
                    <a href="#">Artikel Kesehatan</a>
                    <a href="#">Jadwal Dokter</a>
                    <a href="#">FAQ</a>
                    <a href="#">Kebijakan Privasi</a>
                </div>
                <div class="footer-column">
                    <h3>Media Sosial</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <p style="margin-top: 20px;">Ikuti kami di media sosial untuk informasi terbaru.</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Puskesmas Profesional. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Font Awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>