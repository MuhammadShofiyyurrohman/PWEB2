<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paramedik - Puskesmas Profesional</title>
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
        
        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        
        h2 {
            color: var(--primary);
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }
        
        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }
        
        input[type="text"],
        input[type="date"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(42, 127, 186, 0.2);
        }
        
        .btn-submit {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            width: 100%;
            margin-top: 30px;
        }
        
        .btn-submit:hover {
            background-color: #1a5276;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            color: #1a5276;
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Paramedik</h2>
        
        <form method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
                </div>
                
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select id="gender" name="gender" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" id="tmp_lahir" name="tmp_lahir" required placeholder="Masukkan tempat lahir">
                </div>
                
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="kategori">Kategori Profesi</label>
                <select id="kategori" name="kategori" required>
                    <option value="">Pilih Profesi</option>
                    <option value="dokter">Dokter</option>
                    <option value="perawat">Perawat</option>
                    <option value="bidan">Bidan</option>
                    <option value="farmasi">Apoteker/Farmasi</option>
                    <option value="gizi">Ahli Gizi</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="tlpon">Nomor Telepon</label>
                <input type="tel" id="tlpon" name="tlpon" required placeholder="Masukkan nomor telepon">
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea id="alamat" name="alamat" rows="3" required placeholder="Masukkan alamat lengkap"></textarea>
            </div>
            
            <div class="form-group">
                <label for="unit_kerja_id">Unit Kerja</label>
                <select id="unit_kerja_id" name="unit_kerja_id" required>
                    <option value="">Pilih Unit Kerja</option>
                    <?php
                    include 'config.php';
                    $result = mysqli_query($conn, "SELECT * FROM unit_kerja");
                    while ($u = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$u['id']}'>{$u['nama']}</option>";
                    }
                    ?>
                </select>
            </div>
            
            <button type="submit" name="simpan" class="btn-submit">Simpan Data</button>
        </form>
        
        <a href="index.php" class="back-link">← Kembali ke Daftar Paramedik</a>
    </div>

    <?php
    if (isset($_POST['simpan'])) {
        include 'config.php';
        
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $tmp = mysqli_real_escape_string($conn, $_POST['tmp_lahir']);
        $tgl = mysqli_real_escape_string($conn, $_POST['tgl_lahir']);
        $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
        $tlpon = mysqli_real_escape_string($conn, $_POST['tlpon']);
        $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
        $unit = mysqli_real_escape_string($conn, $_POST['unit_kerja_id']);

        $sql = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, tlpon, alamat, unit_kerja_id)
                VALUES ('$nama','$gender','$tmp','$tgl','$kategori','$tlpon','$alamat','$unit')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data paramedik berhasil ditambahkan'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
    ?>
</body>
</html>