
    <h1>List Admin</h1>

    <p>
        <a href="<?= BASE_URL?>admin/register">Tambah Admin</a>
    </p>

    <?php foreach ($data['admin'] as $getData) : ?>
    <ul>
        <li>nama : <?=$getData['nama']?> </li>
        <li>nip : <?=$getData['nama']?> </li>
    </ul>
    <?php endforeach ?>
