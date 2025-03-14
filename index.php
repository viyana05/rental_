<?php
// Data mobil rental dalam bentuk array sederhana
$rentals = array(
    array("Fortuner", 1000000, "fortuner.jpeg"),
    array("Creta", 800000, "creta.jpeg"),
    array("CRV", 900000, "CRV.jpeg")
);
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-blue-light {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }
    </style>
</head>
<nav class="navbar" style="background-color: #007bff;">
    <div class="container-fluid">
        <div class="d-flex justify-content-between w-100">
            <div class="d-flex">
                <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="#">Home</a>
                <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="transaksi.php">Pesan Mobil</a>
            </div>
            <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="logout.php">Logout</a>
        </div>
    </div>
</nav>


<!-- Banner Kamar (Carousel) -->
<div id="bannerKamar" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php foreach ($rentals as $indexarray => $nilai) { ?>
            <button type="button" data-bs-target="#bannerKamar" data-bs-slide-to="<?= $indexarray ?>" class="<?= $indexarray === 0 ? 'active' : '' ?>" aria-label="Slide <?= $indexarray + 1 ?>"></button>
        <?php } ?>
    </div>
    <div class="carousel-inner">
        <?php foreach ($rentals as $indexarray => $nilai) { ?>
            <div class="carousel-item <?= $indexarray === 0 ? 'active' : '' ?>">
                <img src="img/<?= $nilai[2] ?>" class="d-block w-100" alt="<?= $nilai[0] ?>">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
                    <h3><?= $nilai[0] ?></h3>
                    <p>Harga mulai dari Rp <?= $nilai[1] ?> per malam.</p>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerKamar" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerKamar" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<div class="container mt-5">
    <section id="produk">
        <h2 class="text-center">Jenis Kamar</h2>
        <div class="row">
            <?php foreach ($rentals as $indexarray => $nilai) { ?>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/<?= $nilai[2] ?>" alt="<?= $nilai[0] ?>">
                        <h5 class="mt-2"><?= $nilai[0] ?></h5>
                        <h5 class="mt-2">Rp <?= number_format($nilai[1], 0, ',', '.') ?></h5>
                        <a href="transaksi.php?indexarray=<?= $indexarray ?>" class="btn btn-primary mt-2">Pesan</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>


<!-- Tentang Kami section -->
<section class="mt-5 text-center" id="tentang">
    <h2>Tentang Kami</h2>
    <p>
        <strong>Rental Mobil Cepat</strong> menyediakan berbagai pilihan kendaraan untuk kebutuhan perjalanan Anda.<br>
        Kami menawarkan harga bersaing, kendaraan berkualitas, dan layanan yang dapat diandalkan.
    </p>
    <p>Alamat: Jl. Hotel Indah No.1, Jakarta</p>
    <p>Telepon: 021-123456</p>
    <p>Email: info@hotelindah.com</p>
</section>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Hotel viyana</p>
</footer>

</body>

</html>