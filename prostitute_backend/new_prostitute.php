<?php
    include('db_connect.php');

    echo '
        <button><a href="index.php">Zpět na hlavní stránku</a></button>
    ';

    if ($sql = $connect->prepare('SELECT id FROM prostitutes WHERE name = ?')) {
        $sql->bind_param('s', $_POST['name']);
        $sql->execute();
        $sql->store_result();
        
        if ($sql->num_rows > 0) {
            echo 'Dívku s tímto jménem již vlastníte.';
            $sql->close();
            exit;
        }
        $sql->close();
    }

    if ($sql = $connect->prepare('INSERT INTO prostitutes (name, age, weight, height) VALUES (?, ?, ?, ?)')) {
        $sql->bind_param('ssss', $_POST['name'], $_POST['age'], $_POST['weight'], $_POST['height']);
        $sql->execute();
        
        echo 'Dívka úspěšně přidána!';
        $sql->close();
    } else {
        echo 'No... propustit, nebo zkusit znovu!';
    }
?>