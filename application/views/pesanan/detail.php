<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <h3>Detail Pesanan</h3>
                        <div class="row">
                            <div class="col">
                                <i class="fa fa-book"></i>&nbsp; Nomor Pesanan
                                <h2><?php echo $pesanan['nomor_pesanan']; ?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                <td><i class="fa fa-user"></i>&nbsp; Nama Pelanggan</td>
                                                <td><?php echo $pesanan['nama_pelanggan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-address-card"></i>&nbsp; Alamat</td>
                                                <td><?php echo $pesanan['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-calendar"></i>&nbsp; Tanggal Pesanan</td>
                                                <td><?php echo $pesanan['tanggal_pesanan']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row justify-content-between">
                            <div class="col-md-9">
                                <h3 class="card-title ">Daftar Barang Pesanan</h3>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo site_url('pesanan/add_barang_di_pesanan/' . $pesanan['id_pesanan']); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- <?php echo '<pre>';
                            print_r($barang_pesanan) ?> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Jumlah Pesanan</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($barang_pesanan as $barang) : ?>
                                                <tr>
                                                    <td><?php echo $barang['nama_barang']; ?></td>
                                                    <td><?php echo $barang['jumlah_pesanan'] . '&nbsp' . $barang['satuan'] ?></td>
                                                    <td><?php echo $barang['jumlah'] . '&nbsp' . $barang['satuan']  ?></td>
                                                    <td><?php echo $barang['keterangan']; ?></td>
                                                    <td>
                                                        <?php
                                                        $jumlah_pesanan = $barang['jumlah_pesanan'];
                                                        $jumlah = $barang['jumlah'];
                                                        $satuan = $barang['satuan'];

                                                        if ($jumlah_pesanan < $jumlah) {
                                                            echo '<span class="badge badge-success">' . '<h6> Stok Ada </h6>' . '</div>';
                                                        } else if ($jumlah_pesanan > $jumlah) {
                                                            echo '<span class="badge badge-warning">' . '<h6> Stok Kurang </h6>' . '</div>';
                                                        } else {
                                                            echo $jumlah_pesanan . '&nbsp;' . $satuan;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><a href="<?php echo site_url('pesanan/remove_barang/' . $barang['id_barang_pesanan']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>