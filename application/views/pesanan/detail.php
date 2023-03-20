<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirmation Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda ingin memproses pesanan? (memproses pesanan akan mempengaruhi jumlah stok barang anda)
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?php echo site_url('pesanan/add_pengiriman/' . $pesanan['id_pesanan']); ?>"
                    class="btn btn-danger">
                    Proses
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Input Modal -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputModalLabel">Input Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="jumlah_kirim">Nama Barang</label>
                            </div>
                        </div>
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
                    </div><br>
                    <div class="form-group">
                        <label for="jumlah_kirim">Jumlah Kirim</label>
                        <input type="text" class="form-control" id="jumlah_kirim" name="jumlah_kirim">
                    </div><br>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row justify-content-between">
                            <div class="col-md-9">
                                <h3 class="card-title ">Detail Pesanan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
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
                                                <td><?php echo $tanggalConverted = date_format(date_create($pesanan['tanggal_pesanan']), 'd F Y'); ?>
                                                </td>
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
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row justify-content-between">
                            <div class="col-md-9">
                                <h3 class="card-title ">Daftar Barang Pesanan</h3>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo site_url('pesanan/add_barang_di_pesanan/' . $pesanan['id_pesanan']); ?>"
                                    class="btn btn-success"><span class="fa fa-plus"></span></a>
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
                                                <td><?php echo $barang['jumlah_pesanan'] . '&nbsp' . $barang['satuan'] ?>
                                                </td>
                                                <td><?php echo $barang['jumlah'] . '&nbsp' . $barang['satuan']  ?></td>
                                                <td><?php echo $barang['keterangan']; ?></td>
                                                <td>
                                                    <?php
                                                        $jumlah_pesanan = $barang['jumlah_pesanan'];
                                                        $jumlah = $barang['jumlah'];
                                                        $satuan = $barang['satuan'];

                                                        if ($jumlah_pesanan < $jumlah) {
                                                            echo '<span class="badge badge-success"><h6>Stok Ada</h6></div>';
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
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row justify-content-between">
                            <div class="col-md-9">
                                <h3 class="card-title ">Pengiriman</h3>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#confirmModal"
                                    data-href="<?php echo site_url('pesanan/cetak_surat_jalan/' . $pesanan['id_pesanan']); ?>">
                                    <span class="fa fa-print"></span> &nbsp Surat Jalan
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card-body">
                                    <!-- <?php '<pre>'; print_r($pengiriman)?> -->
                                    <div class="table-responsive">
                                        <table id="tableKategori" class="table table-hover">
                                            <thead class="text-primary">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Tanggal Kirim</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah yang Dikirim</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // create an empty array to store the grouped rows
                                                $groupedRows = array();

                                                // loop through the pengiriman data and group the rows by their tanggal_kirim value
                                                foreach ($pengiriman as $p) {
                                                $tanggal_kirim = $p['tanggal_kirim'];

                                                // if the group for this tanggal_kirim does not exist, create a new one
                                                if (!isset($groupedRows[$tanggal_kirim])) {
                                                    $groupedRows[$tanggal_kirim] = array();
                                                }

                                                // add the current row to the group for this tanggal_kirim
                                                $groupedRows[$tanggal_kirim][] = $p;
                                                }

                                                // loop through the grouped rows and display them in the table
                                                $no = 1;
                                                foreach ($groupedRows as $tanggal_kirim => $rows) {
                                                $rowspan = count($rows);
                                                echo '<tr>';
                                                echo '<td rowspan="' . $rowspan . '">' . $no++ . '</td>';
                                                echo '<td rowspan="' . $rowspan . '">' . $tanggalConverted = date_format(date_create($tanggal_kirim), 'd F Y') . '</td>';
                                                echo '<td>' . $rows[0]['nama_barang'] . '</td>';
                                                echo '<td>' . $rows[0]['jumlah_kirim'] . '&nbsp' . $rows[0]['satuan'] . '</td>';
                                                echo '</tr>';
                                                for ($i = 1; $i < $rowspan; $i++) {
                                                    echo '<tr>';
                                                    echo '<td>' . $rows[$i]['nama_barang'] . '</td>';
                                                    echo '<td>' . $rows[$i]['jumlah_kirim'] . '&nbsp' . $rows[$i]['satuan'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        <div class="pull-right">
                                            <?php echo $this->pagination->create_links(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#confirmModal').on('show.bs.modal', function(e) {
            $(this).find('.btn-warning').attr('href', $(e.relatedTarget).data('href'));
        });
        $('.select2').select2();
    });
    </script>