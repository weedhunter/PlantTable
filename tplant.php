<?php
require 'vendor/autoload.php'; // Load PhpSpreadsheet via Composer autoload

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Table;
use PhpOffice\PhpSpreadsheet\Worksheet\Table\TableStyle;

// Create new Spreadsheet object
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set header row
$sheet->setCellValue('A1', 'Seed Names');
$sheet->setCellValue('B1', 'Fertilizer');

// Set two rows of data
$sheet->setCellValue('A2', 'Corn');
$sheet->setCellValue('B2', 'NPK 15:15:15');

$sheet->setCellValue('A3', 'Wheat');
$sheet->setCellValue('B3', 'Urea');

// Define the table range including headers and data
$tableRange = 'A1:B3';

// Create a new table object
$table = new Table('Table1', $tableRange);

// Optionally set a table style
$tableStyle = new TableStyle();
$tableStyle->setName('TableStyleMedium9'); // Excel built-in style
$table->setStyle($tableStyle);

// Add the table to the worksheet
$sheet->addTable($table);

// Write the spreadsheet to a file
$writer = new Xlsx($spreadsheet);
$writer->save('SeedFertilizerTable.xlsx');

echo "Excel file with table created successfully.";
?>
