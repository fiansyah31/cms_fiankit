<?php
include "../koneksi.php";
include "../function.php";

$id = $_GET['id'];
if(deleteProyek($id)) {
    header('location:proyek.php');
}

?>