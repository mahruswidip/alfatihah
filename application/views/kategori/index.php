<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Kategori</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('kategori/add'); ?>" class="btn btn-success"><span
                                class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tableKategori" class="table table-hover">
                        <thead class=" text-primary ">
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;foreach ($kategori as $p) {?>
                            <tr>
                                <td class="col-1"><?=$no++?></td>
                                <td class="col-9"><?php echo $p['nama_kategori']; ?>
                                </td>
                                <td class="col-2">
                                    <a href="<?php echo site_url('kategori/edit/' . $p['id_kategori']); ?>"
                                        class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                    <a href="<?php echo site_url('kategori/remove/' . $p['id_kategori']); ?>"
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
        $('#tableKategori').DataTable();
    } );
</script>