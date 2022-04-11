<?php
$connection = mysqli_connect(/*where*/"localhost", /*name*/"root", /*password*/"", "root");

if($connection){
    echo "Succesfully Connected ";
} else {
     exit("Failed to connect");
}

$query = "SELECT * FROM airport";

$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AwesomeAirtport</title>
</head>
<body>
    <p>
    <?php   
        while($row = mysqli_fetch_row($result)) {
            print_r($row);
        }
        while($row)
    ?>
</body>
</html>