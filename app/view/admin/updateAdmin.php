<form action="<?= BASE_URL; ?>admin/processUpdate" method="POST">
    <input value="<?=$data['admin'][0]['id_user']?>" name="id" type="text">
    <label for=""> Username</label>
    <input type="text" value="<?=$data['admin'][0]['nama']?>" name="username">
    
    <label for=""> Password</label>
    <input type="password" name="password">

    <label for=""> nip</label>
    <input type="number" value="<?=$data['admin'][0]['nip']?>" name="nip">

    <input type="hidden" value ="1" name="id_role">

    <button type="submit" name="submit">Update </button>
  </form>