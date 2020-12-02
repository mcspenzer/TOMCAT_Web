<?php

require('../../assets/ext/fpdf/fpdf.php');

if (isset($_GET['borrow'])) {
    if ($_GET['borrow'] == 'T') {

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        // Logo
        $pdf->Image('../../assets/img/tomcat.jpg', 10, 6, 30);
        $pdf->Cell(80);
        // Title
        $pdf->Cell(30, 10, 'TOMCAT INFORMATION MANAGEMENT SYSTEM', 0, 0, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(80);
        $pdf->Cell(30, 10, 'Borrower\'s report', 0, 0, 'C');


        $pdf->Ln(20);


        $pdf->Cell(10);

        // Column widths
        $w = array(15, 35, 35, 40, 45);

        // Set headers
        $headers = array("Log ID", "Item Name", "Borrower", "External Borrower", "Date Borrowed");

        for ($i = 0; $i < count($headers); $i++) {
            $pdf->Cell($w[$i], 7, $headers[$i], 1, 0, 'C');
        }

        $pdf->SetFont('Courier', '', 8);


        $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

        $sql_select = "SELECT b.borrow_log_id, b.borrow_log_date_modified, i.item_name, CONCAT(u.user_last_name, ', ', u.user_first_name) AS \"item_borrower\" , b.borrow_log_item_borrower_external
        FROM borrow_log b
        LEFT JOIN items i ON b.borrow_log_item_borrowed = i.item_id
        LEFT JOIN users u ON b.borrow_log_borrower = u.user_id
        ORDER BY b.borrow_log_date_created ASC";

        $sql_resultSet = mysqli_query($database, $sql_select);



        if (!isset($sql_resultSet)) {
            echo "Error fetching items";
        } else {
            if (mysqli_num_rows($sql_resultSet) == 0) {
                echo "No borrows yet";
            } else {
                $jsonArray = array();

                while ($row = mysqli_fetch_assoc($sql_resultSet)) {
                    array_push($jsonArray, $row);
                }

                foreach ($jsonArray as $row) {
                    $pdf->Ln();
                    $pdf->Cell(10);
                    $pdf->Cell($w[0], 6, $row['borrow_log_id'], 1, 0, 'C');
                    $pdf->Cell($w[1], 6, $row['item_name'], 1, 0, 'C');
                    $pdf->Cell($w[2], 6, $row['item_borrower'], 1, 0, 'C');
                    $pdf->Cell($w[3], 6, $row['borrow_log_item_borrower_external'], 1, 0, 'C');
                    $pdf->Cell($w[4], 6, $row['borrow_log_date_modified'], 1, 0, 'C');
                    // var_dump($row);
                }
            }
        }

        $pdf->Output();
    }
} else {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Logo
    $pdf->Image('../../assets/img/tomcat.jpg', 10, 6, 30);
    $pdf->Cell(80);
    // Title
    $pdf->Cell(30, 10, 'TOMCAT INFORMATION MANAGEMENT SYSTEM', 0, 0, 'C');
    $pdf->Ln(10);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(80);
    $pdf->Cell(30, 10, 'Returner\'s report', 0, 0, 'C');


    $pdf->Ln(20);


    $pdf->Cell(10);

    // Column widths
    $w = array(15, 35, 35, 40, 45);

    // Set headers
    $headers = array("Log ID", "Item Name", "Returner", "External Returner", "Date Returned");

    for ($i = 0; $i < count($headers); $i++) {
        $pdf->Cell($w[$i], 7, $headers[$i], 1, 0, 'C');
    }

    $pdf->SetFont('Courier', '', 8);


    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $sql_select = "SELECT b.return_log_id, b.return_log_date_modified, i.item_name, CONCAT(u.user_last_name, ', ', u.user_first_name) AS \"item_returner\", b.return_log_item_returner_external
    FROM return_log b
        LEFT JOIN items i ON b.return_log_item_returned = i.item_id
        LEFT JOIN users u ON b.return_log_item_returner = u.user_id
        ORDER BY b.return_log_date_created DESC";

    $sql_resultSet = mysqli_query($database, $sql_select);



    if (!isset($sql_resultSet)) {
        echo "Error fetching items";
    } else {
        if (mysqli_num_rows($sql_resultSet) == 0) {
            echo "No borrows yet";
        } else {
            $jsonArray = array();

            while ($row = mysqli_fetch_assoc($sql_resultSet)) {
                array_push($jsonArray, $row);
            }

            foreach ($jsonArray as $row) {
                $pdf->Ln();
                $pdf->Cell(10);
                $pdf->Cell($w[0], 6, $row['return_log_id'], 1, 0, 'C');
                $pdf->Cell($w[1], 6, $row['item_name'], 1, 0, 'C');
                $pdf->Cell($w[2], 6, $row['item_returner'], 1, 0, 'C');
                $pdf->Cell($w[3], 6, $row['return_log_item_returner_external'], 1, 0, 'C');
                $pdf->Cell($w[4], 6, $row['return_log_date_modified'], 1, 0, 'C');
                // var_dump($row);
            }
        }
    }

    $pdf->Output();
}
