<?php
if (!isset($_GET['username'])) {
    header("Location: /?pgsql=187.77.34.1&username=admin&db=db_hub");
    exit;
}
include "adminer_core.php";
?>
