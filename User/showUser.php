<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <div class="link_container">
            <a class="link" href="addUser.php">ajouter un utilisateur</a>
        </div>

        <table>
            <thead>

                <?php
                include_once '../connect_ddb.php';

                $sql = "SELECT * FROM utilisateur";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                ?>
                    <tr>
                        <th>nom</th>
                        <th>email</th>
                        <th>modifier</th>
                        <th>supprimer</th>
                    </tr>
            </thead>
            <tbody>

                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td class="image"><a href="modifyUser.php?id=<?= $row['user_id'] ?>"><img src="../images/write.png" alt=""></a></td>
                        <td class="image"><a href="deleteUser.php?id=<?= $row['user_id'] ?>"><img src="../images/remove.png" alt=""></a></td>

                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>


                    </tr>
            </tbody>
        </table>



    </main>




</body>

</html>