<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: 2px solid black
        }
    </style>
</head>

<body>
    <table>

        <?php
        for ($j = 1; $j <= 9; $j++) {
        ?>
            <tr>
                <?php
                for ($i = 1; $i <= 9; $i++) {
                ?>
                    <td><?= "${i}*${j}=" . $i * $j ?></td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>