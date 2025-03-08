
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
<p class="mb-4">data ini merupakan data Barang.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>tanggal masuk</th>
                        <th>hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $no=1;
                     $get =$pdo->query("SELECT * FROM tbbarang");
                     $listdata=$get->fetchAll();
                    foreach ($listdata as $setdata) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $setdata['Jenis'] ?></td>
                        <td><?php echo $setdata['nama_barang'] ?></td>
                        <td><?php echo $setdata['jumlah'] ?></td>
                        <td><?php echo $setdata['harga_beli'] ?></td>
                        <td><?php echo $setdata['harga_jual'] ?></td>
                        <td><?php echo $setdata['tanggal'] ?></td>
                        <td><a href="hapusbarang.php?id=<?php echo $setdata['id']?>" class="btn btn-danger btn-circle">
                    <i class="fas fa-times-circle"></i>
                    </a></td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

</div>


</div>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="../js/sb-admin-2.min.js"></script>
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="../js/demo/datatables-demo.js"></script>