<?php
    session_start();
    session_destroy();
    header('Location:/sucus_pg/index.php');
?>