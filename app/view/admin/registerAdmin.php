
  <form action="<?= BASE_URL; ?>admin/register" method="POST">
    <label for=""> Username</label>
    <input type="text" name="username">
    
    <label for=""> Password</label>
    <input type="password" name="password">

    <label for=""> nip</label>
    <input type="number" name="nip">

    <input type="hidden" value ="2" name="id_role">

    <button type="submit" name="submit">Daftar </button>
  </form>
