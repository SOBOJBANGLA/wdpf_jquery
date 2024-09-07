<?php $conn = new mysqli("localhost","root","","jq") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,th{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    $id = $_GET['id'];

    $sql = $conn->query("SELECT * FROM city WHERE id='$id'");

    //$result = $sql->fetch_assoc();

    //echo $result['name'].":".$result['details'];
    
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Details </th>
        </tr>

        <?php while($result = $sql->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['details'] ?></td>
            </tr>
           


            <?php } ?>
    </table>

    
</body>
</html>