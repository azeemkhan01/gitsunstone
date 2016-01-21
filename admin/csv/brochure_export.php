<?php
include('../include/db.php');

//header to give the order to the browser
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=brochure-info.csv');

$output = fopen('php://output', 'w');

// output the column headings
// fputcsv($output, array('Column 1', 'Column 2', 'Column 3'));
fputcsv($output, array('id', 'name', 'email', 'mobile', 'experience', 'company', 'query', 'created_on'));

// fetch the data
$rows = mysql_query('select * from download_brochure');

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
?>