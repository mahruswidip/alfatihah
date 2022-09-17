<!--Modal Form Login with Avatar Demo-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content" style="background-color: #d4edda; color: #155724;">

            <div class="modal-body text-center mb-1">
                <h3 style="font-weight: bold;">
                    <?php
                    echo $this->session->flashdata('success');
                    ?>
                </h3>
            </div>

        </div>
        <!--/.Content-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Jamaah</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('jamaah/bukatambah'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>NIK</th>
                            <th>Foto</th>
                            <th>Nama Jamaah</th>
                            <th>Grup Keberangkatan</th>
                            <th>Paket</th>
                            <?php if ($this->session->userdata('user_level') == '1') {
                                echo '<th>QR Code</th>';
                            } else {
                                echo '';
                            }
                            ?>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($jamaah as $j) { ?>
                                <tr>
                                    <!-- <td><?php echo $j['nik']; ?></td> -->
                                    <td></td>
                                    <td>
                                        <img class="img-fluid" style="max-width: 100px; max-height: 100px;" src="<?php echo base_url() . 'assets/images/' . $j['jamaah_img']; ?>" alt="">
                                    </td>
                                    <td><?php echo $j['nama_jamaah']; ?></td>
                                    <td><?php echo $j['grup_keberangkatan']; ?></td>
                                    <td><?php echo $j['paket']; ?></td>
                                    <?php if ($this->session->userdata('user_level') == '1') {
                                        echo '<td><img style="width: 100px;" src="' . base_url() . 'assets/images/qr/' . $j['qr_code'] . '"></td>';
                                    } else {
                                        echo '';
                                    }
                                    ?>
                                    <td>
                                        <a href="<?php echo site_url('jamaah/cetak_id_card/' . $j['id_jamaah']); ?>" class="btn btn-warning"><span class="fa fa-print"></span></a>
                                        <a href="<?php echo site_url('jamaah/edit/' . $j['id_jamaah']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('jamaah/remove/' . $j['id_jamaah']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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
    window.addEventListener('load', function() {
        $('#myModal').modal('hide')
        setTimeout(function() {
            $('#myModal').modal('hide');
        }, 2500);
    })
</script>