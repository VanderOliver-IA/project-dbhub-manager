<?php
// Suppression to avoid the warning shown in user screenshot
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

function adminer_object() {
    class AdminerSBHUB extends Adminer {
        function name() { return "🚀 SBHUB - Central Manager (v1.1)"; }
        function credentials() {
            // Updated to postgres as user for better compatibility
            return array("pgsql", "187.77.34.1", "postgres", "");
        }
        function database() { return "db_hub"; }
    }
    return new AdminerSBHUB;
}

// Ensure the redirect pre-fills the system as pgsql
if (!isset($_GET['pgsql'])) {
    header("Location: ./?pgsql=187.77.34.1&username=postgres&db=db_hub");
    exit;
}

include "./adminer.php";
?>
