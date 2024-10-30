<?php
session_start();
include 'koneksi.php';
// munculkan / pilih sebuah atau semua kolom dari table user
$queryProject = mysqli_query($koneksi, "SELECT * FROM project");
// mysqli_fetch_assoc($query) = unhtuk menjadikan hasil query menjadi sebuah data (object, array)

// jika parameternya ada ?delete=nilai parameter
if (isset($_GET['delete'])) {
    $id = $_GET['delete']; // mengambil nilai parameter

    // query / perintah hapus
    $delete = mysqli_query($koneksi, "DELETE FROM project WHERE id ='$id'");
    header("location:project.php?hapus=berhasil");
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class=" mb-4 text-white" align="center">
                        <h3 class="fw-bold" style="letter-spacing: 30px;">PROJECT</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="container">

                        <!-- Outer Row -->
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card shadow-lg p-3 mb-5 bg-transparent rounded"
                                        style="backdrop-filter: blur(20px);">
                                        <div class="card-header fw-bold bg-transparent"
                                            style="font-size: x-large; backdrop-filter: blur(10px);">Data Project
                                        </div>
                                        <div class="card-body">
                                            <?php if (isset($_GET['hapus'])): ?>
                                            <div class="alert alert-outline-light text-white d-flex align-items-center"
                                                role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path
                                                        d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>
                                                <div class="ms-2">udah kehapus</div>
                                            </div>
                                            <?php endif ?>
                                            <div class="mb-3" align="right">
                                                <a href="tambah-project.php" class="btn btn-primary">Add</a>
                                            </div>
                                            <table class="table table-primary table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto Project</th>
                                                        <th>Nama Project</th>
                                                        <th>Keterangan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    while ($rowProject = mysqli_fetch_assoc($queryProject)): ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><img width="100"
                                                                src="upload/<?php echo $rowProject['foto'] ?>" alt="">
                                                        </td>
                                                        <td><?php echo $rowProject['nama_project'] ?></td>
                                                        <td><?php echo $rowProject['keterangan'] ?></td>
                                                        <td>
                                                            <a class="btn btn-success btn-sm"
                                                                href="tambah-project.php?edit=<?php echo $rowProject['id'] ?>">Edit</a>

                                                            <a class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini?')"
                                                                href="project.php?delete=<?php echo $rowProject['id'] ?>">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php endwhile ?>
                                                </tbody>
                                            </table>
                                        </div>
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