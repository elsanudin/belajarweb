                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Jenis barang</h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">jenis barang</h6>
                                </div>
                                <div class="card-body">
                                    <p>Masukkan Data yang Benar</p>
                                    <!-- Circle Buttons (Default) -->
                                    
                                <form role="form" class="margin-top-20" enctype="multipart/form-data" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
                                    <?php
                                       if(isset($_POST['btnSimpan'])){
                                        $cek="INSERT INTO tbjenis (jenis) VALUES (:nama)";
                                        $simpan=$pdo->prepare($cek);
                                        $hasil = $simpan->execute(array(
                                            ':nama'=>$_POST['txtNama']
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


