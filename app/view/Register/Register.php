<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form action="<?= BASE_URL; ?>Register/Register" method="POST">
    <label for=""> Username</label>
    <input type="text" name="username">
    
    <label for=""> Password</label>
    <input type="password" name="password">

    <label for=""> nip</label>
    <input type="number" name="nip">

    <input type="hidden" value ="2" name="id_role">

    <button type="submit" name="submit">Daftar </button>
  </form>
  </body>
</html>