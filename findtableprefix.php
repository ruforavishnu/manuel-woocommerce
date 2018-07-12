<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require "$root/wp-blog-header.php";

    function get_table_prefix() {
        global $wpdb;
        $table_prefix = $wpdb->prefix . "outsider_plugin";
        return $table_prefix;
    }
    // echo get_table_prefix();
?>