<h1>Lihat Disposisi</h1>
    <?php
        $a = 0;
        foreach ($data['disposisi'] as $disposisi) : 
     ?>
        <ul>
            <li>Tanggal : <?=$data['disposisi'][0]['tanggal'] ?></li>
            <li>Tanggal penyelesaian : <?=$data['disposisi'][0]['tanggal_penyelesaian'] ?></li>
            <li>No agenda : <?=$data['disposisi'][0]['no_agenda'] ?></li>
            <li>perihal : <?=$data['disposisi'][0]['no_agenda'] ?></li>
            <li>instruksi : <?=$data['disposisi'][0]['instruksi'] ?></li>
            <li>Jenis Disposisi : <?=$data['jenis'][$a] ?></li>
            <li>Surat dari Instansi : <?=$data['asal'][$a] ?></li>
            <li>User : <?=$data['user'][$a]['nama'] ?></li>
            <li>Status Surat : Belum Diterima</li>
            <li><a href="<?=BASE_URL?>Admin/deleteDisposisi/<?=$disposisi['id_disposisi']?>">Hapus Disposisi</a></li>
            
        </ul>
        
    <?php
        $a++;
        endforeach;
    ?>
    <a href="<?= BASE_URL?>admin/disposisi/<?= $data['id_surat']?>">Tambah Disposisi</a>