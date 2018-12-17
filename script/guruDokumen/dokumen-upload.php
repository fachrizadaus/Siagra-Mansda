<div class="col-lg-12">
    <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>

        <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
        }, false);
        })
        ();
        </script>
        <div class="card">
            <div class="card-header">
                <strong>Upload Dokumen</strong>
            </div>
            <div class="card-body card-block">
                <small>Pilih File</small>
                <input type="text" class="form-control" id="fileName" name="fileName" placeholder="Nama File" required>
                <br>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="dokumenUp" accept="application/pdf" required>
                    <label class="custom-file-label" for="fotoGuru">
                        <!-- <span></span> -->
                    </label>
                    <div class="invalid-feedback">Pilih File Terlebih Dahulu!</div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm" name="submit">
                    <i class="zmdi zmdi-cloud-upload"></i> Upload
                </button>
            </div>
        </div>
    </form>
</div>
<?php include 'upload-process.php'; ?>
