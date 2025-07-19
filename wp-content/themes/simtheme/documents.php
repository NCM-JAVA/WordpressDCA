<?php /* Template Name: documents */ ?>
<?php get_header();?>
<?php the_content(); ?>
   
<?php
global $wpdb;

$table_name = $wpdb->prefix . 'custom_upload'; // Use the dynamic table prefix

// Set how many results to display per page
$items_per_page = 2;

// Get the current page from the query variable
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Calculate the offset for the query
$offset = ($paged - 1) * $items_per_page;

// Get the total number of results to calculate total pages
$total_items = $wpdb->get_var("SELECT COUNT(*) FROM `wp_custom_upload`");
$total_pages = ceil($total_items / $items_per_page);

// Query to fetch limited results based on the current page
$results = $wpdb->get_results($wpdb->prepare("SELECT * FROM `wp_custom_upload` LIMIT %d OFFSET %d", $items_per_page, $offset));

if (!empty($results)) {
    echo '<div style="display: flex; justify-content: center; margin-top: 20px;">'; // Container to center the table
    echo '<div style="overflow-x:auto; width:100%; max-width:1100px;">'; // Responsive container with horizontal scroll on smaller screens
    echo '<table class="wp-list-table widefat fixed striped" style="background-color:#f5f5f5;width:100%!important;">'; // Adjust the width as necessary
    echo '<thead style="background-color:black;color:white;"><tr><th>S.No.</th><th>Title</th><th>Action</th><th>Uploaded At</th></tr></thead>';
    echo '<tbody>';

    foreach ($results as $row) {
        $upload_date = date('d-m-Y', strtotime($row->uploaded_at)); // Format to show only the date
        echo '<tr>';
        echo '<td>' . esc_html($row->S_No) . '</td>';
        echo '<td>' . esc_html($row->title) . '</td>';
        echo '<td><a href="' . esc_url($row->file_url) . '" target="_blank" style="color:black!important;">' . esc_html($row->file_name) . '</a></td>';
        echo '<td>' . esc_html($upload_date) . '</td>';

        echo '</tr>';
    }

    echo '</tbody></table>';
    echo '</div>'; // Close the responsive container
    echo '</div>'; // Close the container div for centering

    /* Pagination links
    echo '<div style="text-align: center; margin-top: 20px;">';
    echo paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total' => $total_pages,
        'current' => $paged,
        'format' => '?paged=%#%',
		//'format' => '?paged=%#%',
        'show_all' => false,
        'end_size' => 2,
        'mid_size' => 2,
        
    ));*/
	
	
    
	echo '</div>';
	
	
} 

?>

<?php get_footer();?>