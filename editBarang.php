<?php 
require 'template/header.php';
require 'function/function.php';

$idBarang = $_GET['idBarang'];
$queryBarang = view("SELECT * FROM tb_barang WHERE idBarang='$idBarang'");

if(isset($_POST['submit'])){
       
    if(!isset($_POST['kondisiBarang'])){
    echo"
        <script type='text/javascript'>
            setTimeout(function () {
                Swal.fire({
                    title: 'INFO',
                    text: 'Maaf anda harus input Kondisi Barang',
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
    }else{
        if(edit($_POST) > 0){
            echo"
            <script type='text/javascript'>
                setTimeout(function () {
                    Swal.fire({
                        title: 'INFO',
                        text: 'Berhasil Edit Barang',
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
                                text: 'Tidak ada perubahan Barang',
                                icon: 'warning',
                                timer: '3200',
                                showConfirmButton: false
                            });
                        },10);
                        window.setTimeout(function(){
                            window.location.replace('barang.php');
                        },1500);
                    </script>
                    ";
        }
    }
}

?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <h3>Edit Barang</h3>
                            <?php while($row = mysqli_fetch_assoc($queryBarang)) : ?>
                            <form class="form-valide" action="" method="post">
                                <input type="hidden" value="<?= $row['idBarang'] ?>" name="idBarang">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="nama-barang">Nama Barang<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="nama-barang" name="namaBarang"
                                            placeholder="Masukkan Nama Barang..." value="<?= $row['namaBarang'] ?>"
                                            required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="tanggalMasuk">Tanggal Masuk
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" id="tanggalMasuk" name="tanggalMasuk"
                                            placeholder="Masukkan Tanggal Masuk..." required
                                            value="<?= $row['tanggalMasuk'] ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="stok">Stok Barang
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class=" form-control" id="stok" name="stok"
                                            placeholder="Masukkan Stok barang..." value="<?= $row['stok'] ?>"
                                            required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="kondisiBarang">Kondisi Barang <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="kondisiBarang" name="kondisiBarang" required>
                                            <option selected disabled>kondisi</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Rusak">Rusak</option>
                                            <option value="Hilang">Hilang</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="keterangan">Keterangan <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class=" form-control" id="keterangan" name="keterangan"
                                            placeholder="Masukkan Keterangan..." value="<?= $row['keterangan'] ?>"
                                            required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary" name="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <?php endwhile ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    require 'template/footer.php';

?>