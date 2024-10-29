<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Image di Section</title>
    <style>
    /* Menetapkan gaya untuk section */
    .background-section {
        background-image: url('image/1.png');
        /* Ganti dengan URL gambar Anda */
        background-size: cover;
        /* Menyesuaikan gambar agar menutupi seluruh area section */
        background-position: center;
        /* Mengatur posisi tengah gambar */
        background-repeat: no-repeat;
        /* Menghentikan pengulangan gambar */
        height: 100vh;
        /* Menetapkan tinggi section 100% dari tinggi viewport */
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2em;
        text-align: center;
    }
    </style>
</head>

<body>
    <section class="background-section">
        <h1>Selamat Datang</h1>
        <p>Ini adalah contoh section dengan background image.</p>
    </section>
</body>

</html>