<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"Task1"?></title>
</head>
<body>
    <?php
    $name = "Amr Sameh";
    echo "My Name Is : $name echo with double q" ; 
    echo "<br>";
    echo 'My Name Is : $name echo without double q' ;
    echo "<br>";
    echo 'my name is :' . "$name";
    echo "<br>";
    print("My name Is $name Print with double q");
    echo "<br>";
    print('My name Is $name Print without double q');
    var_dump($name);
    print_r($name);

    ?>
</body>
</html>