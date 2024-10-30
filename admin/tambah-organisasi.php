<?php
include 'koneksi.php';
session_start();

if (isset($_POST['simpan'])) {
    $nama_organisasi   = $_POST['nama_organisasi'];
    $tahun   = $_POST['tahun'];
    $keterangan   = $_POST['keterangan'];

    // $_POST: form input name=''
    // $_GET: url ?param='nilai'
    // $_FILES: ngambil nilai dari input type file
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        // png, jpg, jpeg
        $ext = array('png', 'jpg', 'jpeg');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        // JIKA EXTESI FOTO TIDAK ADA YANG TERDAFTAR DI ARRAY EXTENSI
        if (!in_array($extFoto, $ext)) {
            echo "Ext foto tidak ditemukan";
            die;
        } else {
            // Pindahkan gambar dari tmp folder ke folder yang telah kita buat
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $insert = mysqli_query($koneksi, "INSERT INTO organisasi (nama_organisasi, tahun, keterangan, foto) VALUES
            ('$nama_organisasi', '$tahun', '$keterangan', '$nama_foto')");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO organisasi (nama_organisasi, tahun, keterangan) VALUES
            ('$nama_organisasi', '$tahun', '$keterangan')");
    }

    header("location:organisasi.php?tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editUser = mysqli_query(
    $koneksi,
    "SELECT * FROM organisasi WHERE id = '$id'"
);
$rowEdit = mysqli_fetch_assoc($editUser);

if (isset($_POST['edit'])) {
    $nama_sekolah   = $_POST['nama_organisasi'];
    $tahun   = $_POST['tahun'];
    $keterangan   = $_POST['keterangan'];

    // jika password diisi sama user
    if ($_POST['password']) {
        $password = sha1($_POST['password']);
    } else {
        $password = $rowEdit['password'];
    }

    // ubah user kolom apa yang mau di ubah (SET), yang mau di ubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE organisasi SET nama_sekolah='$nama_sekolah',tahun='$tahun', keterangan='$keterangan' WHERE id='$id'");
    header("location:organisasi.php?ubah=berhasil");
}

// jika parameternya ada ?delete=nilai parameter
if (isset($_GET['delete'])) {
    $id = $_GET['delete']; // mengambil nilai parameter

    // query / perintah hapus
    $delete = mysqli_query($koneksi, "DELETE FROM organisasi WHERE id ='$id'");
    header("location:organisasi.php?hapus=berhasil");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'inc/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column"
            style="background-image: url('img/q.png'); background-size: cover;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'inc/navbar.php' ?>
                <!-- End of Topbar -->

                <!-- Content Row -->
                <div class="container">

                    <!-- Outer Row -->
                    <div class="container-xxl flex-grow-1 container-p-y d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card shadow p-3 mb-5 bg-transparent rounded mt-5" style="backdrop-filter: blur(20px);>
                                    <div class=" card-body">
                                    <legend class="float-none w-auto px-3 fw-bold">
                                        <?php echo isset($_GET['edit']) ? 'Edit' : 'Add' ?> Organisasi</legend>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="" class="form-label text-white">Nama</label>
                                                <input type="text" class="form-control bg-transparent text-white"
                                                    name="nama_organisasi" placeholder="Masukkan Organisasi Anda"
                                                    required
                                                    value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_organisasi'] : '' ?>">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="" class="form-label text-white">Tahun</label>
                                                <input type="text" class="form-control bg-transparent text-white"
                                                    name="tahun" placeholder="Masukkan Tahun" required
                                                    value="<?php echo isset($_GET['edit']) ? $rowEdit['tahun'] : '' ?>">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="" class="form-label text-white">Keterangan</label>
                                                <input type="text" class="form-control bg-transparent text-white"
                                                    name="keterangan" placeholder="Masukkan Keterangan" required
                                                    value="<?php echo isset($_GET['edit']) ? $rowEdit['keterangan'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary"
                                                name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>"
                                                type="submit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-transparent">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>