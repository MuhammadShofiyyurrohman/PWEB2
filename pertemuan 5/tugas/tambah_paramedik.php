<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paramedik - Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2a7fba;
            --secondary-color: #6c757d;
            --accent-color: #ff6b6b;
            --light-bg: #f8f9fa;
        }
        
        body {
            background-color: var(--light-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 30px;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
        }
        
        .form-header h2 {
            font-weight: 600;
        }
        
        .form-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent-color);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 8px;
        }
        
        .form-control, .form-select {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(42, 127, 186, 0.25);
        }
        
        .btn-submit {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .btn-submit:hover {
            background-color: #1a5276;
            transform: translateY(-2px);
        }
        
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        .btn-back:hover {
            color: #1a5276;
            text-decoration: underline;
        }
        
        .input-group-text {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2><i class="fas fa-user-plus me-2"></i>Tambah Data Paramedik</h2>
            </div>
            
            <form method="post">
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama lengkap paramedik">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required placeholder="Tempat lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Profesi</label>
                    <select class="form-select" id="kategori" name="kategori" required>
                        <option value="" selected disabled>Pilih Kategori Profesi</option>
                        <option value="dokter">Dokter</option>
                        <option value="perawat">Perawat</option>
                        <option value="bidan">Bidan</option>
                        <option value="farmasi">Apoteker/Farmasi</option>
                        <option value="gizi">Ahli Gizi</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="telpon" class="form-label">Nomor Telepon</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="tel" class="form-control" id="telpon" name="telpon" required placeholder="Nomor telepon aktif">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required placeholder="Alamat lengkap"></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="unit_kerja_id" class="form-label">Unit Kerja</label>
                    <select class="form-select" id="unit_kerja_id" name="unit_kerja_id" required>
                        <option value="" selected disabled>Pilih Unit Kerja</option>
                        <?php
                        include 'config.php';
                        $result = mysqli_query($conn, "SELECT * FROM unit_kerja");
                        while ($u = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$u['id']}'>{$u['nama']}</option>";
                        }
                        ?>
                    </select>
                </div>
                
                <button type="submit" name="simpan" class="btn btn-submit">
                    <i class="fas fa-save me-2"></i>Simpan Data
                </button>
                
                <a href="index.php" class="btn-back">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                </a>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['simpan'])) {
        include 'config.php';
        
        // Escape semua input untuk mencegah SQL injection
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $tmp = mysqli_real_escape_string($conn, $_POST['tmp_lahir']);
        $tgl = mysqli_real_escape_string($conn, $_POST['tgl_lahir']);
        $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
        $telpon = mysqli_real_escape_string($conn, $_POST['telpon']);
        $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
        $unit = mysqli_real_escape_string($conn, $_POST['unit_kerja_id']);

        $sql = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id)
                VALUES ('$nama','$gender','$tmp','$tgl','$kategori','$telpon','$alamat','$unit')";
        
        if (mysqli_query($conn, $sql)) {
            echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Sukses",
                    text: "Data paramedik berhasil ditambahkan",
                    confirmButtonColor: "#2a7fba"
                }).then(() => {
                    window.location.href = "index.php";
                });
            </script>';
        } else {
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Gagal",
                    text: "Terjadi kesalahan: ' . mysqli_error($conn) . '",
                    confirmButtonColor: "#2a7fba"
                });
            </script>';
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>