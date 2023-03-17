<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Barang</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('barang/add'); ?>" class="btn btn-success"><span
                                class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tableBarang" class="table table-hover">
                        <thead class=" text-primary ">
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;foreach ($barang as $p) {?>
                            <tr>
                                <td class="col-auto"><?=$no++?></td>
                                <td style="width: 20%"><?php echo $p['nama_kategori']; ?></td>
                                <td style="width: 20%"><?php echo $p['nama_barang']; ?></td>
                                <td style="width: 30%"><?php echo $p['jumlah'] . '&nbsp' . $p['satuan']; ?></td>
                                <td style="width: 20%"><?php echo $p['keterangan']; ?></td>
                                </td>
                                <td class="col-2">
                                    <a href="<?php echo site_url('barang/edit/' . $p['id_barang']); ?>"
                                        class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                    <a href="<?php echo site_url('barang/remove/' . $p['id_barang']); ?>"
                                        class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            <?php }?>
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
        $('#tableBarang').DataTable();
    } );
</script>