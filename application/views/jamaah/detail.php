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