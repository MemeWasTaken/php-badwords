<?php 
    $par = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';
    $badword = $_GET['badword'];
    $censured = str_replace($badword, '***', $par)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paragraph</h1>
    <p> <?php echo $par ?> </p>
    <h1>Paragraph censured</h1>
    <p><?php echo $censured ?></p>
    <h1>Length Uncensured</h1>
    <p><?php strlen($par) ?></p>
    <h1>Length Censured</h1>
    <p><?php strlen($censured) ?></p>
</body>
</html>