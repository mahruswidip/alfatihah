<?php $tanggal_kirim = isset($_GET['tanggal_kirim']) ? $_GET['tanggal_kirim'] : null;
$prev_tanggal_kirim = $tanggal_kirim;?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div class="row">
    <div class="col">
        <div style="margin-top: 20px;">
            <button type="button" id="btn_convert" class="btn btn-success"><span class="fa fa-download"></span>&nbsp
                Cetak</button>
        </div>
        <div id="html-content-holder">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h3>No. Pesanan</h3>
                                <h2><?php echo $pesanan['nomor_pesanan']; ?></h2>
                            </div>
                            <div class="col">
                                <h3>Pengiriman</h3>
                                <h2><?php echo $tanggal_kirim; ?></h2>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-borderless table-striped">
                                <tbody>
                                    <?php 
                                                        $tanggal_kirim = $prev_tanggal_kirim; // example value
                                                        $filteredDetail = array();

                                                        foreach ($detail as $row) {
                                                            if ($row['tanggal_kirim'] == $tanggal_kirim) {
                                                                $filteredDetail[] = $row;
                                                            }
                                                        };
                                                        ?>
                                    <tr>
                                        <td style="width: 20%;"><i class="fa fa-user"></i>&nbsp;
                                            Nama
                                            Pelanggan</td>
                                        <td><?php echo $pesanan['nama_pelanggan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-address-card"></i>&nbsp; Alamat</td>
                                        <td><?php echo $pesanan['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-calendar"></i>&nbsp; Tanggal Pesanan
                                        </td>
                                        <td><?php echo $tanggalConverted = date_format(date_create($pesanan['tanggal_pesanan']), 'd F Y'); ?>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Kirim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;foreach ($filteredDetail as $row) :?>
                                    <tr>
                                        <td class="col-1"><?= $no++ ?></td>
                                        <td><?php echo $row['nama_barang'];?></td>
                                        <td><?php echo $row['jumlah_kirim'];?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col-md-2">
                        <h5>Penerima</h5>
                        <br>
                        <br>
                        <hr>
                    </div>
                    <div class="col-md-7"></div>
                    <div class="col">
                        <h5>Pasuruan, </h5>
                        <br>
                        <br>
                        <hr>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>
        <div id="previewImg" style="display: block;">
        </div>
    </div>
</div>


<script>
document.getElementById("btn_convert").addEventListener("click", function() {
    html2canvas(document.getElementById("html-content-holder"), {
        allowTaint: true,
        useCORS: true
    }).then(function(canvas) {
        var anchorTag = document.createElement("a");
        document.body.appendChild(anchorTag);
        document.getElementById("previewImg").appendChild(canvas);
        // anchorTag.download =
        //     "<?php echo $pesanan['nomor_pesanan'] . '_' . $pesanan['nama_pelanggan'] ?>.pdf";
        // anchorTag.href = canvas.toDataURL();
        // anchorTag.target = '_blank';
        // anchorTag.click();
    });
});
</script>

</form>