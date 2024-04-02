<?php
  require "koneksi.php";

  // get product based on query
  if(isset($_GET['keyword'])){
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
  }
  // get product default
  else{
  $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail, ketersediaan_stok FROM produk");
  }
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

    <main>
      <section id="catalogue" class="menu">
        <h2>Our<span> Product</span></h2> 
        <div class="col-md-8 offset-md-2">
          <form method="get">
            <div class="input-group input-group-lg my-4">
	            <input type="search" class="form-control" placeholder="Product Name" name="keyword">
	            <button class="btn btn-primary text-white" type="submit">
		            <span>Search</span>
	            </button>
            </div>
          </form>
        </div>

        <div class="row">
        <?php
          while($data = mysqli_fetch_array($queryProduk)){
        ?>
          <div class="menu-card">
            <div class="image-box">
              <img src="image/<?php echo $data['foto'];?>" alt="Scoreboard Basket" />
            </div>
            <h3 class="menu-card-tittle"><?php echo $data['nama']; ?></h3>
            <a href="index.php#contact" class="btn white-text">
                  <?php echo $data['ketersediaan_stok'];?> 
            </a>
            <p class="menu-card-price">Rp <?php echo $data['harga']; ?></p>           
            <a href="produk-detail.php?nama=<?php echo $data['nama'];?>" class="cta">See Details
          </a>
          </div>
          <?php
          }
        ?>
        </div>

      </section>

      <!-- menu section end -->
    </main>

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
