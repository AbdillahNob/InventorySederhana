<?php
require 'function/function.php';
require 'template/header.php';

$queryBarangBaik = view("SELECT SUM(stok) AS total FROM tb_barang WHERE kondisiBarang='Baik'");
$queryBarangRusak = view("SELECT SUM(stok) AS total FROM tb_barang WHERE kondisiBarang='Rusak'");
$queryBarangHilang = view("SELECT SUM(stok) AS total FROM tb_barang WHERE kondisiBarang='Hilang'");

$barangBaik = mysqli_fetch_assoc($queryBarangBaik);
$barangRusak = mysqli_fetch_assoc($queryBarangRusak);
$barangHilang = mysqli_fetch_assoc($queryBarangHilang);

?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Barang dengan kondisi BAIK</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white"><?= $barangBaik['total'] ?? 0 ?></h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Barang dengan kondisi Hilang</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white"><?= $barangHilang['total'] ?? 0 ?></h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Barang dengan kondisi Rusak</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white"><?= $barangRusak['total'] ?? 0  ?>
                            </h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->

<?php  require 'template/footer.php' ?>