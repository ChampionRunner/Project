<?php
require_once "PHPExcel-1.8/Classes/PHPExcel.php";
session_start();

if (isset($_POST['column']))
	{
	if (isset($_POST['submit']))
	{		
	$cols = $_POST["column"];
	$col_name = $_POST["name"];

	// $data = $_POST["data"];

	$excel = new PHPExcel();
	$n = sizeof($col_name);
	echo $w = $cols;
	$col = 'A';
	$array_index = 0;
	while ($w--)
		{
		for ($i = 1; $i < 3; $i++)
			{

			// echo $col.$i.$col_name[$array_index++];

			$excel->getActiveSheet()->setCellValue($col . $i, $col_name[$array_index++]);
			}

		$col++;
		}

	$file = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$file->save('download.xlsx');
	$_SESSION['success']='true';
	header('Location:scheduler.php');
	
	}
	
	
	if (isset($_POST['submit1']))
	{
		include 'PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
		
		$cols = $_POST["column"];
	$col_name = $_POST["name"];

	// $data = $_POST["data"];

	$excel = new PHPExcel();
	$n = sizeof($col_name);
	echo $w = $cols;
	$col = 'A';
	$array_index = 0;
	while ($w--)
		{
		for ($i = 1; $i < 3; $i++)
			{

			// echo $col.$i.$col_name[$array_index++];

			$excel->getActiveSheet()->setCellValue($col . $i, $col_name[$array_index++]);
			}

		$col++;
		}

	$file = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$file->save('create.xlsx');
	//$_SESSION['success']='true';
	
		

		$inputFileType = 'Excel2007';
		$inputFileName = 'create.xlsx';
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
	}
	}
  else
	{
	echo error;
?>
	<script type="javascript">
		alert("Please enter the no. of columns");
</script>
<?php
	header('Location:scheduler.php');
	}

?>
