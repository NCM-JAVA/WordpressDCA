<?php
global $wpdb;
$table_name = $wpdb->prefix . 'ministerinfo';
$results = $wpdb->get_results("SELECT * FROM $table_name");

echo "<h2>Manage Minister Info</h2><table class='widefat'><thead>
<tr><th>Name</th><th>Designation</th><th>Email</th><th>Room</th><th>Office</th><th>Actions</th></tr></thead><tbody>";

foreach ($results as $row) {
    echo "<tr>
        <td>{$row->name}</td>
        <td>{$row->designation}</td>
        <td>{$row->email}</td>
        <td>{$row->room_number}</td>
        <td>{$row->office_number}</td>
        <td>
            <a href='?page=minister-info-form&edit_id={$row->id}'>Edit</a> |
            <a href='?page=manage-ministerinfo&delete_id={$row->id}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
        </td>
    </tr>";
}
echo "</tbody></table>";
