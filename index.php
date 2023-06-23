<?php
include 'koneksi.php';



// Tambah Donasi
if (isset($_POST['tambah'])) {
    $donatur = $_POST['donatur'];
    $donatur_id = $_POST['donatur_id'];
    $paket = $_POST['paket'];
    $kategori = $_POST['kategori'];
    $nominal = $_POST['nominal'];

    $sql = "INSERT INTO donasi (donatur, donatur_id, paket, kategori, nominal) VALUES ('$donatur', '$donatur_id', '$paket', '$kategori', $nominal)";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "Donasi berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan donasi: " . mysqli_error($koneksi);
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <link href="styles.css" rel="stylesheet"></link>

    <title>Hello, world!</title>
</head>

<body>
    <div class="mx-6 py-3"  >
        <!-- Start Navbar -->
        <nav class="navbar mb-5 navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid py-2">
                <a class="navbar-brand d-flex align-items-center">
                    <img src="./assets/images/wikrama-logo.png" class="img-fluid me-2" width="70" height="70" alt="">
                    <h6 class="fw-bolder">SMK WIKRAMA <br> BOGOR</h6>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse  navbar-collapse flex justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav mb-3">
                        <li class="nav-item">
                            <a class="nav-link active fw-bolder" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#cara">Cara wakaf</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#data">Data Wakaf</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://smkwikrama.sch.id/">Web Wikrama</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
    
        <!-- Start Hero -->
        <section class="beranda" id="beranda">
        <div class="container-fluid hero" style="margin-bottom: 130px;">
            <div class="row">
                <!-- Hero Text -->
                <div class=" mb-5 col-md-7 hero-desc">
                    <h5>Masjid Besar SMK Wikrama Bogor</h5>
                    <h1 class="">Mari <span class="text-primary">Tingkatkan <br> Keimanan</span> Masyarakat <br> SMK Wikrama Bogor.</h1>
                    <a href="tambah.php" class="btn btn-primary btn-hero mt-3"></i>Beri Bantuan Shadaqah</a>
                </div>
                <!-- Hero Image -->
                <div class=" mb-5 col-md-5 hero-bg d-flex justify-content-end">
                    <img src="./assets/images/0001_0.png" class="hero-image" />
                </div>
                <!-- Hero Card -->
                <div class="hero-card shadow">
                    <!-- Hero Targer -->
                    <div class="d-flex justify-content-between hero-card-target">
                        <div>
                            <h6>Total Target Dana</h6>
                            <h4 class="fw-bold">Rp. 40.000.000</h4>
                        </div>
                        <div>
                            <h6>Total Dana Terkumpul</h6>
                            <h4 class="fw-bold">Rp. 40.000.000</h4>
                        </div>
                        <div>
                            <h6>Data Sumber</h6>
                            <h4 class="fw-bold">34 Orang</h4>
                        </div>
                    </div>
                    <!-- Hero Percentage -->
                    <div class="hero-card-percentage">
                        <hr>
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-md-10">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2 text-primary">
                                <span style="font-size: 30px; font-weight: bold;" class="me-2">30.0 %</span>
                                <span style="font-size: 14px; font-weight: 600;">Terpenuhi</span>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Donatur -->
                    <div class="bg-primary py-3 text-white" style=" border-bottom-left-radius: 10px;  border-bottom-right-radius: 10px;">
                        <marquee width="100%" height="20%" direction="left" height="100px">
                            <ul class="d-flex m-0">
                                <li class="me-4 ms-4">
                                <?php 
                                $query = 'select * from donasi';
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <?php echo $row['donatur']; ?> - 
                                    <span class="text-warning">Rp.<?php echo $row['nominal']; ?></span>
                                    <?php } ?>
                                </li>
                            </ul>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->
        
        <!-- Banner -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style=" margin-bottom: 100px;">
            <div class="carousel-indicators d-flex justify-content-start" style=" margin-left: 0px; width: 100%;">
                <div style="position: absolute; top: -330px;">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" style="padding: 3px; width: 40px; border-radius: 14px;" class="indicator active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" style="padding: 3px; width: 40px; border-radius: 14px;" class="indicator" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" style="padding: 3px; width: 40px; border-radius: 14px;" class="indicator" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="./assets/images/msjd1.jpg" class="d-block w-100" style="height: 300px; background-size: cover;">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/msjd2.jpg" class="d-block w-100" style="height: 300px; background-size: cover;">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/msjd3.jpg" class="d-block w-100" style="height: 300px; background-size: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="width: 100%;">
                <div class="bg-primary" style="position: absolute; top: -55px; right: 40px;border-top-left-radius: 25px; border-bottom-left-radius: 25px; width: 40px;">
                    <span class="carousel-control-prev-icon" style="width: 20px!important;" aria-hidden="true"></span>
                    <span  class="visually-hidden">Previous</span>
                </div>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <div class="bg-primary" style="position: absolute; top: -55px; right: 0; border-top-right-radius: 25px; border-bottom-right-radius: 25px; width: 40px;">
                    <span class="carousel-control-next-icon"  style="width: 20px!important;" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </div>
            </button>
        </div>
        <!-- End Banner -->

        <!-- Start Benerfit -->
        <div class="benefit" style="margin-bottom: 100px;">
            <h1 class="fw-bold"><span class="text-primary"> Manfaat Wakaf</span>, infaq <br>shodaqoh.</h1>
            <p class="text-secondary mb-5">Berikut adalah beberapa keutamaan wakaq, infaq <br> shodaqoh yang akan anda dapatkan.</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="card-benefit" >
                                        <img src="./assets/images/love.png"
                                        style="position: absolute;
                                            left:21%;
                                            top:27%; 
                                            width: 30px;"
                                        />
                                    </div>
                                    <h5 class="fw-bold">
                                        Menjadikan hati <br> lebih tenang
                                    </h5>
                                    <p class="text-secondary">
                                        Kami memberikan harga <br> yang terbaik dibandingkan <br> dengan Kompetitor kami
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="card-benefit" >
                                        <img src="./assets/images/love.png"
                                        style="position: absolute;
                                            left:21%;
                                            top:27%; 
                                            width: 30px;"
                                        />
                                    </div>
                                    <h5 class="fw-bold">
                                        Menjadikan hati <br> lebih tenang
                                    </h5>
                                    <p class="text-secondary">
                                        Kami memberikan harga <br> yang terbaik dibandingkan <br> dengan Kompetitor kami
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="card-benefit" >
                                        <img src="./assets/images/love.png"
                                        style="position: absolute;
                                            left:21%;
                                            top:27%; 
                                            width: 30px;"
                                        />
                                    </div>
                                    <h5 class="fw-bold">
                                        Menjadikan hati <br> lebih tenang
                                    </h5>
                                    <p class="text-secondary">
                                        Kami memberikan harga <br> yang terbaik dibandingkan <br> dengan Kompetitor kami
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="card-benefit" >
                                        <img src="./assets/images/love.png"
                                        style="position: absolute;
                                            left:21%;
                                            top:27%; 
                                            width: 30px;"
                                        />
                                    </div>
                                    <h5 class="fw-bold">
                                        Menjadikan hati <br> lebih tenang
                                    </h5>
                                    <p class="text-secondary">
                                        Kami memberikan harga <br> yang terbaik dibandingkan <br> dengan Kompetitor kami
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <img src="./assets/images/hand.png" style="height: 520px; width: 300px;">
                </div>
            </div>
        </div>
        </section>
        <!-- End Benerfit -->

        
        <!-- Start Step -->
        <!-- Start Donatur -->
        <section class="data" id="data">
       <!-- Start Donatur -->
       <section class="data" id="data">
        <div class="donatur" style="margin-bottom: 100px;">
            <h1 class="fw-bold"><span class="text-primary"> Data donatur</span> Wakaf, infaq<br> shodaqoh.</h1>
            <p class="text-secondary mb-5">Berikut adalah data donatur wakaf, infaq shodaqoh untuk<br> masjid besar SMK Wikrama Bogor</p>
            <table class="table table-bordered table-donatur">
                <thead>
                    <tr style="background-color: #d8d8d8;">
                        <th>Donatur</th>
                        <th>Donatur ID</th>
                        <th>Paket</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                        
                    </tr>
                </thead>
                <?php 
                $query = 'select * from donasi';
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($result)) {?>
                <tbody>
                    <tr>
                        <td><b><?php echo $row['donatur']; ?></b></td>
                        <td><b><?php echo $row['donatur_id']; ?></b></td>
                        <td><?php echo $row['paket']; ?></td>
                        <td><?php echo $row['kategori']; ?></td>
                        <td>Rp.<?php echo $row['nominal']; ?></td>
                        
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
        </section>
        <!-- End Donatur -->

        
        <!-- Start Gallery -->
        <section class="gallery" id="gallery">
        <div class="gallery" style="margin-bottom: 100px;">
            <h1 class="fw-bold"><span class="text-primary"> Gallery</span> Masjid Besar SMK<br> Wikrama Bogor.</h1>
            <p class="text-secondary mb-5">Berikut adalah gallery masjid besar sMK Wikrama Bogor.</p>

            <div class="row g-2">
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <img src="./assets/images/g-1.png" class="w-100">
                </div>
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <img src="./assets/images/g-2.png" class="w-100">
                </div>
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <img src="./assets/images/g-3.png" class="w-100">
                </div>
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <img src="./assets/images/g-4.png" class="w-100">
                </div>
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <img src="./assets/images/g-5.png" class="w-100">
                </div>
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <img src="./assets/images/g-5.png" class="w-100">
                </div>
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <img src="./assets/images/g-4.png" class="w-100">
                </div>
                <div class="col-md-4 col-lg-3 col-sm-3 col-2">
                    <div class="bg-primary w-100 h-100" style="border-radius: 15px;">
                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                            <img src="./assets/images/panah.png"/>
                            <p class="text-white mt-3">Buka Galeri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- End Gallery -->

    </div>

    <!-- Start Contact -->
    <section class="beranda" id="beranda">
    <!-- Start Contact -->
    <div class="overflow-hidden" style="background-color: #001E42;">
        <div class="row mx-5 py-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 mb-3">
                        <a class="navbar-brand d-flex align-items-center">
                            <img src="./assets/images/wikrama-logo.png" class="img-fluid me-2" width="70" height="70" alt="">
                            <h6 class="fw-bolder text-white">SMK WIKRAMA <br> BOGOR</h6>
                        </a>
                    </div>
                    <div class="col-12 text-white">
                        <h6>Alamat</h6>
                        <p>
                            Jl. Raya Wangun<br>
                            Kelurahan Sindangsari<br>
                            Bogor Timur 16720</p>
                        <p class="mb-4">
                            Telepon <br>
                            0251-8242411 / <br>
                            082221718035 (Whatsapp)
                        </p>
                        <div>
                            <a><img src="./assets/images/fb.png"/></a>
                            <a><img src="./assets/images/tw.png"/></a>
                            <a><img src="./assets/images/ig.png"/></a>
                            <a><img src="./assets/images/yt.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 text-white">
                <h6 class="fw-bolder">Tentang Wikrama</h6>
                <ul class="px-4 py-1">
                    <li class="py-1">Sejarah</li>
                    <li class="py-1">Peraturan Sekolah</li>
                    <li class="py-1">Rencana Strategi & Prestasi</li>
                    <li class="py-1">Yayasan</li>
                    <li class="py-1">Struktur Organisasi</li>
                    <li class="py-1">Cabang</li>
                    <li class="py-1">Penghargaan</li>
                    <li class="py-1">Kerjasama</li>
                </ul>
            </div>
            <div class="col-md-4  mt-3">
                <h6 class="fw-bolder text-white mb-3">Kirim Pesan</h6>
                <div class="mb-3">
                    <input type="text" placeholder="Name" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea placeholder="Pesan Anda" class="form-control"></textarea>
                    <button class="btn btn-warning btn-hero mt-3">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <div class="text-center p-3 fw-bolder">
        Copyright © 2023 - SMK Wikrama Bogor. All Right Reserved.
    </div>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>