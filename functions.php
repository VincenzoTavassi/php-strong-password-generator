<?php

function create_password($length) {
    $password = [];

    for ($i = 0; $i < $length; $i++) {
        $carattere = chr(rand(33, 126));
        $password[] = $carattere;
    }
    $password = implode('', $password);
    return $password;
}

?>