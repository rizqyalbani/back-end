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

<br>

<!-- view data -->

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
        <td><?= $srt['nomor_surat_keluar'] ?></td>
        <td><?= $srt['perihal_surat_keluar'] ?></td>
        <td><?= $srt['lampiran_surat_keluar'] ?></td>
        <td><?= $srt['alamat_tujuan'] ?></td>
        <td><?= $srt['tanggal_surat_keluar'] ?></td>
        <td>
            <!-- modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDisposisi">
                Lihat Disposisi
            </button>
        </td>
    </tr>
    <?php endforeach ?>
</table>
<!-- kerangka modal, sengaja taro paling bawah biar ga menuhin code. laigan dipanggil pake data-target -->
<!-- Modal -->
<div class="modal fade" id="modalDisposisi" tabindex="-1" role="dialog" aria-labelledby="modalDisposisi" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Disposisi">Disposisi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
