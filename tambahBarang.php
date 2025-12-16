<?php 
require 'function/function.php';
require 'template/header.php';

if(isset($_POST['submit'])){
    $no_file = $_GET['no_file'];
       
    $kondisi = $_POST['kondisi'];
    if(!$kondisi){
        echo "
        <script>
            alert('Maaf anda harus input Kondisi');
            window.setTimeout(function(){
                window.location.replace('tambahBarang.php');
            },500);
        </script>
    ";
    return false;
    }

    if(tambah($_POST, $no_file) > 0){
        echo"
        <script type='text/javascript'>
            setTimeout(function () {
                Swal.fire({
                    title: 'INFO',
                    text: 'Berhasil Barang',
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
                            text: 'Gagal Tambah Barang',
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

?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <h3>Tambah Barang</h3>
                            <form class="form-valide" action="?no_file=2" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="nama-barang">Nama Barang<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="nama-barang" name="namaBarang"
                                            placeholder="Masukkan Nama Barang..." required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="tanggalMasuk">Tanggal Masuk
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" id="tanggalMasuk" name="tanggalMasuk"
                                            placeholder="Masukkan Tanggal Masuk..." required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="stok">Stok Barang
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class=" form-control" id="stok" name="stok"
                                            placeholder="Masukkan Stok barang..." required />
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
                                            placeholder="Masukkan Keterangan..." required />
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