<h1>Lihat Disposisi</h1>
    <?php
        // print_r($data['disposisi']);
        $a = 0;
        foreach ($data['disposisi'] as $disposisi) : 
     ?>
        <ul>
            <li>Tanggal : <?=$data['disposisi'][$a]['tanggal'] ?></li>
            <li>Tanggal penyelesaian : <?=$data['disposisi'][$a]['tanggal_penyelesaian'] ?></li>
            <li>No agenda : <?=$data['disposisi'][$a]['no_agenda'] ?></li>
            <li>perihal : <?=$data['disposisi'][$a]['no_agenda'] ?></li>
            <li>instruksi : <?=$data['disposisi'][$a]['instruksi'] ?></li>
            <li>Jenis Disposisi : <?=$data['jenis'][$a] ?></li>
            <li>Surat dari Instansi : <?=$data['asal'][$a] ?></li>
            <li>User : <?=$data['user'][$a]['nama'] ?></li>
            <li>Dikirim pada : <?=$data['disposisi'][$a]['postedTime'] ?></li>
            <li>Status Surat : <?=$data['status'][$a] ?> </li>
            <li><a href="<?=BASE_URL?>Admin/deleteDisposisi/<?=$disposisi['id_disposisi']?>">Hapus Disposisi</a></li>
            <li><a href="<?=BASE_URL?>Admin/editDisposisi/<?=$disposisi['id_disposisi']?>">Edit</a></li>
            
        </ul>
        
    <?php
        $a++;
        endforeach;
    ?>
    <a href="<?= BASE_URL?>admin/disposisi/<?= $data['id_surat']?>">Tambah Disposisi</a>