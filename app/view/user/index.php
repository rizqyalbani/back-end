
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
        <li>Jenis surat : <?php echo $data['jenisSurat'][$a]?></li>
        <li>
            <?php
                $d = strtotime($user['postedTime']);
                echo date("D, d-m-Y H:i:s", $d)
            ?>
        </li>
        <li>
            <form action="<?=BASE_URL?>Home/updateStatus/<?=$user['id_disposisi']?>" method="POST">
                Status Diterima :
                <select name="status">
                    <option <?php echo $data['status'][$a]['id_status'] == 1 ? '' : 'selected' ?> value= "1">Belum Diterima </option>
                    <option <?php echo $data['status'][$a]['id_status'] == 1 ? '' : 'selected' ?> value="2">Diterima </option>
                </select>
                <button onclick="alert('You have Changed the status of your Disposisi')" type="submit" name="submit">Submit</button>
            </form>
        </li>
    </ul>
    <?php $a++?>
    <?php endforeach ?>
