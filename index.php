<?php

$produk = [
    [
        "nama" => "Wireless Mouse",
        "kategori" => "Aksesoris",
        "harga" => 75000,
        "stok" => 12
    ],
    [
        "nama" => "Mechanical Keyboard",
        "kategori" => "Keyboard",
        "harga" => 450000,
        "stok" => 8
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 275000,
        "stok" => 5
    ],
    [
        "nama" => "Webcam HD",
        "kategori" => "Kamera",
        "harga" => 350000,
        "stok" => 0
    ],
    [
        "nama" => "USB Hub 4 Port",
        "kategori" => "Aksesoris",
        "harga" => 125000,
        "stok" => 10
    ],
    [
        "nama" => "Laptop Stand",
        "kategori" => "Aksesoris",
        "harga" => 180000,
        "stok" => 0
    ]
];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store - Katalog Produk</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="navbar">
        <div class="logo">Cia<span>Store</span></div>

        <nav>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
            <a href="#tentang">Tentang</a>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <p class="hero-label">CIA STORE</p>

            <h1>
                Temukan Perangkat
                <span>Teknologi</span> Favoritmu
            </h1>

            <p>
                Temukan berbagai perangkat dan aksesoris teknologi
                berkualitas dengan harga terbaik.
            </p>

            <a href="#produk" class="hero-button">
                Lihat Produk
            </a>
        </div>
    </section>

    <section class="info" id="produk">
        <div>
            <p class="section-label">KATALOG</p>
            <h2>Produk Cia Store</h2>
            <p class="description">
                Pilih perangkat teknologi yang sesuai dengan kebutuhanmu.
            </p>
        </div>

        <div class="jumlah-produk">
            <strong><?php echo $jumlahProduk; ?></strong>
            <span>Produk Tersedia</span>
        </div>
    </section>

    <main class="product-container">

        <?php foreach ($produk as $item) { ?>

            <div class="product-card">

                <div class="product-icon">
                    💻
                </div>

                <div class="product-content">

                    <span class="category">
                        <?php echo $item["kategori"]; ?>
                    </span>

                    <h3>
                        <?php echo $item["nama"]; ?>
                    </h3>

                    <p class="price">
                        Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
                    </p>

                    <div class="stock">
                        <span>Stok:</span>

                        <?php if ($item["stok"] > 0) { ?>

                            <span class="status tersedia">
                                Tersedia
                            </span>

                        <?php } else { ?>

                            <span class="status habis">
                                Stok Habis
                            </span>

                        <?php } ?>
                    </div>

                    <p class="jumlah-stok">
                        <?php echo $item["stok"]; ?> unit tersedia
                    </p>


                    <?php if ($item["stok"] > 0) { ?>

                        <button class="buy-button">
                            Beli Sekarang
                        </button>

                    <?php } else { ?>

                        <button class="buy-button disabled" disabled>
                            Stok Habis
                        </button>

                    <?php } ?>

                </div>

            </div>

        <?php } ?>

    </main>

    <section class="about" id="tentang">

        <div>
            <p class="section-label">TENTANG CIA STORE</p>

            <h2>
                Teknologi untuk kebutuhanmu
            </h2>

            <p>
                Cia Store menyediakan berbagai perangkat dan aksesoris
                teknologi untuk membantu kebutuhan anda sehari-hari,
                belajar, bekerja, dan hiburan.
            </p>
        </div>

    </section>

    <footer>
        <div class="footer-logo">
            Cia<span>Store</span>
        </div>

        <p>
            © 2026 Cia Store. All Rights Reserved.
        </p>
    </footer>

</body>
</html>