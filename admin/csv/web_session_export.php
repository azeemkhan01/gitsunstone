<?php
include('../include/db.php');

//header to give the order to the browser
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=web-session-info.csv');

$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('id', 'name', 'mobile', 'email', 'experience', 'current_org', 'comment', 'remind','created_on'));

// fetch the data
$rows = mysql_query('select * from attend_web_session');

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
?>