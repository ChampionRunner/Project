<?php
	session_start();
	if(isset($_SESSION['success']))
	{
		
?>
	<script type="text/javascript">
		alert("File downloaded successfully");
	</script>
<?php
	}
	session_destroy();
?>

<html>
   <head>
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css
      <link rel="stylesheet" href="module2.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

   </head>
   <body>
      <div class="card-content">
         <span class="card-title">
            <div>
               <center>
                  <h4>Scheduler</h4>
               </center>
               <div class="row">
                  <form class="col s8" method="POST"  action="" name="form1" style="margin-left:33%;">
                     <div class="row">
                        <div class="col s6">
                           <!--<input id="cols"  value="<?php// if(isset($_POST['cols'])){ echo $_POST['cols']; }?>" required type="text" name="cols" placeholder="No. of Columns" oninput="this.form.submit()" autofocus>-->
							<select style="width:15%" id="wdays"  value="<?php if(isset($_POST['wdays'])){ echo $_POST['wdays']; }?>" name="wdays" oninput="this.form.submit()">
<option>Choose no. of working days.</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
</select>
						</div>
                        <br><br><br>
                  </form>
                  <form class="col s8" method="POST" action="process.php" name="form2" style="margin-left:2%;">
                  <?php
                     if ( ! empty($_POST['wdays'])){
                      $wdays = $_POST['wdays'];
                     
                     ?>
                  <input id="wdays" name="wdays" value="<?php echo $wdays;?>" type="hidden" >
				  
                  <?php
                   //  while($cols>0)
                    // {
                     	?>
                  <div class="row">
                  <div class="input-field col s4">
                  			<select style="width:15%" id="holidays"   name="holidays">
	<option>Choose no. of holidays.</option>
	
	<?php
	$days = array("Sun", "Mon", "Tue","Wed","Thurs","Fri","Sat");
	
	$a=$wdays;
	$a=7-$a;
	
	$w=0;
	$i=0;
$temp=0;
while($w<7)
{
	
	$index=$a;	
	
	if($flag){$i=$temp;}
	
	?>
	<option value="<?php echo $i;?> ">
	<?php
	
	while($index--)
	{
		if($i>6){$i=0;}
		echo $i;
		echo $days[$i++];
		$flag=true;
	}
	
	?></option>

 
	<?php

$temp++;	
$w++;
	}
	?>
	</select>
                  </div>
                 
                  <?php
                     //$cols--;
                     //}		
                     }
                     ?>
                <!-- <button class="waves-effect waves-light btn blue" target="_blank" onclick="create(name)" style="margin-left:0%;">Create Spreadsheet</button>  -->	
            
			<br>
			<br>
			<br>
			 </form>
			<form class="col s8" method="POST" action="process1.php" name="form1" enctype="multipart/form-data">
                  <input type="file" name="file231" />		
                  <input value="Download Spreadsheet" id="submit" name="submit" type="submit" class="waves-effect waves-light btn blue"/>		
                  </div>
                  </form>
               </div>
            </div>
         </span>
      </div>
   </body>
</html>