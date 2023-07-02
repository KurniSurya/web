<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunny Future Wedding Organizer</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    // koneksi ke database
    include_once('php/config.php');

    // coding query untuk panggil data dari database (READ)
    $result=mysqli_query($mysqli, 'SELECT *FROM paket ');

    ?>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">SunnyFuture <span>wedding organizer</span></a>

    <div class="navbar-nav">
      <a href="#home">Beranda</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Pilihan Paket</a>
      <a href="#products">Paket Unggulan</a>
      <a href="#contact">Kontak</a>
      <a href="admin/index.html" target="_blank">Admin</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/products/gold-medal.png" alt="Product 1">
        <div class="item-detail">
          <h3>Gold Package</h3>
          <div class="item-price">IDR 300,000,000</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/silver-medal.png" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 100,000,000</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/bronze-medal.png" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 50,000000</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
    <!-- Shopping Cart end -->

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
      <main class="content">
        <h1>Kami Siap Membuat Hari Bahagia Anda Menjadi <br><span>  Tidak Terlupakan!</span></h1>
        <p>Pernikahan merupakan komitmen untuk mencintai, menghargai, dan memperjuangkan pasanganmu setiap hari</p>
        <a href="#menu" class="cta">Booking Sekarang!</a>
      </main>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2>Tentang Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/aboutus.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa harus memilih kami?</h3>
        <p> Kami adalah Wedding Organizer yang siap membantu Anda mewujudkan pernikahan impian Anda. Dari pemilihan tempat hingga dekorasi, tim profesional kami memberikan pelayanan terbaik untuk memastikan hari bahagia Anda menjadi tak terlupakan.</p>
        <p>Kami memahami setiap detail penting dalam pernikahan Anda dan berusaha memenuhi ekspektasi Anda. Dengan kreativitas dan perhatian pada detail, kami siap memberikan pengalaman pernikahan yang berkesan dan sempurna. Percayakan pernikahan impian Anda kepada kami.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2>Pilihan Paket</h2>
      <p>Pilih paket Wedding kami yang sesuai dengan kebutuhan Anda. Dari acara sederhana hingga mewah, kami hadir untuk mewujudkan pernikahan impian Anda dengan layanan komprehensif.</p>  

  <table class="tabel" cellspacing= "0">
        <tr>
            <th>Nama Paket</th>
            <th>Deskripsi</th>
            <th>harga</th>
        </tr>
        <tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)){
            ?>
            <td><?php echo $user_data['nama']; ?></td>
            <td><?php echo $user_data['deskripsi']; ?></td>
            <td><?php echo $user_data['harga']; ?></td>
            
        </tr>
    <?php
    }
    ?>
    </table>
  </section>
  <!-- Menu Section end -->

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Paket Unggulan</span> Kami</h2>
    <p>Nikmati Pengalaman Pernikahan yang Dilengkapi dengan Layanan Khusus dan Kemewahan Tak Terhingga melalui Paket Unggulan Kami</p>

    <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <!-- <a href="#"><i data-feather="shopping-cart"></i></a> -->
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/gold-medal.png" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Paket <span class="gold">GOLD</span></h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 300.000.000</div>
          <a class="cta">Pesan Sekarang! <i data-feather="shopping-cart" class="chart"></i></a>
           </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <!-- <a href="#"><i data-feather="shopping-cart"></i></a> -->
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/silver-medal.png" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Paket <span class="silver">SILVER</span></h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 100.000.000</div>
          <a class="cta">Pesan Sekarang! <i data-feather="shopping-cart" class="chart"></i></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <!-- <a href="#"><i data-feather="shopping-cart"></i></a> -->
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/bronze-medal.png" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Paket <span class="bronze">BRONZE</span></h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 50.000.000</div>
          <a class="cta">Pesan Sekarang! <i data-feather="shopping-cart" class="chart"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Untuk informasi lebih lanjut mengenai layanan Sunny Future Wedding Organizer, jangan ragu untuk menghubungi kami. Kami juga menyediakan lokasi yang dapat Anda kunjungi untuk melakukan konsultasi langsung dengan tim profesional kami.
    </p>

    <div class="row">
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.836246882699!2d107.47035788004312!3d-6.415081540225912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697299ca7ca44d%3A0x3988f82f13750904!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Cikampek%20(UBSI%20Cikampek)!5e0!3m2!1sid!2sid!4v1688057049914!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no whatsapp">
        </div>
        <div class="input-group">
          <i data-feather="message-square"></i>
          <input type="text" placeholder="deskripsi pesanan">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
      </form>

    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">home</a>
      <a href="#about">about us</a>
      <a href="#menu">menu</a>
      <a href="#products">products</a>
      <a href="#contact">contact</a>
    </div>

  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/gold-medal.png" alt="Product 1">
        <div class="product-content">
          <h3>Gold Package</h3>
          <p>Dengan Memesan Gold Package Anda Akan Mendapatkan : Dekorasi, Venue Indoor/Outdor, Rias, Catering, Album, Band, Souvenir</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 300.000.000</div>
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>