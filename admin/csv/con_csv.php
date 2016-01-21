<?php 
include('../include/db.php');

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=counselling-form-info.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
// fputcsv($output, array('Column 1', 'Column 2', 'Column 3'));
fputcsv($output, array('id', 'name','email','contact','ques_1','ques_2','ques_3','counselor_to_know_about_you','created_on'));

// fetch the data
$rows = mysql_query('select * from counselling_form');

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
?>