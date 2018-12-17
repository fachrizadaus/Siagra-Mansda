<style>
.pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style>

<div class="container-fluid">
    <div class="recent-report3 m-b-40">
        <div class="au-breadcrumb-right">
            <h3 class="title-5 m-b-15">Jadwal Pelajaran <?php echo "$data2[kelas]"; ?></h3>
        </div>
        <hr>
        <div id="example1" class="pdfobject-container">
            <embed class="pdfobject" type="application/pdf" style="overflow: auto; width: 100%; height: 100%;" internalinstanceid="5"
            src="http://localhost/Pemrograman%20Web/Tugas_Besar/document/jadwal_pelajaran_siswa/<?php echo "$data2[kelas]"; ?>.pdf">
        </div>
    </div>
</div>
