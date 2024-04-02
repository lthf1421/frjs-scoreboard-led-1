<?php
  require "koneksi.php";

  $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail, ketersediaan_stok FROM produk LIMIT 3");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FRJS Scoreboard & LED display</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo" title="Home"
        >FRJS<span> Scoreboard & LED display</span></a
      >

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Catalogue</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        </form>
        <a href="catalogue.php" id="catalogue" title="See Full Catalogue"
          ><i data-feather="book-open"></i
        ></a>
        
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end -->

    <!-- hero section start-->

    <section class="hero" id="home">
      <main class="content">
        <h1>Custom <span>Scoreboard, Running Text & Jam Digital</span></h1>
        <p>
          Papan Skor Digital dengan banyak fitur untuk berbagai jenis cabang olahraga
        </p>
        <a href="#contact" class="cta">Pesan Sekarang</a>
      </main>
    </section>

    <!-- hero section end-->

    <!-- about section start-->

    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="image/aboutus.png" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih kami?</h3>
          <p>
            FRJS Scoreboard & LED Display adalah perusahaan terkemuka dalam memproduksi papan skor digital berkualitas tinggi untuk berbagai macam acara dan olahraga.
            Kami bangga menyediakan solusi tampilan berkualitas tinggi yang memungkinkan penyelenggara acara dan tim olahraga untuk memberikan pengalaman yang tak terlupakan kepada penonton. 
            Dengan fokus pada keandalan, kejelasan, dan kemudahan penggunaan, produk papan skor digital kami dirancang dengan mempertimbangkan kebutuhan pelanggan. 
            Kami berkomitmen untuk memberikan layanan yang sangat baik dan solusi yang disesuaikan dengan kebutuhan unik setiap pelanggan.          </p>
          <p>
            Jika Anda mencari solusi papan skor digital yang inovatif dan handal, jangan ragu untuk menghubungi tim kami. Kami siap membantu Anda dalam merencanakan dan mewujudkan tampilan yang spektakuler untuk acara atau tim olahraga Anda.
          </p>
        </div>
      </div>
    </section>

    <!-- about section end-->

    <!-- menu section start -->

    <section id="menu" class="menu">
      <h2>Featured<span> Product</span></h2>

      <div class="row">
        <?php
          while($data = mysqli_fetch_array($queryProduk)){
        ?>
          <div class="menu-card">
            <div class="image-box">
              <img src="image/<?php echo $data['foto'];?>" alt="Scoreboard Basket" />
            </div>
            <h3 class="menu-card-tittle"><?php echo $data['nama']; ?></h3>
            <p class="menu-card-desc crop">
              <?php echo $data['detail']; ?>
            </p>
            <p class="menu-card-price">Rp <?php echo $data['harga']; ?></p>
            <a href="">
            <a href="produk-detail.php?nama=<?php echo $data['nama'];?>" class="cta">
                  See Details
            </a>
          </div>
          <?php
          }
        ?>
      </div>
      
      <div class="load-more">
        <a href="catalogue.php" class="btn"><<< Full Catalogue >>></a>
      </div>
    </section>

    <!-- menu section end -->

    <!-- kontak section start -->

    <section id="contact" class="contact">
      <h2>Reach <span>Us</span></h2>
      <p>
        Kunjungi workshop kami pada alamat di bawah ini atau kirimkan pesan untuk konsultasi dan pemesanan produk!
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6946472080144!2d106.85877551413715!3d-6.171623962196151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f506393c48b1%3A0xe8dc439c3edd9f4b!2sScoreboard%20%26%20LED%20Display!5e0!3m2!1sen!2sid!4v1679825900376!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <style>
        .whatsapp-button {
          display: inline-block;
          padding: 10px 20px;
          background-color: #007bff;
          color: #fff;
          text-decoration: none;
          border-radius: 4px;
          transition: background-color 0.3s ease;
          margin-top: 25px;
          font-size: 1.6em;
        }

        .whatsapp-button:hover {
          background-color: #0056b3;
        }
      </style>

      <form id="myForm" method="GET">
        <div class="input-group">
          <i data-feather="user"></i>
          <input name="nama" type="text" placeholder="Nama" />
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input name="pesan" type="text" placeholder="Ketik pesan disini" />
        </div>
        <?php
          $nama = @$_GET['nama'];
          $pesan = @$_GET['pesan'];
        ?>
        <a id="whatsappLink" class="whatsapp-button" href="#" target="_blank">Kirim pesan via WhatsApp</a>
      </form>

      <script>
        document.getElementById("whatsappLink").addEventListener("click", function(event) {
          event.preventDefault();

          var nama = document.getElementsByName("nama")[0].value;
          var pesan = document.getElementsByName("pesan")[0].value;
          var encodedNama = encodeURIComponent(nama);
          var encodedPesan = encodeURIComponent(pesan);

          var whatsappURL = "https://wa.me/6287838137197?text=Halo%2C%20admin.%0ASaya%20" + encodedNama + ".%0A%0A" + encodedPesan;
          window.open(whatsappURL, "_blank");
        });
      </script>
      </div>
    </section>

    <!-- kontak section end -->

    <!-- Footer start -->

    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i> </a>
        <a href="#"><i data-feather="facebook"></i> </a>
        <a href="#"><i data-feather="message-circle"></i> </a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="credit">
        <p>
          Created by
          <a href="https://vsco.com/luthfi4517">Nabhan Luthfidyah</a>. | &copy
          2023.
        </p>
      </div>
    </footer>

    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- my Javascript-->
    <script src="js/script.js"></script>
  </body>
</html>
