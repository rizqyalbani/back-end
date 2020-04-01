
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$data['title']?> </title>
  </head>
  <body>

  <form action="<?= BASE_URL; ?>proses/register" method="POST">
    <label for=""> Username</label>
    <input type="text" name="username">
    
    <label for=""> Password</label>
    <input type="password" name="password">

    <label for=""> nip</label>
    <input type="number" name="nip">

    <input type="hidden" value ="2" name="id_role">

    <button type="submit" name="submit">Daftar </button>
  </form>
