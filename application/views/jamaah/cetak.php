<!-- <form action="<?php echo site_url() . 'jamaah/edit' . $jamaah['id_jamaah'] ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating">QR</label>
                <input type="text" name="qr_code" value="<?php echo ($this->input->post('qr_code') ? $this->input->post('qr_code') : $jamaah['qr_code']); ?>" class="form-control" id="qr_code" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating">Nama Jamaah</label>
                <input type="text" name="nama_jamaah" value="<?php echo ($this->input->post('nama_jamaah') ? $this->input->post('nama_jamaah') : $jamaah['nama_jamaah']); ?>" class="form-control" id="nama_jamaah" />
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success pull-right">Tambah</button>
    <div class="clearfix"></div>
</form> -->

<!-- <div class="row">
    <div class="col">
        <div class="card" style="width:638px; height: 1000px;">
            <div class="card-body bg-warning">
                <div class="container">
                    <h1>ID Card Nih</h1>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div id="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; width: 500px;
        padding-left: 25px; padding-top: 10px;">
    <strong>Codepedia.info</strong>
    <hr />
    <h2 style="color: #3e4b51;">
        Html to canvas, and canvas to proper image
    </h2>
    <p style="color: #3e4b51;">
        <b>Codepedia.info</b> is a programming blog. Tutorials focused on Programming ASP.Net,
        C#, jQuery, AngularJs, Gridview, MVC, Ajax, Javascript, XML, MS SQL-Server, NodeJs,
        Web Design, Software
    </p>
    <p style="color: #3e4b51;">
        <b>html2canvas</b> script allows you to take "screenshots" of webpages or parts
        of it, directly on the users browser. The screenshot is based on the DOM and as
        such may not be 100% accurate to the real representation as it does not make an
        actual screenshot, but builds the screenshot based on the information available
        on the page.
    </p>
</div>
<input id="btn-Preview-Image" type="button" value="Preview" />
<a id="btn-Convert-Html2Image" href="#">Download</a>
<input type="button" value="Preview & Convert" id="btnConvert">
<br />
<h3>Preview :</h3>
<div id="previewImg">
</div>

<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script type="text/javascript">
    $("#btn_convert").on('click', function() {
        html2canvas(document.getElementById("html-content-holder"), {
            allowTaint: true,
            useCORS: true
        }).then(function(canvas) {
            var anchorTag = document.createElement("a");
            document.body.appendChild(anchorTag);
            document.getElementById("previewImg").appendChild(canvas);
            anchorTag.download = "filename.jpg";
            anchorTag.href = canvas.toDataURL();
            anchorTag.target = '_blank';
            anchorTag.click();
        });
    });
</script>