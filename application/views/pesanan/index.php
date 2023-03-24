<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Pesanan</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('pesanan/add'); ?>" class="btn btn-success"><span
                                class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tablePesanan" class="table">
                        <thead class=" text-primary ">
                            <th>No.</th>
                            <th>Nomor Pesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Tanggal Pesanan</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pesanan as $p) { ?>
                            <tr class="<?php if ($p['is_selesai']=='1') {
                                                    echo 'bg-success';
                                                } else {
                                                    echo '';
                                                }
                                                ?>">
                                <td class="col-1"><?= $no++ ?></td>
                                <td class="col-2"><?php echo $p['nomor_pesanan']; ?></td>
                                <td class="col-3"><?php echo $p['nama_pelanggan']; ?></td>
                                <td class="col-2"><?php echo $p['alamat']; ?></td>
                                <td><?php echo $tanggalConverted = date_format(date_create($p['tanggal_pesanan']), 'd F Y'); ?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('pesanan/detail/' . $p['id_pesanan']); ?>"
                                        class="btn btn-warning"><span class="fa fa-info"></span></a>
                                    <a href="<?php echo site_url('pesanan/edit/' . $p['id_pesanan']); ?>"
                                        class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                    <a href="<?php echo site_url('pesanan/remove/' . $p['id_pesanan']); ?>"
                                        class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            <?php } ?>
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

<script type="text/javascript">
$(document).ready(function() {
    $('#tablePesanan').DataTable();
});
</script>