<?php 
require 'template/header.php';

?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="card-title">Data Barang Inventory Organisasi</h4>
                        </div>
                        <a href="tambahBarang.php"><button class="btn btn-primary" type="submit"
                                title="Tambah">Tambah</button></a>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Stok</th>
                                        <th>Kondisi</th>
                                        <th>Ket.Barang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>hapus</td>
                                    </tr>

                                    <?php require 'template/footer.php' 
                                    ?>