<!-- belom dibuat backend surat keluarnya -->
<h1>Hello This is admin</h1>
<h2><?= $data['judul'] ?></h2>
<!-- Nomor surat keluar -->
<form action="<?php echo BASE_URL . $data['process'] ?>" method="POST">
    <div>
        <label for="nmr_srt_klr">Nomor surat keluar</label>
        <input type="text" id="nmr_srt_klr" name="nmr_srt_klr" type="text">
    </div>
    <br>
    <!-- Tanggal surat keluar -->
    <div>
        <label for="tgl_srt_klr">Tanggal surat keluar</label>
        <input type="date" id="tgl_srt_klr" name="tgl_srt_klr" type="text">
    </div>
    <br>
    <!-- Alamat Pengirim -->
    <div>
        <label for="alamat_srt_klr">Alamat Tujuan</label>
        <input type="text" id="alamat_srt_klr" name="alamat_srt_klr" type="text">
    </div>
    <br>
    <!-- perihal -->
    <div>
        <label for="perihal_srt_klr">Perihal Surat keluar</label>
        <input type="text" id="perihal_srt_klr" name="perihal_srt_klr" type="text">
    </div>
    <br>
    <!-- lampiran dokumen -->
    <div>
        <label for="lampiran_srt_klr">Lampiran Surat keluar</label>
        <input type="text" id="lampiran_srt_klr" name="lampiran_srt_klr" type="text">
    </div>
    <br>
    <!-- disposisi surat klr -->
    <div>
        <label for="disposisi_srt_klr">Disposisi Surat keluar</label>
        <input type="text" id="disposisi_srt_klr" name="disposisi_srt_klr" type="text">
    </div>
    <div>
        <button type="submit" name="submit" >Send data</button>
    </div>
</form>