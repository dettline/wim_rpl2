<?php
    session_start();
    $_SESSION['menu']="Dealer";
    include "../includes/header.php";
?>

    <!-- Awal Konten -->
     <div class="container vh-custom">
        <h1>Halaman ini akan menampilkan Dealer Wimcycle yang tersedia di Indonesia  
            <i class="bi bi-houses-fill"></i>
        </h1>
     </div>
    <!-- Akhir Konten -->

<?php
    include "../includes/footer.php";
?>