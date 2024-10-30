<?php 
include 'admin/koneksi.php';
session_start();

$queryPorto1 = mysqli_query($koneksi, "SELECT * FROM pendidikan ORDER BY id DESC");
$rowPorto1 = mysqli_fetch_assoc($queryPorto1);
$queryPorto2 = mysqli_query($koneksi, "SELECT * FROM organisasi ORDER BY id DESC");
$rowPorto2 = mysqli_fetch_assoc($queryPorto2);
$queryPorto3 = mysqli_query($koneksi, "SELECT * FROM pengalaman ORDER BY id DESC");
$rowPorto3 = mysqli_fetch_assoc($queryPorto3);
$queryPorto4 = mysqli_query($koneksi, "SELECT * FROM project ORDER BY id DESC");


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>



    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">

</head>

<body>
    <section class="hero-section" id="section_1">
        <div class="container-fluid p-0"
            style="background-image: url('image/ke6.png'); background-size: cover; min-height: 100vh;">
            <div class="section-overlay"></div>

            <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
                <?php include 'include/nav.php'; ?>

                <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-8 text-center text-lg-start"
                    style="margin-top: 100px;">
                    <div class="content">
                        <h3 class="text-white mb-3" style="letter-spacing: 3px;">
                            Ahmad Tariq Hifzhillah
                        </h3>
                        <h1 class="fw-bold mt-2 display-1"
                            style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                            Hi There!
                        </h1>
                        <h2 class="fw-bold mt-2 display-4"
                            style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                            I am a Web Developer
                        </h2>
                        <p class="text-white mb-3 col-md-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde totam vel?
                            Aspernatur nihil dolores obcaecati! Fuga, quaerat dolore?
                        </p>
                        <button type="submit" class="btn btn-outline-light mt-4"
                            style="border-radius: 20px; border-radius: 30px; box-shadow: 0 0 20px 2px blueviolet; font-size:medium; letter-spacing: 4px;">DUARRR</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="hero-section" id="section_2">
        <div style=" background-image: url('image/ke7.png'); background-size: cover; ">
            <div class=" section-overlay">
            </div>

            <div class="d-flex">
                <div class="row">

                    <div class="col-5" style="margin-top: 200px; margin-left: 90px;">
                        <div data-aos="fade-right" data-aos-duration="2000" class="content">
                            <h1 class="card-title fw-bold"
                                style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;""> About Me</h1>
                            <p class=" text-white" style="margin-bottom: 10px;">_______________</p>
                                <div class="card bg-transparent"
                                    style="width: auto; border: 1px solid white; backdrop-filter: blur(2px); border-radius: 20px; box-shadow: 0 0 15px 1px blueviolet; margin-top: 90px;">
                                    <div class="card-body text-white">

                                        <p class="card-text">My name is Ahmad Tariq Hifzhillah, I'm a web developer and
                                            designer Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit
                                            perspiciatis sequi possimus totam voluptatibus reiciendis ipsum explicabo
                                            doloribus ex rerum iusto voluptates iste recusandae perferendis incidunt,
                                            vel,
                                            molestias, sit nam.</p>
                                        <p>_______________________</p>
                                        <div class="row">
                                            <div class="col-sm-11 d-flex justify-content-between">
                                                <ul class=""
                                                    style="list-style-type: none; padding: 0; letter-spacing: 2px; font-size: small;">
                                                    <li class="fw-bold">NAME</li>
                                                    <p>AHMAD TARIQ HIFZHILLAH</p>
                                                    <li class="fw-bold mt-2 mb-2">PHONE</li>
                                                    <p>087384617842</p>
                                                    <li class="fw-bold">AGE</li>
                                                    <p> 18 Y.O</p>
                                                </ul>
                                                <ul
                                                    style="list-style-type: none; padding-right: 20px; letter-spacing: 2px; font-size:small">
                                                    <li class="fw-bold">ADDRESS</li>
                                                    <p>SOUTH JAKARTA</p>
                                                    <li class="fw-bold mt-2 mb-2">EMAIL</li>
                                                    <p>THORIQHIFZH@GMAIL.COM</p>
                                                    <li class="fw-bold">FREELANCE</li>
                                                    <p>AVAILABLE</p>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </div>

                    </div>
                    <div class="col-5">
                        <div data-aos="fade-up-left" data-aos-duration="2000" class="content"
                            style="margin-top: 290px; margin-left: 400px; ">
                            <img src="image/123.jfif" alt=""
                                style="border-radius: 50%; border: 1px solid white; width: 300px; height: 300px; box-shadow: 0 0 15px 3px blueviolet;">
                        </div>

                    </div>
                    <div align="center" class="content" style="margin-top: 120px; ">
                        <img src="image/pslogo.png" alt="" style="width: 50px; height: 50px;">
                        <img class="me-5 ms-5" src="image/ailogo.png" alt="" style="width: 50px; height: 50px;">
                        <img class="me-5" src="image/pr.png" alt="" style="width: 50px; height: 50px;">
                        <img src="image/figma.png" alt="" style="width: 50px; height: 50px;">
                        <img class="me-5 ms-5" src="image/html.png" alt="" style="width: 50px; height: 50px;">
                        <img class="me-5" src="image/css.png" alt="" style="width: 35px; height: 40px;">
                        <img src="image/bootstrap.png" alt="" style="width: 50px; height: 40px;">
                    </div>

                </div>
    </section>

    <section class="hero-section" id="section_3">
        <div style=" background-image: url('image/mnb2.png'); background-size: cover; ">
            <div class=" section-overlay">
            </div>

            <div class="d-flex justify-content-center">
                <div class="col-8" style="margin-top: 50px;">
                    <div class="card bg-transparent"
                        style="width: 100%; height: auto; border: 1px solid white; backdrop-filter: blur(6px); border-radius: 20px; box-shadow: 0 0 15px 1px blueviolet;">
                        <div class="card-body text-white">
                            <div class="content text-center" data-aos="fade-right" data-aos-duration="2000">
                                <h1 class="card-title fw-bold"
                                    style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                                    Resume
                                </h1>
                                <p class="text-white mb-4">_______________</p>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <!-- Bagian Summary -->
                                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                        <h2 class="resume-title fw-bold"
                                            style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                                            Pendidikan</h2>
                                        <div class="resume-item pb-3">
                                            <h4><?php echo $rowPorto1['nama_sekolah'] ?></h4>
                                            <h5><?php echo $rowPorto1['tahun'] ?></h5>
                                            <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus in
                                                    quaerat optio temporibus officia nihil esse quibusdam et, dolor,
                                                    labore architecto at.</em></p>
                                            <ul>
                                                <li>Qwert Rtyuio Sdfghjk</li>
                                                <li>Anhmjk Gcvbnhmj Tdfgbhn</li>
                                                <li>thoriqhifzh@gmail.com</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Bagian Education -->
                                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                        <h2 class="resume-title fw-bold"
                                            style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                                            Organisasi</h2>
                                        <div class="resume-item pb-3">
                                            <h4><?php echo $rowPorto2['nama_organisasi'] ?></h4>
                                            <h5><?php echo $rowPorto2['tahun'] ?></h5>
                                            <p><em><?php echo $rowPorto2['keterangan'] ?></em></p>
                                            <ul>
                                                <li>Visual Design Event Organizer</li>
                                                <li>Secretary of OSPA</li>
                                                <li>School Financial Assistant</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Bagian Professional Experience -->
                                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                        <h3 class="resume-title fw-bold"
                                            style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                                            Professional Experience</h3>
                                        <div class="resume-item pb-3">
                                            <h4><?php echo $rowPorto3['perusahaan'] ?></h4>
                                            <h5><?php echo $rowPorto3['tahun'] ?></h5>
                                            <p><em><?php echo $rowPorto3['keterangan'] ?></em></p>
                                            <ul>
                                                <li>Visual Design Event Organizer</li>
                                                <li>Secretary of OSPA</li>
                                                <li>School Financial Assistant</li>
                                            </ul>
                                        </div>
                                        <div class="resume-item mt-3">
                                            <h4>Graphic Design Specialist</h4>
                                            <h5>2026</h5>
                                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                                            <ul>
                                                <li>Developed marketing programs (logos, brochures, infographics,
                                                    presentations).</li>
                                                <li>Managed up to 5 projects under pressure.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section class="hero-section" id="section_4">
        <div style=" background-image: url('image/mnb.png'); background-size: cover; ">
            <div class="section-overlay">
            </div>

            <div class="d-flex justify-content-center">
                <div class="col-10" style="margin-top: 200px;">
                    <div data-aos="fade-right" data-aos-duration="2000" class="content text-center">
                        <h1 class="card-title fw-bold"
                            style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                            Portofolio
                        </h1>
                        <p class="text-white mb-4">_______________</p>
                    </div>
                    <div class="text-center mb-5">
                        <button type="submit" class="btn btn-outline-light mt-4"
                            style="border-radius: 20px; border-radius: 30px; box-shadow: 0 0 20px 2px blueviolet; font-size:medium; letter-spacing: 4px;">WEBSITE</button>
                        <button type="submit" class="btn btn-outline-light mt-4 ms-5 me-5"
                            style="border-radius: 20px; border-radius: 30px; box-shadow: 0 0 20px 2px blueviolet; font-size:medium; letter-spacing: 4px;">DESIGN</button>
                        <button type="submit" class="btn btn-outline-light mt-4"
                            style="border-radius: 20px; border-radius: 30px; box-shadow: 0 0 20px 2px blueviolet; font-size:medium; letter-spacing: 4px;">VIDEOS</button>
                    </div>

                    <div class="row text-center justify-content-center">
                        <?php while ($row = mysqli_fetch_assoc($queryPorto4)): ?>

                        <!-- Card Image 1 -->
                        <div class="col-md-4">

                            <div class="card mb-4 bg-transparent"
                                style="border: 1px solid white; backdrop-filter: blur(2px); border-radius: 20px; box-shadow: 0 0 15px 1px blueviolet;">

                                <img src="image/<?php echo $row['foto'] ?>" class="card-img-top" alt="Portofolio 1"
                                    style="border-radius: 20px;">
                                <div class="card-body">
                                    <p class="text-white"><?php echo $row['nama_project'] ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
            </div>
    </section>

    <section class="hero-section" id="section_5">
        <div style=" background-image: url('image/mnb3.png'); background-size: cover; ">
            <div class=" section-overlay">
            </div>

            <div class="d-flex justify-content-center" style="min-height: 70vh;">
                <div class=" col-8" style="margin-top: 50px;">
                    <div class="card bg-transparent"
                        style="width: 100%; height: auto; border: 1px solid white; backdrop-filter: blur(6px); border-radius: 30px; box-shadow: 0 0 50px 10px blueviolet;">
                        <div class="card-body text-white">
                            <div class="content text-center" data-aos="fade-right" data-aos-duration="2000">
                                <h1 class="card-title fw-bold"
                                    style="background: linear-gradient(to right, white, blue); -webkit-background-clip: text; color: transparent;">
                                    Contact
                                </h1>
                                <p class="text-white mb-4">_______________</p>
                            </div>

                            <div class="container">
                                <div class="">
                                    <form>
                                        <div class="row mb-3" data-aos="fade-up" data-aos-duration="2000">
                                            <!-- Name Input -->
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control bg-transparent text-white"
                                                    id="name" placeholder="Masukkan Nama Anda">
                                            </div>

                                            <!-- Email Input -->
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control bg-transparent text-white"
                                                    id="email" placeholder="Masukkan Email Anda">
                                            </div>
                                        </div>
                                        <!-- Subject Input -->
                                        <div data-aos="fade-right" data-aos-duration="2000">
                                            <div class="mb-3">
                                                <label for="subject" class="form-label">Subject</label>
                                                <input class="form-control bg-transparent text-white" id="subject"
                                                    placeholder="Masukkan Subject"></input>
                                            </div>
                                            <!-- Message Input -->
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea class="form-control bg-transparent text-white" id="message"
                                                    rows="4" placeholder="Tuliskan Pesan Anda"></textarea>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-outline-light mt-4"
                                                    style="border-radius: 20px; border-radius: 30px; box-shadow: 0 0 20px 2px blueviolet;">Kirim
                                                    Pesan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>