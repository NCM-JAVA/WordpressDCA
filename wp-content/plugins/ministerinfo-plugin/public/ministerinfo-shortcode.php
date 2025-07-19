<?php
function ministerinfo_shortcode() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'ministerinfo';

    // Fetch all ministers
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY name ASC");

    if (empty($results)) {
        return "<p>No minister information found.</p>";
    }

    ob_start();
    ?>

    <style>
        .ministerinfo-container {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .ministerinfo-title {
            font-weight: bold;
            font-size: 22px;
            margin: 20px 0 10px;
            color: #333;
        }

        .ministerinfo-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .ministerinfo-table th,
        .ministerinfo-table td {
            border: 1px solid #ccc;
            padding: 10px 12px;
            text-align: left;
        }

        .ministerinfo-table th {
            background-color: #004466;
            color: #fff;
        }

        .ministerinfo-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .ministerinfo-pagination {
            text-align: center;
            margin: 15px 0;
        }

        .ministerinfo-pagination button {
            background-color: #004466;
            color: white;
            border: none;
            padding: 8px 12px;
            margin: 0 4px;
            cursor: pointer;
            border-radius: 4px;
        }

        .ministerinfo-pagination button.active {
            background-color: #0077aa;
        }

        .ministerinfo-pagination button:hover {
            background-color: #005580;
        }
    </style>

    <div class="ministerinfo-container">
        <div class="ministerinfo-title">Minister for Consumer Affairs, Food & Public Distribution</div>

        <table class="ministerinfo-table" id="ministerinfo-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Office No.</th>
                    <th>Intercom</th>
                    <th>Email ID</th>
                    <th>Room No.</th>
                    <th>Organisation</th>
                    <th>Post</th>
                    <th>Vision</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?php echo esc_html($row->name); ?></td>
                        <td><?php echo esc_html($row->designation); ?></td>
                        <td><?php echo nl2br(esc_html($row->office_number)); ?></td>
                        <td><?php echo esc_html($row->intercom); ?></td>
                        <td><?php echo esc_html($row->email); ?></td>
                        <td><?php echo esc_html($row->room_number); ?></td>
                        <td><?php echo esc_html($row->organisation); ?></td>
                        <td><?php echo esc_html($row->post); ?></td>
                        <td><?php echo esc_html($row->vision)?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="ministerinfo-pagination" id="ministerinfo-pagination"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const rowsPerPage = 5;
            const table = document.getElementById("ministerinfo-table");
            const tbody = table.querySelector("tbody");
            const rows = tbody.querySelectorAll("tr");
            const pagination = document.getElementById("ministerinfo-pagination");

            const totalPages = Math.ceil(rows.length / rowsPerPage);

            function showPage(page) {
                let start = (page - 1) * rowsPerPage;
                let end = start + rowsPerPage;

                rows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? "" : "none";
                });

                // Highlight active button
                Array.from(pagination.children).forEach(btn => {
                    btn.classList.remove("active");
                });
                if (pagination.children[page - 1]) {
                    pagination.children[page - 1].classList.add("active");
                }
            }

            function createPagination() {
                for (let i = 1; i <= totalPages; i++) {
                    const btn = document.createElement("button");
                    btn.textContent = i;
                    btn.addEventListener("click", () => showPage(i));
                    pagination.appendChild(btn);
                }
            }

            createPagination();
            showPage(1);
        });
    </script>
    

    <?php
    return ob_get_clean();
}

add_shortcode('ministerinfo', 'ministerinfo_shortcode');
