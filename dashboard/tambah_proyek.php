<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Proyek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <?php 
    include "../koneksi.php";
    include "../function.php";
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:../login.php');
        return false;
    }
    ?>
  </head>
  <body class="dashboard-css">
     <?php
        $id_sesion =$_SESSION['id'];
        $result= mysqli_query($conn, "SELECT * FROM admin WHERE id='$id_sesion'");
        $row = mysqli_fetch_assoc($result);
        ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">CMS FIANKIT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Setting</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="proyek.php">Data proyek</a></li>
                  <li><a class="dropdown-item" href="data_home.php">Data home page</a></li>
                  <li><a class="dropdown-item" href="#">Data layanan</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Akun saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Keluar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="#"><?= $row['username']; ?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <section class="dashboard">
            <div class="container content-dashboard">
                <?php 
                $result = mysqli_query($conn, "SELECT * FROM proyek");
                $rows = mysqli_fetch_assoc($result);
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="form-home-page-cms">
                            <?php 
                            if(isset($_POST['simpan'])){
                                if(proyek($_POST) > 0) {
                                    ?>
                                    <script>
                                        alert('Data berhasil ditambahkan');
                                        window.location='proyek.php';
                                    </script>
                                    <?php
                                }else {
                                   echo mysqli_error($conn);
                                }
                            }
                            ?>
                            <h2>Tambah Data</h2>
                            <div class="form-edit-home-page">
                            <form action="" method="post" enctype="multipart/form-data" id="tambah_proyek">
                                <input type="hidden" name="id" value="<?= $rows['id']; ?>">
                             <div class="mb-4">
                             <label for="exampleFormControlTextarea1" class="form-label">Judul</label>
                             <textarea type="text" class="form-control" id="title_proyek" name="title_proyek" required></textarea>
                             </div>
                             <div class="mb-4">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input class="form-control" type="file" name="image_proyek" required>
                             </div>
                             <div class="mb-4">
                                <label for="formFile" class="form-label">Kategori</label>
                                <select class="form-select" name="kategori_proyek" id="kategori_proyek" aria-label="Default select example" required>
                                  <option selected>Pilih kategori</option>
                                  <option value="ui design">UI Design</option>
                                  <option value="slicing">Slicing</option>
                                  <option value="website development">Website Development</option>
                                </select>
                             </div>
                             <div class="mb-4">
                                <label for="formFile" class="form-label">Link</label>
                                <input class="form-control" type="text" id="link_proyek" name="link_proyek"  required>
                             </div>
                             <div class="mb-4">
                                <button type="submit" name="simpan" class="btn btn-primary mt-3 w-100">Simpan</button>
                                <a href="proyek.php" class="btn btn-link mt-3 w-100">Kembali</a>
                             </div>
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      </main>
    <script src="main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        AOS.init();
      </script>
  </body>
</html>