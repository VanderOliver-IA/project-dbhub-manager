<?php
// SBHUB Manager - Auto-Configured for Adminer
function adminer_object() {
    class AdminerSBHUB extends Adminer {
        function name() { return '🚀 SBHUB - Central Manager'; }
        function credentials() {
            // return array(driver, server (IP), username, password)
            // Leave password empty to let user fill it for security
            return array('pgsql', '187.77.34.1', 'admin', '');
        }
        function database() { return 'db_hub'; }
    }
    return new AdminerSBHUB;
}
// Require the actual adminer file
include "./adminer.php";
?>
