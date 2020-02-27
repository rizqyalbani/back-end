<?php print_r($data); ?>
<h1>Hello This is admin</h1>
<!-- Nomor surat masuk -->
<form action="<?= BASE_URL . $data['process'] ?>" method="POST">
    <div>
        <label for="nmr_srt_msk">Nomor surat masuk</label>
        <input id="nmr_srt_msk" name="nmr_srt_msk" type="text">
    </div>
    <br>
    <!-- Tanggal surat masuk -->
    <div>
        <label for="tgl_srt_msk">Tanggal surat masuk</label>
        <input id="tgl_srt_msk" name="tgl_srt_msk" type="text">
    </div>
    <br>
    <!-- Alamat Pengirim -->
    <div>
        <label for="alamat_srt_msk">Alamat Pengirim</label>
        <input id="alamat_srt_msk" name="alamat_srt_msk" type="text">
    </div>
    <br>
    <!-- perihal -->
    <div>
        <label for="perihal_srt_msk">Perihal Surat Masuk</label>
        <input id="perihal_srt_msk" name="perihal_srt_msk" type="text">
    </div>
    <br>
    <!-- lampiran dokumen -->
    <div>
        <label for="lampiran_srt_msk">Lampiran Surat Masuk</label>
        <input id="lampiran_srt_msk" name="lampiran_srt_msk" type="text">
    </div>
    <br>
    <!-- disposisi surat msk -->
    <div>
        <label for="disposisi_srt_msk">Disposisi Surat Masuk</label>
        <input id="disposisi_srt_msk" name="disposisi_srt_msk" type="text">
    </div>
    <div>
        <button type="submit" name="submit" >Send data</button>
    </div>
</form>