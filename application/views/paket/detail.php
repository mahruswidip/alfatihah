<div class="col-md">
    <div class="card">
        <div class="card-header card-header-primary">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h3 class="card-title ">Detail Paket</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <center>
                    <div class="col-auto">
                        <img class="img-fluid" style="max-width: 200px; max-height: 200px; border-radius: 1.5rem;" src="<?php echo base_url() . 'assets/images/' . $paket[0]['paket_img']; ?>" alt="">
                    </div>
                </center>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; Tanggal Keberangkatan</td>
                            <td><?php echo $tanggalConverted = date_format(date_create($paket[0]['tanggal_keberangkatan']), 'd F Y'); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; Nama Program</td>
                            <td><?php echo $paket[0]['nama_program']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; Paket</td>
                            <td><?php echo $paket[0]['paket']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; Hotel</td>
                            <td><?php echo $paket[0]['hotel_mekkah']; ?>
                                <?php if ($paket[0]['bintang_mekkah'] == '5') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } elseif ($paket[0]['bintang_mekkah'] == '4') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } elseif ($paket[0]['bintang_mekkah'] == '3') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } elseif ($paket[0]['bintang_mekkah'] == '2') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } else {
                                    echo '&#11088;';
                                };
                                ?>
                                <br>
                                <?php echo $paket[0]['hotel_madinah']; ?>
                                <?php if ($paket[0]['bintang_madinah'] == '5') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } elseif ($paket[0]['bintang_madinah'] == '4') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } elseif ($paket[0]['bintang_madinah'] == '3') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } elseif ($paket[0]['bintang_madinah'] == '2') {
                                    echo '&#11088;';
                                    echo '&#11088;';
                                } else {
                                    echo '&#11088;';
                                };
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <hr>
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h3 class="card-title ">Daftar Jamaah</h3>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama Jamaah</th>
                            <th scope="col">Nomor Paspor</th>
                            <th scope="col">Nomor HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($record as $jamaah) { ?>
                            <tr>
                                <td>
                                    <img class="img-fluid" style="max-width: 100px; max-height: 100px;" src="<?php echo base_url() . 'assets/images/' . $jamaah['jamaah_img']; ?>" alt="">
                                </td>
                                <td><?php echo $jamaah['nama_jamaah']; ?></td>
                                <td><?php echo $jamaah['nomor_paspor']; ?></td>
                                <td><?php echo $jamaah['nomor_telepon']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>