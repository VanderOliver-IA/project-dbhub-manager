<?php
// Silencer to avoid the PHP warning from the user's screenshot
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

function adminer_object() {
    class AdminerSBHUB extends Adminer {
        function name() { return '🚀 SBHUB - Central Manager'; }
        function credentials() {
            // return array(driver, server, username, password)
            return array('pgsql', '187.77.34.1', 'admin', '');
        }
        function database() { return 'db_hub'; }
    }
    return new AdminerSBHUB;
}

// Redirect to Postgres login page if no system selected
if (!isset($_GET['pgsql'])) {
    header("Location: ./?pgsql=187.77.34.1&username=admin&db=db_hub");
    exit;
}

include "./adminer.php";
?>
