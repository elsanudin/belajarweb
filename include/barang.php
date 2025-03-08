
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">input barang</h1>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4" >
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Circle Buttons</h6>
                                </div>
                                <div class="card-body">
                                    <p>input barang masuk</p>
                                <form role="form" class="margin-top-20" enctype="multipart/form-data" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
                                    <?php
                                       if(isset($_POST['btnSimpan'])){
                                        $cek="INSERT INTO tbbarang (Jenis, nama_barang, jumlah, harga_beli, harga_jual, tanggal) VALUES (:Jenis, :nama,  :jumlah, :beli, :jual, :tanggal)";

                                        $simpan=$pdo->prepare($cek);
                                        $hasil = $simpan->execute(array(
                                            ':nama'=>$_POST['txtNama'],
                                            ':jumlah'=>$_POST['txtJumlah'],
                                            ':Jenis'=>$_POST['txtJenis'],
                                            ':beli'=>$_POST['txtBeli'],
                                            ':jual'=>$_POST['txtJual'],
                                            ':tanggal'=>$_POST['txtTanggal']
                                            ));
                                            if ($hasil){
                                                echo "<div class='alert alert-info'> <strong>Succes</strong> Data Berhasil Disimpan</div><meta http-equiv='refresh' content='1; url= index.php?page=inputjenisbarang'/>";
                                            } else {
                                                echo "<div class='alert alert-danger'> <strong>Error</strong> Data Gagal Disimpan</div>";
                                       }
                                    }
                                    ?>
                                    
                                    <label>nama Jenis</label>
                                    <input type="text" class="form-control" name="txtNama" placeholder="masukan nama jenis barang">
                                    <label>jumlah</label>
                                    <input type="number" class="form-control" name="txtJumlah" placeholder="masukan jumlah barang masuk">
                                    <label>jenis</label><br>
                                    <select name="txtJenis" id="" style="width: 100%;">
                                    <?php
                                     $get =$pdo->query("SELECT * FROM tbjenis");
                                     $listdata=$get->fetchAll();
                                    foreach ($listdata as $setdata) {
                                    ?>
                                        <option><?php echo $setdata['jenis'] ?></option>
                                         <?php }?>
                                    </select><br>
                                    <label>harga beli</label>
                                    <input type="number" class="form-control" name="txtBeli" placeholder="masukan harga beli">
                                    <label>harga jual</label>
                                    <input type="number" class="form-control" name="txtJual" placeholder="masukan harga jual">
                                    <label>tanggal masuk</label>
                                    <input type="date" class="form-control" name="txtTanggal" placeholder="yyyy-mm-dd">

                                    <br>

                                    <button type="submit" name="btnSimpan" class="btn btn-success btn-circle">
                                        <i class="fas fa-save"></i>
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-circle">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

