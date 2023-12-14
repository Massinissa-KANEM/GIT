<?php
    echo "Fidélité";
    if (isset($_GET['id'])) {
        echo " de l'utilisateur " . $_GET['id'];
    }else{
        echo " de l'utilisateur inconnu";
    }
?>