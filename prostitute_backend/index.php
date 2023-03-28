<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Hnízdečko</title>
</head>
<body>
    <form action="new_prostitute.php" method="POST">

        <label for="name">Přezdívka dívky</label>
        <input type="text" id="name" name="name">

        <label for="age">Věk</label>
        <input type="number" id="age" name="age">

        <label for="weight">Váha</label>
        <input type="number" id="weight" name="weight">

        <label for="height">Výška</label>
        <input type="number" id="height" name="height">

        <input type="submit" value="Vytvořit">
    </form>

    <table>
        <tr>
            <th>Jméno</th>
            <th>Věk</th>
            <th>Váha</th>
            <th>Výška</th>
            <th>Smazat</th>
        </tr>
        
        <?php
            include('db_connect.php');

            $sql = 'SELECT ALL* FROM prostitutes';
            $db = mysqli_query($connect, $sql);
            
            while ($row = mysqli_fetch_assoc($db)) {
                echo '
                    <tr>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['age'].'</td>
                        <td>'.$row['weight'].' Kg</td>
                        <td>'.$row['height'].' cm</td>
                        <td><button><a href="delete.php?id='.$row['id'].'">Smazat</a></button></td>
                    </tr>
                ';
            }
        ?>

    </table>
</body>
</html>