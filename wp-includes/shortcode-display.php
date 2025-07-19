<?php
function ministerinfo_shortcode_display() {
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}ministerinfo ORDER BY id DESC");

    if (empty($results)) return '<p>No minister info found.</p>';

    $output = '<table border="1" cellpadding="10"><thead><tr>
        <th>Name</th><th>Email</th><th>Designation</th><th>Status</th>
    </tr></thead><tbody>';

    foreach ($results as $row) {
        $style = $row->is_bold === 'Yes' ? 'font-weight:bold;' : '';
        $output .= "<tr style='$style'>
            <td>{$row->name}</td>
            <td>{$row->email}</td>
            <td>{$row->designation}</td>
            <td>{$row->status}</td>
        </tr>";
    }

    $output .= '</tbody></table>';
    return $output;
}
add_shortcode('ministerinfo_list', 'ministerinfo_shortcode_display');
