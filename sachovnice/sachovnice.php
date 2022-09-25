<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Šachovnice</title>
</head>
<body>
<style>
    body {
    margin-top: 0px;
    background-color: white;
}
td {
    height: 50px; 
    width: 50px;
}

.white {
    background-color: white;
}

.black {
    background-color: black;
}

table {
    margin-left: auto;
    margin-right: auto;
}
</style>
    <table>
        <?php
            for ($row=1; $row<=8;$row++) {
                echo "<tr>";
                for ($colum=1;$colum<=8;$colum++) {
                    $total=$row+$colum;
                    if ($total%2==0) {
                        echo "<td class='white'></td>";
                    } else {
                        echo "<td class='black'></td>";
                    }
                } echo "</tr>";
            }
        ?>
    </table>
</body>
</html>