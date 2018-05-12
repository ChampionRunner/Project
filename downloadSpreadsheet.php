<?php
require_once "PHPExcel-1.8/Classes/PHPExcel.php";

if (isset($_POST['column']))
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
	$file->save('helloWorld.xlsx');
	header('Location:module1.php');
	}
  else
	{
	echo error;
?>
	<script type="javascript">
		alert("Please enter the no. of columns");
</script>
<?php
	header('Location:module1.php');
	}

?>