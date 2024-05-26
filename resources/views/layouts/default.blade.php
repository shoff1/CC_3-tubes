<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: wheat;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        /* Header */
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }

        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            padding: 0;
            list-style: none;
        }

        header li {
            display: inline;
            padding: 0 20px 0 20px;
        }

        header h1 {
            float: left;
            color: #fff;
        }

        header nav {
            float: right;
            margin-top: 10px;
        }

        /* Hero Section */
        .hero {
            background: navy;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .hero .btn {
            display: inline-block;
            color: #333;
            background: #fff;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 5px;
        }

        .hero .btn:hover {
            background: #ccc;
        }

        /* About Section */
        .about,
        .mahasiswa,
        .contact {
            padding: 50px 0;
            text-align: center;
        }

        h2 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        /* Mahasiswa Section */
        .pict {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .mahasiswa .mhs {
            margin-bottom: 20px;
        }

        .mahasiswa {
            padding: 30px;
        }

        .mhs-box {
            background-color: #ffc107;
            padding: 20px;
            border-radius: 10px;
        }

        /* Footer */
        footer {
            background-color: navy;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <section id="home" class="hero">
        <div class="container">
            <h2 style="color: white;">Welcome to Master Barang</h2>
            <p>This is the home page of Master Barang's website.</p>
            <a href="#mahasiswa" class="btn">Learn More</a>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p style="font-size: 20px; text-align: justify;">Master Barang adalah sebuah platform yang menyediakan fitur
                untuk mengelola dan menampilkan data barang.
                Dengan fitur seperti penambahan, pengeditan, dan penghapusan barang, pengguna dapat dengan mudah
                mengelola rekap data barang dengan efisien dan akurat.</p>
            <p style="font-size: 20px; text-align: justify;">Tujuan utama Master Barang adalah untuk membantu pengguna
                dalam mengelola rekap data barang dengan lebih efisien dan efektif.
                Dengan Master Barang, pengguna dapat menghemat waktu dan tenaga yang sebelumnya digunakan untuk
                pencatatan manual.</p>
        </div>
    </section>
    <section id="mahasiswa" class="mahasiswa">
        <div class="container mhs-box">
            <img src="{{ Vite::asset('resources/images/pandaa.png') }}" alt="Profile Picture" class="pict">
            <h2>Biodata Mahasiswa</h2>
            <div class="mhs">
                <h3>Nama</h3>
                <p style="font-size: 20px">Talitha Aulia</p>
            </div>
            <div class="mhs">
                <h3>Prodi</h3>
                <p style="font-size: 20px">Sistem Informasi</p>
            </div>
            <div class="mhs">
                <h3>NIM</h3>
                <p style="font-size: 20px">1204220078</p>
            </div>
            <div class="mhs">
                <h3>Kelas</h3>
                <p style="font-size: 20px">IS 05 - 01</p>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div>
                <p>Ada pertanyaan? Feel free to reach out to us on</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/telkomuniversity_surabaya/">
                            <img src="https://w7.pngwing.com/pngs/336/165/png-transparent-instagram-instagram-logo-3d-instagram-logo-social-media-logo-application-3d-icon.png"
                                alt="Instagram" style="width: 50px;">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://api.whatsapp.com/send/?phone=6281122339123&text&type=phone_number&app_absent=0">
                            <img src="https://png.pngtree.com/element_our/md/20180626/md_5b321c98efaa6.jpg"
                                alt="WhatsApp" style="width: 50px;">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://id.linkedin.com/school/telkom-university/">
                            <img src="https://images.rawpixel.com/image_png_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjk4Mi1kNS0xMF8xLnBuZw.png"
                                alt="Linkedin" style="width: 50px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Talitha Aulia. Mini Project Master Barang Uts.</p>
        </div>
    </footer>
</body>

</html>
