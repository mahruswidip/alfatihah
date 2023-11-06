<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div class="row">
    <div class="col">
        <div style="margin-top: 20px;">
            <button type="button" id="btn_convert" class="btn btn-success"><span class="fa fa-download"></span> Halaman Depan Label Koper</button>
        </div>
        <div id="html-content-holder" style="width: 639px; height: 1016px;">
            <img src="<?php echo base_url() . 'assets/images/id_card_template/labelkoper/depan.png'; ?>">
            <img class="img-fluid" style="border-radius: 20px; width: 280px; object-fit: cover; height: 390px; margin-top: -977px; margin-left: 180px;" src="<?php echo base_url() . 'assets/images/' . $record[0]['jamaah_img']; ?>">
            <table style="position:relative; color:black; width: 524px; height: 200px; margin-top: -330px; font-size: 2.5rem; text-align: center; font-weight: bold; line-height: 2.4rem;" align="center">
                <tr>
                    <td>
                        <p><?php echo $record[0]['nama_jamaah'] ?></p>
                        <br>
                        <p style="font-size: 1.5rem; text-align: center; font-weight: bold; line-height: 0rem;">Passport No. <?php echo $record[0]['nomor_paspor'] ?></p>
                    </td>
                </tr>
            </table>
        </div>

        <div id="previewImg" style="display: none;">
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
            anchorTag.download = "<?php echo $record[0]['nama_jamaah'] . '_LabelDepan' ?>.png";
            anchorTag.href = canvas.toDataURL();
            anchorTag.target = '_blank';
            anchorTag.click();
        });
    });
</script> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<div class="row">
    <div class="col">
        <div style="margin-top: 20px;">
            <button type="button" id="btn_preview" class="btn btn-primary">
                <span class="fa fa-eye"></span> Preview All Labels
            </button>
            <button type="button" id="btn_download" class="btn btn-success" style="display: none;">
                <span class="fa fa-download"></span> Download All Labels
            </button>
        </div>
        <div id="html-content-holder" style="width: 639px; height: auto;"></div>
        <div id="previewImg"></div>
    </div>
</div>

<script>
    document.getElementById("btn_preview").addEventListener("click", function() {
        var container = document.getElementById("html-content-holder");
        var previewContainer = document.getElementById("previewImg");

        <?php foreach ($record as $index => $data) : ?>
            var labelDiv<?php echo $index; ?> = document.createElement("div");
            labelDiv<?php echo $index; ?>.style.marginTop = "80px";

            var labelContent<?php echo $index; ?> = `
            <img src="<?php echo base_url() . 'assets/images/id_card_template/labelkoper/depan.png'; ?>">
            <img class="img-fluid" style="border-radius: 20px; width: 280px; object-fit: cover; height: 390px; margin-top: -977px; margin-left: 180px;" src="<?php echo base_url() . 'assets/images/' . $data['jamaah_img']; ?>">
            <table style="position:relative; color:black; width: 524px; height: 200px; margin-top: -330px; font-size: 2.5rem; text-align: center; font-weight: bold; line-height: 2.4rem;" align="center">
                <tr>
                    <td>
                        <p><?php echo $data['nama_jamaah'] ?></p>
                        <br>
                        <p style="font-size: 1.5rem; text-align: center; font-weight: bold; line-height: 0rem;">Passport No. <?php echo $data['nomor_paspor'] ?></p>
                    </td>
                </tr>
            </table>
        `;

            labelDiv<?php echo $index; ?>.innerHTML = labelContent<?php echo $index; ?>;
            container.appendChild(labelDiv<?php echo $index; ?>);
        <?php endforeach; ?>

        container.style.display = 'block'; // Make the container visible
        html2canvas(container, {
            allowTaint: true,
            useCORS: true
        }).then(function(canvas) {
            previewContainer.innerHTML = '';
            previewContainer.appendChild(canvas);
            container.style.display = 'none'; // Hide the container again
            document.getElementById("btn_download").style.display = 'block';
        });
    });

    document.getElementById("btn_download").addEventListener("click", function() {
        var anchorTag = document.createElement("a");
        document.body.appendChild(anchorTag);
        anchorTag.download = "All_Labels.png";
        anchorTag.href = document.getElementById("previewImg").querySelector("canvas").toDataURL();
        anchorTag.target = '_blank';
        anchorTag.click();
    });
</script>