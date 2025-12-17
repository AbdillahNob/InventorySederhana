<?php 
require 'function/function.php';
require 'template/header.php';

$query_barang = view("SELECT * FROM tb_barang");

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
                                <?php 
                                $n = 1;
                                while($row = mysqli_fetch_assoc($query_barang)) :?>
                                <tbody>
                                    <tr>
                                        <td><?= $n++; ?></td>
                                        <td><?=  $row['namaBarang'] ?></td>
                                        <td><?= $row['tanggalMasuk'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['kondisiBarang'] ?></td>
                                        <td><?= $row['keterangan'] ?></td>
                                        <td>
                                            <div class="">
                                                <a href="editBarang.php?idBarang=<?= $row['idBarang'] ?>"><button
                                                        class="btn mb-2 btn-success" type="button" title="Edit"><i
                                                            class="fas fa-edit"></i></button></a>
                                                <a href="hapusBarang.php?idBarang=<?= $row['idBarang'] ?>"><button
                                                        class="btn mb-2 btn-danger" type="button" title="Hapus"
                                                        onclick="return confirm('Yakin Mau Hapus ?')"><i
                                                            class="fas fa-trash-alt"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile ?>
                                    <?php require 'template/footer.php' 
                                    ?>