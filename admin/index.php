<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Admin</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <?php
    include 'componen/navbar.php'
    ?>

<section class="dashboard container-fluid mt-4 ms-2 ">
        <div class="container d-flex justify-content-between">
            <div class="display-6 fw-normal">Selamat Datang Admin</div>
        </div>
                <div class="card mt-4 ms-5" style="width: 70rem;">
                    <div class="card-body ">
                        Dashboard Admin
                    </div>
                </div>
                <div class="card mt-3 ms-5 " style="width: 70rem;">
                    <div class="card-body ">
                         Visi Misi SMK Merdeka Bandung 
                         Visi
                    </div>
                </div>


        
         
        
    </section>

    <script src="asset/js/scripts.js"></script>
</body>
</html>