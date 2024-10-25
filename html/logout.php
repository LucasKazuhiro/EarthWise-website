<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    session_destroy();
    $_SESSION['trava'] = '0';

    header("Location: /");
?>