<?php
    session_start();
    $_SESSION['menu']="Sepeda";
    include "../includes/header.php";
?>

    <!-- Awal Konten -->
     <div class="container vh-custom">
        <h1>Halaman ini akan menampilkan Sepeda 
            <i class="bi bi-bicycle"></i>
        </h1>
     </div>
    <!-- Akhir Konten -->

<?php
    include "../includes/footer.php";
?>