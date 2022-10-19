<!doctype html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="LK1u5uhVKZ3l60XRraX4boUfte3C336KB5TK44jij60" />
    <meta charset="utf-8">
    <meta name="description" content="I am experienced in the field of web design. I have been a web designer for over 1 year. Now I am waiting for you to cooperate ">
    <meta name="keywords" content="Web design, Web designer, UI & UX, Desain Website, HTML, CSS, JavaScript, bootstrap">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Alfian syahputra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php 
    include "koneksi.php";
    include "function.php";
    session_start();

    $result = mysqli_query($conn, "SELECT * FROM home_page");
    $row = mysqli_fetch_assoc($result);
    ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="color:#ffffff ;">AlfianSpace</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#proyek">Proyek</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="Mailto:alfiansyahputra.insitecs.org">Email me</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <section class="hero">
            <div class="container hero-content">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-12 align-self-center">
                        <div class="info-hero" data-aos="fade-up-right" data-aos-duration="200">
                            <h2>
                                <?= $row['title_hero']; ?>
                            </h2>
                            <p>
                                <?= $row['desc_hero']; ?>
                            </p>
                            <a class="btn btn-primary" href="Mailto:alfiansyahputra.insitecs.org">Email me</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-12">
                        <div class="illustrasi-hero" data-aos="fade-up-left" data-aos-duration="500">
                            <img src="image/Digital tools-bro.png" alt="illustrasi-hero" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
  <!-- Modal tentang saya -->
  <div class="modal fade" id="tentang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tentang saya</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="body-content-modal">
        <?php 
            $result = mysqli_query($conn, "SELECT * FROM home_page");
            $rows = mysqli_fetch_assoc($result);
            ?>
         <h2>
            <?= $rows['title_hero']; ?>
         </h2>
         <div class="border-width"></div>
         <p>
           <span>-</span>   <?= $rows['desc_hero']; ?>
         </p>
        </div>
        <div class="modal-content-icon">
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-github"></i></a>
          <a href="https://dribbble.com/alfiansyahputra"><i class="bi bi-dribbble"></i></a>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Layanan -->
  <div class="modal fade" id="layanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Layanan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <h2>
           Layanan
         </h2>
         <div class="border-width"></div>
         <div class="body-content-modal">
         <p>
           <span>-></span> Desain Website Responsif 
         </p>
         <p>
           <span>-></span> UI Design Web/App
         </p>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Proyek -->
  <div class="modal fade" id="proyek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Proyek</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <h2>
           Proyek
         </h2>
         <div class="border-width"></div>
         <div class="body-content-modal">
          <div class="row">
            <div class="col-12 mb-5">
            <nav>
              <div class="nav nav-tabs mb-5" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">UI Design</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Slicing</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Website Development</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row">
                <?php 
                $uidesign = 'ui design';
                $result = mysqli_query($conn, "SELECT * FROM proyek WHERE kategori_proyek = '$uidesign'");
                ?>
                <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                  <div class="col-md-4">
                    <div class="content-item-proyek">
                    <p>
                    <span>-</span> <?= $rows['kategori_proyek']; ?>
                    </p>
                      <div class="card card-proyek mb-4">
                          <img src="asset/<?= $rows['image_proyek']; ?>" alt="proyek">
                            <div class="card-body">
                              <h5>
                                <?= $rows['title_proyek']; ?>
                              </h5>
                              <a target="_blank" href="<?= $rows['link_proyek']; ?>" class="btn btn-info py-2 px-3">Lihat</a>
                            </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
              <div class="row">
                <?php 
                $uidesign = 'slicing';
                $result = mysqli_query($conn, "SELECT * FROM proyek WHERE kategori_proyek = '$uidesign'");
                ?>
                <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                  <div class="col-md-4">
                    <div class="content-item-proyek">
                    <p>
                    <span>-</span> <?= $rows['kategori_proyek']; ?>
                    </p>
                      <div class="card card-proyek mb-4">
                          <img src="asset/<?= $rows['image_proyek']; ?>" alt="proyek">
                            <div class="card-body">
                              <h5>
                                <?= $rows['title_proyek']; ?>
                              </h5>
                              <a target="_blank" href="<?= $rows['link_proyek']; ?>" class="btn btn-info py-2 px-3">Lihat</a>
                            </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
              <div class="row">
                <?php 
                $uidesign = 'website development';
                $result = mysqli_query($conn, "SELECT * FROM proyek WHERE kategori_proyek = '$uidesign'");
                ?>
                <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                  <div class="col-md-4">
                    <div class="content-item-proyek">
                    <p>
                    <span>-</span> <?= $rows['kategori_proyek']; ?>
                    </p>
                      <div class="card card-proyek mb-4">
                          <img src="asset/<?= $rows['image_proyek']; ?>" alt="proyek">
                            <div class="card-body">
                              <h5>
                                <?= $rows['title_proyek']; ?>
                              </h5>
                              <a target="_blank" href="<?= $rows['link_proyek']; ?>" class="btn btn-info py-2 px-3">Lihat</a>
                            </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            </div>
          </div>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
      </main>
    <script src="main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        AOS.init();
      </script>
  </body>
</html>