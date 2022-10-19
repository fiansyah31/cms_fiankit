<!doctype html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="LK1u5uhVKZ3l60XRraX4boUfte3C336KB5TK44jij60" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <?php 
    session_start();
    include "koneksi.php";
    include "function.php";
    if(isset($_SESSION['id'])){
        header('location:dashboard/index.php');
    }
    ?>
  </head>
  <body>
      <main>
        <section class="hero">
            <div class="container hero-content">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-12">
                        
                       <div class="login-form">
                        <?php
                         
                        if(isset($_POST['submit'])){
                            if(login($_POST)>0){
                                header('location:dashboard/');
                            }
                            else {
                                echo mysqli_error($conn);
                            }
                        }
                        ?>
                        <h3 class="mb-4">Form Login</h3>
                        <form action="" method="post">
                            <div class="mb-4">
                             <label for="exampleFormControlInput1" class="form-label">Username</label>
                             <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Masukan username" required>
                             </div>
                             <div class="mb-4">
                             <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                             <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Masukan password" required>
                             </div>
                             <div class="mb-4">
                                <button type="submit" name="submit" class="btn btn-primary mt-3 w-100">Login</button>
                             </div>
                            </div>
                        </form>
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