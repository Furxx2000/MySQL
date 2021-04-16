<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width:30px;
            height: 30px;
        }
    </style>
</head>
<body>

<table>
    <?php for($i=0; $i<16; $i++): ?>
    <tr>
        <?php for($k=0; $k<16; $k++):
        $c = sprintf('#%X%X00%X%X', $k, $k. $i, $i);
        ?>
        <td style="background-color: <?= $c ?>;">&nbsp;</td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>


</body>
</html>