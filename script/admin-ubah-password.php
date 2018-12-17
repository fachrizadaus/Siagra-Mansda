<div class="recent-report3 col-lg-12 m-b-40">
    <form class="" action="" method="post">
        <!-- Ubah Password Form -->
        <b>Ubah Kata Sandi Anda</b>
        <div class="form-group">
            <div class="row">
                <label class="col-sm-4" for="p_nama">Kata Sandi Lama</label>
                <div class="col-sm-8">
                    <input value="" placeholder="" id="old_pass" type="password" name="old_pass" class="au-input--style2" style="min-width: 100%;"> <br>
                    <small class="text-muted" id="old_passwd">Masukkan Kata Sandi Lama Anda</small>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4" for="p_nama">Kata Sandi Baru</label>
                <div class="col-sm-8">
                    <input value="" placeholder="" id="new_pass" type="password" name="new_pass" class="au-input--style2" style="min-width: 100%;"> <br>
                    <small class="text-muted" id="new_passwd">Masukkan Kata Sandi Baru Anda</small>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4" for="p_nama">Ulangi Kata Sandi Baru</label>
                <div class="col-sm-8">
                    <input value="" placeholder="" id="conf_new_pass" name="conf_new_pass" type="password" class="au-input--style2" style="min-width: 100%;"> <br>
                    <small class="text-muted" id="repeat_newpasswd">Ulangi Kata Sandi Baru Anda</small>
                </div>
            </div>
        </div>
        <input type="submit" name="simpan" value="Ubah Password" class="au-btn au-btn-icon au-btn--purple au-btn--small">
        <input type="reset" name="reset" value="Hapus" class="au-btn au-btn-icon au-btn--red au-btn--small">
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $kataSandiLama = $_POST['old_pass'];
    $kataSandiBaru = $_POST['new_pass'];
    $confKataSandi = $_POST['conf_new_pass'];

    if ($kataSandiBaru !== $confKataSandi) {
        ?>
        <script type="text/javascript">
            alert("Kata Sandi Tidak Sama!");
        </script>
        <?php
    } else {
        //mysqli_query($con, "select username from akun where username = '$inUser' and password = '$inPass'");
        $querySlcAkunAdmin = "select * from akun where username like 'admin'";
        $result = mysqli_query($con, $querySlcAkunAdmin) or die (mysqli_error($con));
        $exist = mysqli_fetch_array($result);
        $cnt = mysqli_num_rows($result);

        if ($cnt == 1) {
            if ($exist['password'] == $kataSandiLama) {
                $queryUpdatePassAdmin = "update akun set password = '$kataSandiBaru' where username = 'admin'";
                mysqli_query($con, $queryUpdatePassAdmin) or die (mysqli_error($con));
                echo "<script type='text/javascript'>alert('Password Berhasil Diubah!');</script>";
                ?>
                <script type="text/javascript">
                window.location.href = 'logout.php';
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Password Salah!");
                </script>
                <?php
            }
        }
    }
}
 ?>
