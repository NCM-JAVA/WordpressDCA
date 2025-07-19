<?php
function handle_ministerinfo_form() {
    global $wpdb;
    $table = $wpdb->prefix . 'ministerinfo';

    // Sanitize form inputs
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $designation = sanitize_text_field($_POST['designation']);
    $room_number = sanitize_text_field($_POST['room_number']);
    $office_number = sanitize_textarea_field($_POST['office_number']);
    $intercom = sanitize_text_field($_POST['intercom']);
    $residence_number = sanitize_text_field($_POST['residence_number']);
    $status = sanitize_text_field($_POST['status']);
    $is_bold = isset($_POST['is_bold']) ? sanitize_text_field($_POST['is_bold']) : 'No';

    $wpdb->insert(
        $table,
        [
            'name' => $name,
            'email' => $email,
            'designation' => $designation,
            'room_number' => $room_number,
            'office_number' => $office_number,     
            'intercom' => $intercom,
            'residence_number' => $residence_number,
            'status' => $status,
            'is_bold' => $is_bold,
            'post_name' =>$post_name,
        ],
        [ 
            '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s'
        ]
    );
}
// Delete logic
if (isset($_GET['delete_id'])) {
    global $wpdb;
    $wpdb->delete($wpdb->prefix . 'ministerinfo', ['id' => intval($_GET['delete_id'])]);
}

?>









