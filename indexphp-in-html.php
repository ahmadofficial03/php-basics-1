<!-- PHP DIRECTLY IN HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
    echo "Hello World"
    ?></h1>
    <h2><?php
        $x = 20;
        $y = 10;

        echo $x . "," . $y;
    ?></h2>

    <?php
        $x = 10;
        $y = 5;

        echo '<p>' . $x . ',' . $y . '</p>'
    ?>
</body>
</html>