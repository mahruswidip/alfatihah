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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ZXing for JS">

    <title>ZXing TypeScript | Decoding from camera stream</title>

    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/normalize.css@8.0.0/normalize.css">
    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/milligram@1.3.0/dist/milligram.min.css">
</head>

<body>

    <main class="wrapper" style="padding-top:2em">

        <section class="container" id="demo-content">
            <h1 class="title">Scan QR Code from Video Camera</h1>

            <p>
                <a class="button-small button-outline" href="../../index.html">HOME 🏡</a>
            </p>

            <p>This example shows how to scan a QR code with ZXing javascript library from the device video camera. If more
                than one video input devices are available (for example front and back camera) the example shows how to read
                them and use a select to change the input device.</p>

            <div>
                <a class="button" id="startButton">Start</a>
                <a class="button" id="resetButton">Reset</a>
            </div>

            <div>
                <video id="video" width="300" height="200" style="border: 1px solid gray"></video>
            </div>

            <div id="sourceSelectPanel" style="display:none">
                <label for="sourceSelect">Change video source:</label>
                <select id="sourceSelect" style="max-width:400px">
                </select>
            </div>

            <div style="display: table">
                <label for="decoding-style"> Decoding Style:</label>
                <select id="decoding-style" size="1">
                    <option value="once">Decode once</option>
                    <option value="continuously">Decode continuously</option>
                </select>
            </div>

            <label>Result:</label>
            <pre><code id="result"></code></pre>

            <p>See the <a href="https://github.com/zxing-js/library/tree/master/docs/examples/qr-camera/">source code</a> for
                this example.</p>
        </section>

        <footer class="footer">
            <section class="container">
                <p>ZXing TypeScript Demo. Licensed under the <a target="_blank" href="https://github.com/zxing-js/library#license" title="MIT">MIT</a>.</p>
            </section>
        </footer>

    </main>

    <script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
    <script type="text/javascript">
        function decodeOnce(codeReader, selectedDeviceId) {
            codeReader.decodeFromInputVideoDevice(selectedDeviceId, 'video').then((result) => {
                console.log(result)
                document.getElementById('result').textContent = result.text
            }).catch((err) => {
                console.error(err)
                document.getElementById('result').textContent = err
            })
        }

        function decodeContinuously(codeReader, selectedDeviceId) {
            codeReader.decodeFromInputVideoDeviceContinuously(selectedDeviceId, 'video', (result, err) => {
                if (result) {
                    // properly decoded qr code
                    console.log('Found QR code!', result)
                    document.getElementById('result').textContent = result.text
                }

                if (err) {

                    if (err instanceof ZXing.NotFoundException) {
                        console.log('No QR code found.')
                    }

                    if (err instanceof ZXing.ChecksumException) {
                        console.log('A code was found, but it\'s read value was not valid.')
                    }

                    if (err instanceof ZXing.FormatException) {
                        console.log('A code was found, but it was in a invalid format.')
                    }
                }
            })
        }

        window.addEventListener('load', function() {
            let selectedDeviceId;
            const codeReader = new ZXing.BrowserQRCodeReader()
            console.log('ZXing code reader initialized')

            codeReader.getVideoInputDevices()
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

                    document.getElementById('startButton').addEventListener('click', () => {

                        const decodingStyle = document.getElementById('decoding-style').value;

                        if (decodingStyle == "once") {
                            decodeOnce(codeReader, selectedDeviceId);
                        } else {
                            decodeContinuously(codeReader, selectedDeviceId);
                        }

                        console.log(`Started decode from camera with id ${selectedDeviceId}`)
                    })

                    document.getElementById('resetButton').addEventListener('click', () => {
                        codeReader.reset()
                        document.getElementById('result').textContent = '';
                        console.log('Reset.')
                    })

                })
                .catch((err) => {
                    console.error(err)
                })
        })
    </script>

</body>

</html>