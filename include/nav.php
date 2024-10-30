<?php 
include 'admin/koneksi.php';

$querySetting = mysqli_query($koneksi, "SELECT * FROM porto_setting ORDER BY id DESC");
$rowSetting   = mysqli_fetch_assoc($querySetting);
?>

<nav style="backdrop-filter: blur(3px);" class="navbar navbar-expand-lg bg-transparent fixed-top">

    <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img width="70" src="admin/upload/<?php echo $rowSetting['logo'] ?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse z-1" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="letter-spacing: 4px;">
                <li class="nav-item me-5">
                    <a class="nav-link click-scroll text-white" aria-current="page" style="font-size: small;"
                        href="#section_1">HOME</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link click-scroll text-white" style="font-size: small;" href="#section_2">ABOUT</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link click-scroll text-white" style="font-size: small;" href="#section_3">RESUME</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link click-scroll text-white" style="font-size: small;"
                        href="#section_4">PORTOFOLIO</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link click-scroll text-white" style="font-size: small;" href="#section_5">CONTACT</a>
                </li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-search me-4"
                viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
            <form class="d-flex" role="search">
            </form>
        </div>
    </div>
</nav>