<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include plugin_dir_path(__DIR__) . '../includes/handle-form.php';
    handle_ministerinfo_form();
}
?>

<div class="wrap">
    <h1 class="wp-heading-inline">Add Minister Info</h1>
    <form method="POST" action="">
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row"><label for="name">Name</label></th>
                    <td><input name="name" type="text" id="name" class="regular-text" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="email">Email</label></th>
                    <td><input name="email" type="email" id="email" class="regular-text" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="designation">Designation</label></th>
                    <td><input name="designation" type="text" id="designation" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="room_number">Room Number</label></th>
                    <td><input name="room_number" type="text" id="room_number" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="office_number">Office Number</label></th>
                    <td><input name="office_number" type="text" id="office_number" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="intercom">Intercom</label></th>
                    <td><input name="intercom" type="text" id="intercom" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="residence_number">Residence Number</label></th>
                    <td><input name="residence_number" type="text" id="residence_number" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="status">Status</label></th>
                    <td>
                        <select name="status" id="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Bold</th>
                    <td>
                        <label><input type="radio" name="is_bold" value="Yes"> Yes</label><br>
                        <label><input type="radio" name="is_bold" value="No" checked>No</label>

                    </td>
                </tr>
            </tbody>
        </table>

        <?php submit_button('Submit'); ?>
    </form>
</div>
