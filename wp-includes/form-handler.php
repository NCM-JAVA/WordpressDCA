<?php
function minister_info_form_page() {
    ?>
    <div class="wrap"><h2>Add Minister Info</h2>
    <form method="post">
        <?php wp_nonce_field('ministerinfo_nonce_action', 'ministerinfo_nonce'); ?>

        <label>Name:</label><input type="text" name="name" class="widefat"><br>
        <label>Email:</label><input type="email" name="email" class="widefat"><br>
        <label>Designation:</label><input type="text" name="designation" class="widefat"><br>
        <label>Room Number:</label><input type="text" name="room_number" class="widefat"><br>
        <label>Office Number:</label><input type="text" name="office_number" class="widefat"><br>
        <label>Intercom:</label><input type="text" name="intercom" class="widefat"><br>
        <label>Residence Number:</label><input type="text" name="residence_number" class="widefat"><br>
        <label>Status:</label>
        <select name="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select><br>
        <label><input type="radio" name="is_bold" value="Yes"> Bold</label>
        <label><input type="radio" name="is_bold" value="No" checked> Normal</label><br><br>

        <button class="button-primary" type="submit" name="submit_ministerinfo">Submit</button>
    </form>
    </div>
    <?php
}

add_action('admin_init', function() {
    if (isset($_POST['submit_ministerinfo']) && check_admin_referer('ministerinfo_nonce_action', 'ministerinfo_nonce')) {
        global $wpdb;
        $table = $wpdb->prefix . 'ministerinfo';
        $wpdb->insert($table, [
            'name' => sanitize_text_field($_POST['name']),
            'email' => sanitize_email($_POST['email']),
            'designation' => sanitize_text_field($_POST['designation']),
            'room_number' => sanitize_text_field($_POST['room_number']),
            'office_number' => sanitize_text_field($_POST['office_number']),
            'intercom' => sanitize_text_field($_POST['intercom']),
            'residence_number' => sanitize_text_field($_POST['residence_number']),
            'status' => sanitize_text_field($_POST['status']),
            'is_bold' => sanitize_text_field($_POST['is_bold']),
        ]);
    }
});
