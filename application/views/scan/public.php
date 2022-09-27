<!-- <div class="row">
    <?php
    $attributes = array('id' => 'button');
    echo form_open('scan/public', $attributes); ?>
    <div id="sourceSelectPanel" style="display: none">
        <label for="sourceSelect">Change video source:</label>
        <select id="sourceSelect" style="max-width:800px"></select>
    </div>
    <textarea style="display: block;" name="uuid" id="result" readonly></textarea>
    <span> <input style="display: none;" type="submit" id="button" class="btn btn-success btn-md" value="Cek Kehadiran"></span>
    <div class="col">
        <video id="video" width="100%" height="420" style="border: 0.2rem solid grey; border-radius: 2rem;-webkit-transform: scaleX(-1);
  transform: scaleX(1);"></video>
    </div>
    <?php echo form_close(); ?>
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
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/zxing/zxing.min.js"></script>
<script type="text/javascript">
    window.addEventListener('load', function() {
        $('#myModal').modal('hide')
        let selectedDeviceId;
        let audio = new Audio("assets/audio/beep.mp3");
        const codeReader = new ZXing.BrowserQRCodeReader()
        console.log('ZXing code reader initialized')
        codeReader.listVideoInputDevices()
        .then((videoInputDevices) => {
            const sourceSelect = document.getElementById('sourceSelect')
            selectedDeviceId = videoInputDevices[0].deviceId
            if (videoInputDevices.length >= 1) {
                videoInputDevices.forEach((element) => {
                    const sourceOption = document.createElement('option')
                    sourceOption.text = element.label
                    sourceOption.value = element.deviceId
                    sourceSelect.appendChild(sourceOption)
                })
                sourceSelect.onchange = () => {
                    selectedDeviceId = sourceSelect.value;
                };
                const sourceSelectPanel = document.getElementById('sourceSelectPanel')
                sourceSelectPanel.style.display = 'block'
            }
            codeReader.decodeFromInputVideoDevice(selectedDeviceId, 'video').then((result) => {
                console.log(result)
                document.getElementById('result').textContent = result.text
                var firstValue = document.getElementById('result').textContent = result.text;
                if (result != null) {
                    audio.play();
                }
                $('#button').submit();
            }).catch((err) => {
                    console.error(err)
                    document.getElementById('result').textContent = err
                })
                console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
            })
            .catch((err) => {
                console.error(err)
            })
            
            $('#myModal').modal('show');
            
            
            setTimeout(function() {
                $('#myModal').modal('hide');
        }, 1500);
    })
</script> -->
<style>
    html {
        height: 100%;
    }

    body {
        font-family: sans-serif;
        padding: 0 10px;
        height: 100%;
        background: black;
        margin: 0;
    }

    h1 {
        color: white;
        margin: 0;
        padding: 15px;
    }

    #container {
        text-align: center;
        margin: 0;
    }

    #qr-canvas {
        margin: auto;
        width: calc(100% - 20px);
        max-width: 400px;
    }

    #btn-scan-qr {
        cursor: pointer;
    }

    #btn-scan-qr img {
        height: 10em;
        padding: 15px;
        margin: 15px;
        background: white;
    }

    #qr-result {
        font-size: 1.2em;
        margin: 20px auto;
        padding: 20px;
        max-width: 700px;
        background-color: white;
    }
</style>
<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
<div id="container">
    <h1>QR Code Scanner</h1>

    <a id="btn-scan-qr">
        <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
        <a />

        <canvas hidden="" id="qr-canvas"></canvas>

        <div id="qr-result" hidden="">
            <b>Data:</b> <span id="outputData"></span>
        </div>
</div>



<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/qrCodeScanner/qrCodeScanner.js"></script>