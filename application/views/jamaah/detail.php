<div class="col-md">
    <div class="card">
        <div class="card-header card-header-primary">
            <div class="row justify-content-between">
                <div class="col-md-9">
                    <h3 class="card-title ">Detail Jamaah</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <center>
                    <div class="col-auto">
                        <img class="img-fluid" style="max-width: 200px; max-height: 200px; border-radius: 1.5rem;" src="<?php echo base_url() . 'assets/images/' . $jamaah['jamaah_img']; ?>" alt="">
                    </div>
                </center>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; No. KTP</td>
                            <td><?php echo $jamaah['nik']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-book"></i>&nbsp; No. Paspor/Passport Number</td>
                            <td><?php echo $jamaah['nomor_paspor']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user"></i>&nbsp; Nama/Name</td>
                            <td><?php echo $jamaah['nama_jamaah']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone"></i>&nbsp; Nomor HP</td>
                            <td><?php echo $jamaah['nomor_telepon']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-map-marker"></i>&nbsp; Alamat</td>
                            <td><?php echo $jamaah['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-calendar"></i>&nbsp; Grup Keberangkatan</td>
                            <td><?php echo $tanggalConverted = date_format(date_create($jamaah['grup_keberangkatan']), 'd F Y'); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-address-card"></i>&nbsp; Paket</td>
                            <td><?php echo $jamaah['paket']; ?></td>
                        </tr>
                        <tr>
                            <td> <i class="fa fa-address-card"></i>&nbsp; Lama Hari</td>
                            <td><?php echo $jamaah['lama_hari'] . ' Hari'; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-bed" aria-hidden="true"></i>&nbsp; Hotel Madinah</td>
                            <td><?php echo $jamaah['hotel_madinah']; ?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-bed" aria-hidden="true"></i>&nbsp; Hotel Mekkah</td>
                            <td><?php echo $jamaah['hotel_mekkah']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>