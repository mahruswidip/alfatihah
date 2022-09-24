
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
                        <?php
                        if ($this->session->userdata('user_level') == '1') {
                            echo '<a href="' . site_url('jamaah/export') . '" class="btn btn-info"><span class="fa fa-download"></span>&nbsp; Export</a>';
                        } else {
                            echo '';
                        } ?>
                        
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- <?php echo '<pre>';
                print_r($jamaah) ?> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Nomor Paspor</th>
                            <th>Foto</th>
                            <th>Nama Jamaah</th>
                            <th class="col-2">Alamat</th>
                            <th>Grup Keberangkatan</th>
                            <th>Paket</th>
                            <th>Input Oleh</th>
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
                                    <td><?php echo $j['nomor_paspor']; ?></td>
                                    <td>
                                        <img class="img-fluid" style="max-width: 100px; max-height: 100px;" src="<?php echo base_url() . 'assets/images/' . $j['jamaah_img']; ?>" alt="">
                                    </td>
                                    <td><?php echo $j['nama_jamaah']; ?></td>
                                    <td class="col-2"><?php echo $j['alamat']; ?></td>
                                    <td><?php echo $j['grup_keberangkatan']; ?></td>
                                    <td><?php echo $j['paket']; ?></td>
                                    <?php if ($this->session->userdata('user_level') == '2') {
                                        echo '<td>'. $this->session->userdata('user_name').'</td>';
                                    } else {
                                        echo '<td>'.$j['user_name'].'</td>';
                                    }
                                    ?>
                                    <!-- <td><?php echo $j['user_name']; ?></td> -->
                                    <?php if ($this->session->userdata('user_level') == '1') {
                                        echo '<td><img style="width: 100px;" src="' . base_url() . 'assets/images/qr_uuid/' . $j['qr_code_benar'] . '"></td>';
                                    } else {
                                        echo '';
                                    }
                                    ?>
                                    <td>
                                        <a href="<?php echo site_url('jamaah/cetak_id_card/' . $j['id_jamaah']); ?>" class="btn btn-warning"><span class="fa fa-print"></span></a>
                                        <a href="<?php echo site_url('jamaah/edit/' . $j['id_jamaah']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo site_url('jamaah/remove/' . $j['id_jamaah']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                        <?php if ($j['qr_code_benar']== null) {
                                            echo '<a href="'.site_url('jamaah/updateqr/' . $j['id_jamaah']).'" class="btn btn-dark"><span class="fa fa-qrcode"></span></a>';
                                        } else {
                                            echo '';
                                        }
                                        ?>
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