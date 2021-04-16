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
<form action="" method="get">
    <input type="number" name="score"
           min="0" max="100"
           value="<?= $_GET['score'] ?? '' ?>">
    <input type="submit">
</form>

<?php if(isset($_GET['score'])){
    $s = intval($_GET['score']);
    $n = intval($s/10);

    switch($n){
        case 10:
        case 9:
            $g = 'A';
            break;
        case 8:
            $g = 'B';
            break;
        case 7:
            $g = 'C';
            break;
        case 6:
            $g = 'D';
            break;
        default:
            $g = 'F';
    }

    echo "<h2>{$g}</h2>";


} ?>




</body>
</html>