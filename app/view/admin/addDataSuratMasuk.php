<h1>Hello This is admin</h1>
<h2><?=$data['judul']?></h2>
<!-- form -->
<?php echo BASE_URL . $data['process'] ?>
<form action="<?php echo BASE_URL . $data['process'] ?>" method="POST">
    <div>
        <!-- Nomor surat masuk -->
        <label for="nmr_srt_msk">Nomor surat masuk</label>
        <input type="text" id="nmr_srt_msk" name="nmr_srt_msk" type="text">
    </div>
    <br>
    <!-- Tanggal surat masuk -->
    <div>
        <label for="tgl_srt_msk">Tanggal surat masuk</label>
        <input type="date" id="tgl_srt_msk" name="tgl_srt_msk" type="text">
    </div>
    <br>
    <!-- Alamat Pengirim -->
    <div>
        <label for="alamat_srt_msk">Alamat Pengirim</label>
        <input type="text" id="alamat_srt_msk" name="alamat_srt_msk" type="text">
    </div>
    <br>
    <!-- perihal -->
    <div>
        <label for="perihal_srt_msk">Perihal Surat Masuk</label>
        <input type="text" id="perihal_srt_msk" name="perihal_srt_msk" type="text">
    </div>
    <br>
    <!-- lampiran dokumen -->
    <div>
        <label for="lampiran_srt_msk">Lampiran Surat Masuk</label>
        <input type="text" id="lampiran_srt_msk" name="lampiran_srt_msk" type="text">
    </div>
    <br>
    <!-- disposisi surat msk -->
    <div>
        <label for="disposisi_srt_msk">Disposisi Surat Masuk</label>
        <input type="text" id="disposisi_srt_msk" name="disposisi_srt_msk" type="text">
    </div>
    <div>
        <button type="submit" name="submit" >Send data</button>
    </div>
</form>
<!-- end form -->
<table style="text-align:center" border="1" cellspacing="0" cellpadding="5" style="border-collapse : collapse">
    <tr>
        <th>Nomor Surat Keluar</th>
        <th>Perihal Surat Keluar</th>
        <th>Lampiran Surat Keluar</th>
        <th>Alamat Tujuan Surat Keluar</th>
        <th>Tanggal Surat Keluar</th>
        <th>Disposisi Surat Keluar</th>
    </tr>
    <?php
        foreach($data['surat'] as $srt):
    ?>
    <tr>
        <td><?= $srt['nomor_surat_masuk'] ?></td>
        <td><?= $srt['perihal_surat_masuk'] ?></td>
        <td><?= $srt['lampiran_surat_masuk'] ?></td>
        <td><?= $srt['alamat_pengirim'] ?></td>
        <td><?= $srt['tanggal_surat_masuk'] ?></td>
        <td>
          <a href="<?=BASE_URL?>admin/disposisi/<?=$srt['id_surat_masuk']?>">Kirim disposisi</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>

<!-- kerangka modal, sengaja taro paling bawah biar ga menuhin code. laigan dipanggil pake data-target -->