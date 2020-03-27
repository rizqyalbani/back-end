<h1>Send disposisi</h1>
<form action="<?php echo BASE_URL . $data['process']?>" method="POST">
    <input value="<?php echo $data['surat_masuk']['id_surat_masuk'] ?>" id="id_surat_masuk" name="id_surat_masuk" type="hidden"> <br>

    <label for="agenda">No Agenda</label>
    <input id="agenda" name="agenda" type="number"> <br>

    <label for="tanggal">Tanggal</label>
    <input id="tanggal" name="tanggal" type="date"> <br>

    <label for="tanggal_penyelesaian">Tanggal Penyelesaian</label></label>
    <input id="tanggal_penyelesaian" name="tanggal_penyelesaian" type="date"> <br>

    <label for="instruksi">Instruksi</label>
    <input id="instruksi" name="instruksi" type="text"> <br>

    <label for="jenis_disposisi">Jenis Disposisi</label>
    <select id="jenis_disposisi" name="jenis_disposisi" type="text">
        <option selected hidden value="Jenis">-Jenis-</option>
        <?php
            // print_r($data['jDisposisi']);
            foreach($data['jDisposisi'] as $show):
        ?>
        <option value="<?= $show['id_jenis_disposisi']?>"><?=$show['jenis_disposisi']?></option>
        <?php
            endforeach;
        ?>
    </select> <br>

    <label for="user">User</label>
    <select id="user" name="user" type="text">
        <option selected hidden value="0">-user-</option>
        <?php
            // print_r($data['jDisposisi']);
            foreach($data['user'] as $showUser):
        ?>
        <option value="<?= $showUser['id_user']?>"><?=$showUser['nama']?></option>
        <?php
            endforeach;
        ?>
    </select> <br>
    <button type="submit">Kirim Disposisi</button>
</form>
<!-- <option value=""></option> -->
        <?php
            // for ($i=0; $i < count($data['jDisposisi']) ; $i++) { 
                
            //     foreach ($data['jDisposisi'][ $keys[$i] ] as $key => $value) {
            //         echo "<br>";
            //         echo $value["jenis_disposisi"];
            //     }
            // }
        ?>
