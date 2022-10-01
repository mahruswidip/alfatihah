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
                        <img class="img-fluid" style="max-width: 100px; max-height: 100px; border-radius: 1.5rem;" src="<?php echo base_url() . 'assets/images/' . $jamaah['jamaah_img']; ?>" alt="">
                    </div>
                </center>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <i class="fa fa-book"></i>&nbsp; No. Paspor/Passport Number
                </div>
                <div class="col-auto">
                    <?php echo $jamaah['nomor_paspor']; ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <i class="fa fa-user"></i>&nbsp; Nama/Name
                </div>
                <div class="col-auto">
                    <?php echo $jamaah['nama_jamaah']; ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <i class="fa fa-phone"></i>&nbsp; Nomor HP
                </div>
                <div class="col-auto">
                    <?php echo $jamaah['nomor_telepon']; ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <i class="fa fa-map-marker"></i>&nbsp; Alamat
                </div>
                <div class="col-auto">
                    <?php echo $jamaah['alamat']; ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <i class="fa fa-calendar"></i>&nbsp; Grup Keberangkatan
                </div>
                <div class="col-auto">
                    <?php echo $tanggalConverted = date_format(date_create($jamaah['grup_keberangkatan']), 'd F Y'); ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <i class="fa fa-address-card"></i>&nbsp; Paket
                </div>
                <div class="col-auto">
                    <?php echo $jamaah['paket']; ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <i class="fa fa-address-card"></i>&nbsp; Lama Hari
                </div>
                <div class="col-auto">
                    <?php echo $jamaah['lama_hari'].' Hari'; ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto"><span><i class="fa fa-bed" aria-hidden="true"></i></span>&nbsp; Hotel Mekkah</div>
                <div class="col-auto">
                    <?php echo $jamaah['hotel_madinah']; ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto"><span><i class="fa fa-bed" aria-hidden="true"></i></span>&nbsp; Hotel Madinah</div>
                <div class="col-auto">
                    <?php echo $jamaah['hotel_mekkah']; ?>
                </div>
            </div>
        </div>
    </div>
</div>