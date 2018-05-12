<?php
include 'PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

$inputFileType = 'Excel2007';
$inputFileName = 'helloWorld.xlsx';
?>
<html>
<head>
<title><?php
echo $inputFileName; ?>
</title>
</head>
</html>
<?php
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'HTML');
$objWriter->save('php://output');
exit;
?>