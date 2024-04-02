<?php
require "koneksi.php";

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);
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
      <a href="index.php" class="navbar-logo" title="Home"
        >FRJS<span> Scoreboard & LED display</span></a
      >

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="index.php#about">About Us</a>
        <a href="index.php#menu">Catalogue</a>
        <a href="index.php#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="catalogue.php" id="catalogue" title="See Full Catalogue"
          ><i data-feather="book-open"></i
        ></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end -->

  

    <!-- detail produk -->
    <section id="about" class="about">
      <div class="row">
        <div class="about-img-dp">
          <img src="image/<?php echo $produk [ 'foto']; ?>" id="zoom-image" alt="Your Image" />
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('.about .row .about-img-dp').mousemove(function(e) {
    var parentOffset = $(this).offset(); 
    var relX = e.pageX - parentOffset.left;
    var relY = e.pageY - parentOffset.top;

    var imageWidth = $(this).find('img').width();
    var imageHeight = $(this).find('img').height();

    var xOffset = (relX / imageWidth) * 100;
    var yOffset = (relY / imageHeight) * 100;

    $(this).find('img').css({
      'transform-origin': xOffset + '% ' + yOffset + '%'
    });
  });
});
</script>



        <div class="content">
          <h3><?php echo $produk['nama']; ?></h3>
          <p> <?php echo $produk['detail']; ?></p>
            <div class="status">
              <p> <?php echo $produk['ketersediaan_stok'];?> </p>
            </div>
            <div class="special">
              <p>
                Rp. <?php echo $produk['harga']; ?>
              </p>
            </div>
          <a href="https://wa.me/6287838137197?text=Halo%2C%20admin.%0ASaya%20ingin%20memesan%20produk%20<?php echo $produk['nama']; ?>%20(ID%20<?php echo $produk['id']; ?>)" class="cta"> Order via WhatsApp</a>
        </div> 
      </div>       
    </section>

    <!-- Footer start -->

    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i> </a>
        <a href="#"><i data-feather="facebook"></i> </a>
        <a href="#"><i data-feather="message-circle"></i> </a>
      </div>

      <div class="links">
        <a href="index.php#home">Home</a>
        <a href="index.php#about">About Us</a>
        <a href="index.php#menu">Menu</a>
        <a href="index.php#contact">Contact</a>
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
