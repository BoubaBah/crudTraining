<?Php
if (isset($_POST['send'])) {
  if (
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    $_POST['username'] != "" &&
    $_POST['username'] != ""
  ) {
    include_once '../connect_ddb.php';
    extract($_POST);
    $sql = "INSERT INTO utilisateur (username, email) VALUES ('$username', '$email')";
    if (mysqli_query($conn, $sql)) {
      header("Location: showUser.php");
    } else {
      header("Location: addUser.php");
    }
  } else {
    header("Location: addUser.php");
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <form action="" method="post">
    <h1>Ajouter un utilisateur</h1>
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Ajouter" name="send">
    <a class="link back" href="showUser.php">Annuler</a>
  </form>
</body>

</html>