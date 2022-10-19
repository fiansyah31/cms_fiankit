<?php 
include "koneksi.php";

function login($data) {
    global $conn;
    $username = $data['username'];
    $password = $data['password'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'"); 
    if(mysqli_num_rows($query) === 1){
        $cekpassword = mysqli_fetch_assoc($query);
        if($password !== $cekpassword['password']){ 
            ?>
            <script>
                alert('Password salah!')
            </script>
            <?php
          return false;
        }else {
            $_SESSION['id'] = $cekpassword['id']; 
           return true;
        }
    }else {
        ?>
        <script>
            alert('ID Tidak ditemukan!')
        </script>
        <?php
            return false;
    }
    
}
function homePage($datas){
    global $conn; 

    $id = $datas['id'];
    $title_hero = $datas['title_hero'];
    $desc_hero = $datas['desc_hero'];

    if($title_hero === "" && $desc_hero === ""){
        ?>
        <script>
            alert('Tidak boleh kosong');
            window.location('login.php')
        </script>
        <?php
        return false;
    }
    mysqli_query($conn, "UPDATE home_page SET title_hero = '$title_hero', desc_hero ='$desc_hero' WHERE id ='$id'");
    return mysqli_affected_rows($conn);
}

function proyek($datas){
    global $conn;

    $title_proyek = $datas['title_proyek'];
    $image_proyek = $_FILES['image_proyek']['name'];
    $link_proyek = $datas['link_proyek'];
    $kategori_proyek = $datas['kategori_proyek'];

    if($title_proyek === "" && $image_proyek === "" && $link_proyek === "" && $kategori_proyek === "" ){
        ?>
        <script>
            alert('Tidak boleh kosong');
            window.location('setting.php')
        </script>
        <?php
        return false;
    }
    $imageFileType = strtolower(pathinfo($image_proyek,PATHINFO_EXTENSION));

    if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'){
        ?>
        <script>
            alert('Gambar harus bertipe JPG, PNG atau JPEG');
            window.location('setting.php')
        </script>
        <?php
        return false;
    }

    if($_FILES['image_proyek']['size'] > 5000000) {
        ?>
        <script>
            alert('Ukuran gambar terlalu besar');
            window.location('setting.php');
        </script>
        <?php
        return false;
    }
    $ekstensi_gambar = explode('.', $image_proyek);
    $ekstensi_gambar = strtolower(end($ekstensi_gambar));
    $nama_gambar = uniqid();
    $nama_gambar .= '.';
    $nama_gambar .= $ekstensi_gambar;
    move_uploaded_file($_FILES['image_proyek']['tmp_name'],'../asset/' .$nama_gambar);
    mysqli_query($conn, "INSERT INTO proyek (title_proyek, image_proyek, kategori_proyek, link_proyek) VALUES('$title_proyek', '$nama_gambar', '$kategori_proyek', '$link_proyek')");
    return mysqli_affected_rows($conn);   
}

function editProyek($datas){
    global $conn;

    $id = $datas['id'];
    $title_proyek = $datas['title_proyek'];
    $link_proyek = $datas['link_proyek'];
    $image_lama = $datas['image_lama'];
    $kategori_proyek = $datas['kategori_proyek'];
    
    $error = $_FILES['image_proyek']['error'];
    if($_FILES['image_proyek']['size'] > 500000) {
        ?>
        <script>
            alert('Ukuran gambar terlalu besar');
            window.location('setting.php');
        </script>
        <?php
        return false;
    }
    if($error === 4) {
        $image_sampul = $image_lama;
    }else {
        $image_sampul = $_FILES['image_proyek']['name'];
        $ekstensi_gambar = explode('.', $image_sampul);
        $ekstensi_gambar = strtolower(end($ekstensi_gambar));
        $image_sampul = uniqid();
        $image_sampul .= '.';
        $image_sampul .= $ekstensi_gambar;
        if(is_file('../asset/' . $image_lama)) { // Jika gambar ada

            unlink('../asset/' .$image_lama); // Hapus file gambar sebelumnya yang ada di folder images
        }
        
        move_uploaded_file($_FILES['image_proyek']['tmp_name'],'../asset/' .$image_sampul);
    }
    mysqli_query($conn, "UPDATE proyek SET title_proyek='$title_proyek', image_proyek='$image_sampul', kategori_proyek='$kategori_proyek', link_proyek='$link_proyek' WHERE id='$id'");
    return mysqli_affected_rows($conn);
}
function deleteProyek($id) {
    global $conn; 

    $query = mysqli_query($conn, "SELECT * FROM proyek WHERE id = '$id'");
    if(mysqli_num_rows($query) === 1) {
        $row= mysqli_fetch_assoc($query);
        unlink('../asset/' .$row['image_proyek']);
        mysqli_query($conn, "DELETE FROM proyek WHERE id ='$id'");
        return mysqli_affected_rows($conn);
    }
}
?>