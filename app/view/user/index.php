
    <h1>Daftar Surat</h1>
    <?php
        $hitungan = count($data['user']);
        $a = 0;
    ?>
    <?php foreach($data['user'] as $user) : ?>
    <ul>
        <li>Tanggal : <?php echo $user['tanggal']?></li>
        <li>Tanggal Penyelesaian : <?php echo $user['tanggal_penyelesaian']?></li>
        <li>No Agenda : <?php echo $user['no_agenda']?></li>
        <li>Perihal : <?php echo $data['perihal'][$a]['perihal_surat_masuk'] ?></li>
        <li>Instruksi : <?php echo $user['instruksi']?></li>
        <li>jenis disposisi : <?=$data['jenis_disposisi'][$a]?></li>
        <li>Surat dari Instansi : <?php echo $data['suratAsal'][$a]['nama_instansi_surat_masuk'] ?></li>
        <li>
            <?php
                $d = strtotime($user['postedTime']);
                echo date("D, d-m-Y H:i:s", $d)
            ?>
        </li>
        <li>
            Status Diterima :
            <select name="" id="">
                <option value="">diterima</option>
                <option value="">belum diterima</option>
            </select>
        </li>
    </ul>
    <?php $a++?>
    <?php endforeach ?>
