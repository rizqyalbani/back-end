
    <h1>List Admin</h1>

    <p>
        <a href="<?= BASE_URL?>admin/register">Tambah Admin</a>
    </p>

    <?php foreach ($data['admin'] as $getData) : ?>
    <ul>
        <li>nama : <?=$getData['nama']?> </li>
        <li>nip : <?=$getData['nip']?> </li>
        <li>  <a href="<?=BASE_URL?>admin/deleteAdmin/<?=$getData['id_user']?>">Delete</a></li>
        <li>  <a href="<?=BASE_URL?>admin/updateAdmin/<?=$getData['id_user']?>">Update</a> </li>
    </ul>
    <?php endforeach ?>
