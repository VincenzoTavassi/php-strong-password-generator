<?php 
include __DIR__ . "./functions.php";

$lunghezza = $_GET['lunghezza'] ?? '';

if(!empty($lunghezza)) {
    $safe_password = create_password($lunghezza);
    session_start();
    $_SESSION['password'] = $safe_password;
    header('Location: ./result.php');
    exit;
}

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
    
<form method="get">
    <input type="number" name="lunghezza" id="lunghezza">
    <button>INVIA</button>
    <!-- < // ?php if(!empty($safe_password)) :?>
    <div>
    <h2>La password generata è: <// ?=$safe_password?></h2>
    <// ?php endif ?> -->
</div>
</form>

</body>
</html>