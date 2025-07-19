<?php
function create_ministerinfo_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'ministerinfo';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255),
        email varchar(255),
        designation text,
        room_number varchar(100),
        office_number text,
        intercom varchar(100),
        residence_number varchar(100),
        status varchar(20),
        is_bold varchar(10),
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
