<h1>Hello This is admin</h1>
<h2><?=$data['judul']?></h2>
<!-- form -->

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

    <div>
        <label for="lampiran_srt_msk">Nama Instansi</label>
        <input type="text" id="nama_instansi_surat_masuk" name="nama_instansi_surat_masuk" type="text">
    </div>

    <br>
    
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
        <th>Nama Instansi</th>
        <th>Disposisi</th>
        <th>Aksi</th>
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
        <td><?= $srt['nama_instansi_surat_masuk'] ?></td>
        <td>
          <a href="<?=BASE_URL?>admin/lihatDisposisi/<?=$srt['id_surat_masuk']?>">Kirim/Lihat</a>
        </td>
        <td>
          <a onclick="confirm('Are you sure want to delete this?')" href="<?=BASE_URL?>admin/deleteSuratMasuk/<?=$srt['id_surat_masuk']?>">Delete</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>

<!-- kerangka modal, sengaja taro paling bawah biar ga menuhin code. laigan dipanggil pake data-target -->