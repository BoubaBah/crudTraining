<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $user_id = $_GET['id'];
    include_once '../connect_ddb.php';
    $sgl = "DELETE FROM utilisateur WHERE user_id = $user_id";

    if (mysqli_query($conn, $sgl)) {
        header("Location: showUser.php");
    } else {
        header("Location: showUser.php");
    }
    ?>








</body>

</html>