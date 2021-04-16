<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <?php for($i=0; $i<10; $i++): ?>
    <tr>
        <td><?= $i+1 ?></td>
    </tr>
    <?php endfor; ?>
</table>


</body>
</html>