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

    <div>
        <label for="lampiran_srt_klr">Nama Instansi</label>
        <input type="text" id="nama_instansi_surat_keluar" name="nama_instansi_surat_keluar" type="text">
    </div>

    <br>
    <div>
        <button type="submit" name="submit" >Send data</button>
    </div>
</form>

<br>

<!-- view data -->

<table style="text-align:center" border="1" cellspacing="0" cellpadding="5" style="border-collapse : collapse">
    <tr>
        <th>Nomor Surat Keluar</th>
        <th>Perihal Surat Keluar</th>
        <th>Lampiran Surat Keluar</th>
        <th>Alamat Tujuan Surat Keluar</th>
        <th>Tanggal Surat Keluar</th>
        <th>Tujuan Instansi</th>
        <th>Disposisi</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data['surat'] as $srt):
    ?>
    <tr>
        <td><?= $srt['nomor_surat_keluar'] ?></td>
        <td><?= $srt['perihal_surat_keluar'] ?></td>
        <td><?= $srt['lampiran_surat_keluar'] ?></td>
        <td><?= $srt['alamat_tujuan'] ?></td>
        <td><?= $srt['tanggal_surat_keluar'] ?></td>
        <td><?= $srt['nama_instansi_surat_keluar'] ?></td>
        <td>
            <a href="<?= BASE_URL?>admin/disposisiKeluar/<?php echo $srt['id_surat_keluar'] ?>">Kirim / Lihat</a>
        </td>
        <td>
            <a href="<?= BASE_URL?>admin/deleteSuratKeluar/<?php echo $srt['id_surat_keluar'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
<!-- kerangka modal, sengaja taro paling bawah biar ga menuhin code. laigan dipanggil pake data-target -->

