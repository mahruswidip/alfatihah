<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Buat Surat Jalan Pengiriman</h4>
                    </div>
                    <div class="card-body">
                        <h3>List Barang yang Dipesan</h3>
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
                                                    <td><?php echo $barang['jumlah_pesanan'] . '&nbsp' . $barang['satuan'] ?>
                                                    </td>
                                                    <td><?php echo $barang['jumlah'] . '&nbsp' . $barang['satuan']  ?>
                                                    </td>
                                                    <td><?php echo $barang['keterangan']; ?></td>
                                                    <td>
                                                        <?php
                                                        $jumlah_pesanan = $barang['jumlah_pesanan'];
                                                        $jumlah = $barang['jumlah'];
                                                        $satuan = $barang['satuan'];

                                                        if ($jumlah_pesanan < $jumlah) {
                                                            echo '<span class="badge badge-success"><span class="fa fa-check">&nbsp</span><h6>Stok Ada</h6></div>';
                                                        } else if ($jumlah_pesanan > $jumlah) {
                                                            echo '<span class="badge badge-warning">' . '<h6> Stok Kurang </h6>' . '</div>';
                                                        } else {
                                                            echo $jumlah_pesanan . '&nbsp;' . $satuan;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><a href="<?php echo site_url('pesanan/remove_barang/' . $barang['id_barang_pesanan']); ?>"
                                                            class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- <?php '<pre>'; print_r($barang_pesanan)?> -->
                        <form action="<?php echo site_url() . 'pesanan/add_pengiriman/' . $pesanan['id_pesanan'] ?>"
                            method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Barang</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-control select2" id="id_barang" name="id_barang">
                                                    <?php foreach ($barang_pesanan as $barang): ?>
                                                    <option value="<?php echo $barang['id_barang']; ?>">
                                                        <?php echo $barang['nama_barang']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Jumlah yang Dikirim</label>
                                                <input type="text" name="jumlah"
                                                    value="<?php echo $this->input->post('jumlah'); ?>"
                                                    class="form-control" id="jumlah" />
                                                <div id="jumlah_pesanan"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Tambah</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });
    </script>