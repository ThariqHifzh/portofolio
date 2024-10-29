<?php
include 'koneksi.php';
session_start();

// jika button simpan di tekan
$queryPengaturan = mysqli_query($koneksi, "SELECT * FROM porto_setting ORDER BY id DESC");
$rowPengaturan = mysqli_fetch_assoc($queryPengaturan);
if (isset($_POST['simpan'])) {
    $nama_website   = $_POST['nama_website'];
    $link_website   = $_POST['link_website'];
    $id             = $_POST['id'];
    $telpon_website   = $_POST['telpon_website'];
    $email_website   = $_POST['email_website'];
    $alamat_website   = $_POST['alamat_website'];


// mencari data di dalam table pengaturan, jika ada data akan di update, 
// jika tidak ada akan di insert

if(mysqli_num_rows($queryPengaturan) > 0) {
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
            // unlink() : mendelete file
            unlink('upload/'.$rowPengaturan['logo']);
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $update = mysqli_query($koneksi, "UPDATE porto_setting SET nama_website='$nama_website', link_website='$link_website', telpon_website='$telpon_website', email_website='$email_website', alamat_website='$alamat_website', logo='$nama_foto' WHERE id='$id'");
        }
    } else {
        $update = mysqli_query($koneksi, "UPDATE porto_setting SET nama_website='$nama_website', link_website='$link_website', telpon_website='$telpon_website', email_website='$email_website', alamat_website='$alamat_website' WHERE id='$id'");
    }
} else {
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

            $insert = mysqli_query($koneksi, "INSERT INTO porto_setting (nama_website, link_website, telpon_website, email_website, alamat_website, logo) VALUES
            ('$nama_website', '$link_website', '$telpon_website', '$email_website', '$alamat_website', '$nama_foto')");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO porto_setting (nama_website, link_website, telpon_website, email_website, alamat_website) VALUES
            ('$nama_website', '$link_website', '$telpon_website', '$email_website', '$alamat_website')");
    }
}
    
    // $_POST: form input name=''
    // $_GET: url ?param='nilai'
    // $_FILES: ngambil nilai dari input type file
    

    header("location:website-setting.php");
}


$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editUser = mysqli_query(
    $koneksi,
    "SELECT * FROM user WHERE id = '$id'"
);
$rowEdit = mysqli_fetch_assoc($editUser);

if (isset($_POST['edit'])) {
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];

    // jika password diisi sama user
    if ($_POST['password']) {
        $password = sha1($_POST['password']);
    } else {
        $password = $rowEdit['password'];
    }

    // ubah user kolom apa yang mau di ubah (SET), yang mau di ubah id ke berapa
    $update = mysqli_query($koneksi, "UPDATE user SET nama='$nama',email='$email' ,password='$password' WHERE id='$id'");
    header("location:user.php?ubah=berhasil");
}

// jika parameternya ada ?delete=nilai parameter
if (isset($_GET['delete'])) {
    $id = $_GET['delete']; // mengambil nilai parameter

    // query / perintah hapus
    $delete = mysqli_query($koneksi, "DELETE FROM user WHERE id ='$id'");
    header("location:user.php?hapus=berhasil");
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

    <title>SB Admin </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include 'inc/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-image: url('img/q.png'); background-size: cover;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'inc/navbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" >

                    <!-- Page Heading -->
                    <div class=" mb-4 text-white" align="center">
                        <h3 class="fw-bold" style="letter-spacing: 40px;">SETTINGS</h1>
                    </div>

                    <!-- Content Row -->
                   <div class="container">

             <!-- Outer Row -->
                <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card shadow-lg p-3 mb-5 bg-transparent rounded" style="backdrop-filter: blur(10px);">
                                    <h3 class="card-header fw-bold bg-transparent">Website Setting</h3>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo isset($rowPengaturan['id']) ? $rowPengaturan['id'] : '' ?>">
                                            <div class="mb-3 row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label text-white">Nama Website</label>
                                                        <input type="text" class="form-control bg-transparent text-white" name="nama_website" placeholder="Masukkan Nama Website" required value="<?php echo isset($rowPengaturan['nama_website']) ? $rowPengaturan['nama_website'] : '' ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label text-white">Telepon</label>
                                                        <input type="number" class="form-control bg-transparent text-white" name="telpon_website" placeholder="Masukkan No. Telp Website" required value="<?php echo isset($rowPengaturan['telpon_website']) ? $rowPengaturan['telpon_website'] : '' ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label text-white">Link Website</label>
                                                        <input type="url" class="form-control bg-transparent text-white" name="link_website" placeholder="Masukkan Link Website Anda" required value="<?php echo isset($rowPengaturan['link_website']) ? $rowPengaturan['link_website'] : '' ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label text-white">Email Website</label>
                                                        <input type="email" class="form-control bg-transparent text-white" name="email_website" placeholder="Masukkan Email Website Anda" required value="<?php echo isset($rowPengaturan['email_website']) ? $rowPengaturan['email_website'] : '' ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-sm-12">
                                                    <label for="" class="form-label text-white">Website Address</label>
                                                    <input type="text" class="form-control bg-transparent text-white" name="alamat_website" placeholder="Masukkan Alamat Website" id="" value="<?php echo isset($rowPengaturan['alamat_website']) ? $rowPengaturan['alamat_website'] : '' ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-sm-3">
                                                    <label for="" class="form-label text-white">Foto</label>
                                                    <input type="file" name="foto" class="form-control bg-transparent">
                                                    <img width="150" src="upload/<?php echo isset($rowPengaturan['logo']) ? $rowPengaturan['logo'] : '' ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-transparent">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Thariq Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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