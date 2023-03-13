<?php 

session_start();
$safe_password = $_SESSION['password'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe password generator</title>
</head>
<body>
    <?php if(!empty($safe_password)) :?>
    <div>
    <h2>La password generata è: <?=$safe_password?></h2>
    <?php endif ?>
    <a href="./">Torna indietro</a>
</div>

</body>
</html>