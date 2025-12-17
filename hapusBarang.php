<?php 
require 'template/sweetAlert.php';
require 'function/function.php';

$idBarang = $_GET['idBarang'];

if(hapus($idBarang) > 0){
    echo"
        <script type='text/javascript'>
            setTimeout(function () {
                Swal.fire({
                    title: 'INFO',
                    text: 'Berhasil Hapus Barang',
                    icon: 'success',
                    timer: '3200',
                    showConfirmButton: false
                });
            },10);
            window.setTimeout(function(){
                window.location.replace('barang.php');
            },2000);
        </script>
        ";  
}else{
    echo"
        <script type='text/javascript'>
            setTimeout(function () {
                Swal.fire({
                    title: 'INFO',
                    text: 'Gagal Hapus Barang',
                    icon: 'warning',
                    timer: '3200',
                    showConfirmButton: false
                });
            },10);
            window.setTimeout(function(){
                window.location.replace('barang.php');
            },2000);
        </script>
        ";
}

?>