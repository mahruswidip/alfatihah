<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<form action="<?php echo site_url() . 'jamaah/edit' . $jamaah['id_jamaah'] ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <!-- <?php
                    echo '<pre>';
                    print_r($hotel);
                    ?> -->
            <div style="margin-top: 20px;">
                <button type="button" id="btn_convert" class="btn btn-success"><span class="fa fa-download"></span> Halaman Depan Label Koper</button>
            </div>
            <div style="margin-top: 20px;">
                <button type="button" id="btn_convert2" class="btn btn-success"><span class="fa fa-download"></span> Halaman Belakang Label Koper</button>
            </div>
            <div id="html-content-holder" style="width: 639px; height: 1016px;">
                <img src="<?php echo base_url() . 'assets/images/id_card_template/labelkoper/depan.png'; ?>">
                <img class="img-fluid" style="border-radius: 20px; width: 280px; object-fit: cover; height: 390px; margin-top: -977px; margin-left: 180px;" src="<?php echo base_url() . 'assets/images/' . $jamaah['jamaah_img']; ?>">
                <table style="position:relative; color:black; width: 524px; height: 200px; margin-top: -330px; font-size: 2.5rem; text-align: center; font-weight: bold; line-height: 2.4rem;" align="center">
                    <tr>
                        <td>
                            <p><?php echo $jamaah['nama_jamaah'] ?></p>
                            <br>
                            <p style="font-size: 1.5rem; text-align: center; font-weight: bold; line-height: 0rem;">Passport No. <?php echo $jamaah['nomor_paspor'] ?></p>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="previewImg" style="display: none;">
            </div>
        </div>
        <div class="col">
            <div id="html-content-holder-belakang" style="width: 639px; height: 1016px;">
                <img src="<?php echo base_url() . 'assets/images/id_card_template/labelkoper/belakang.png'; ?>">
                <table style="position:relative; width: 364px;height: 25px;margin-top: -903px;font-size: 2.5rem;text-align: left;font-weight: bold;line-height: 2.4rem;margin-left: 207px;">
                    <tr>
                        <td>
                            <p style="font-size: 1.2rem;text-align: left;font-weight: bold;line-height: 0rem;"><?php echo $hotel[0]['hotel_mekkah'] ?> <?php if ($hotel[0]['bintang_mekkah'] == '5') {
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                        } elseif ($hotel[0]['bintang_mekkah'] == '4') {
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                        } elseif ($hotel[0]['bintang_mekkah'] == '3') {
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                        } elseif ($hotel[0]['bintang_mekkah'] == '2') {
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                        } else {
                                                                                                                                                            echo '&#9733;';
                                                                                                                                                        };
                                                                                                                                                        ?></p>
                            <p style="font-size: 1.2rem;text-align: left;font-weight: bold;line-height: 0rem; margin-top: 33px;"><?php echo $hotel[0]['hotel_madinah'] ?> <?php if ($hotel[0]['bintang_madinah'] == '5') {
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                            } elseif ($hotel[0]['bintang_madinah'] == '4') {
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                            } elseif ($hotel[0]['bintang_madinah'] == '3') {
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                            } elseif ($hotel[0]['bintang_madinah'] == '2') {
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                            } else {
                                                                                                                                                                                echo '&#9733;';
                                                                                                                                                                            };
                                                                                                                                                                            ?></p>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="previewImg2" style="display: none;">
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
                anchorTag.download = "<?php echo $jamaah['nama_jamaah'] . '_LabelDepan' ?>.png";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.click();
            });
        });
        document.getElementById("btn_convert2").addEventListener("click", function() {
            html2canvas(document.getElementById("html-content-holder-belakang"), {
                allowTaint: true,
                useCORS: true
            }).then(function(canvas) {
                var anchorTag = document.createElement("a");
                document.body.appendChild(anchorTag);
                document.getElementById("previewImg2").appendChild(canvas);
                anchorTag.download = "<?php echo $jamaah['nama_jamaah'] . '_LabelBelakang' ?>.png";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.click();
            });
        });
    </script>
</form>