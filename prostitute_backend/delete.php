<?php
    include('db_connect.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM prostitutes WHERE id = $id";
        $row = mysqli_query($connect, $sql);
        if ($row) {
            echo "Dívka byla z vašeho seznamu vymazána.";
        } else {
            echo "Chyba!";
        }
    } else {
        echo "Ajaja, už to skoro bylo...";
    }
?>

<button><a href="index.php">Zpět</a></button>