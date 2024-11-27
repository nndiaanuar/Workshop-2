<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sales_report.csv"');

$data = [
    ["Date", "Concert", "Tickets Sold", "Revenue"],
    ["2024-05-12", "RockFest 2024", "500", "$10,000"],
    ["2024-06-20", "Pop Night", "300", "$6,000"]
];

$output = fopen("php://output", "w");
foreach ($data as $row) {
    fputcsv($output, $row);
}
fclose($output);
exit;
?>
