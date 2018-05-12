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
?>

<html>
   <head>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="module1.css">
      <!-- Compiled and minified JavaScript -->
   </head>
   <body>
      <div class="card-content">
         <span class="card-title">
            <div>
               <center>
                  <h4>Scheduler</h4>
               </center>
               <div class="row">
                  <form class="col s8" method="POST" action="" name="form1" style="margin-left:33%;">
                     <div class="row">
                        <div class="col s6">
                           <input id="cols"  value="<?php if(isset($_POST['cols'])){ echo $_POST['cols']; }?>" required type="text" name="cols" placeholder="No. of Columns" oninput="this.form.submit()" autofocus>
                        </div>
                        <br><br><br>
                  </form>
                  <form class="col s8" method="POST" action="downloadSpreadsheet.php" name="form2" style="margin-left:2%;">
                  <?php
                     if ( ! empty($_POST['cols'])){
                      $cols = $_POST['cols'];
                     
                     ?>
                  <input id="cols" name="column" value="<?php echo $cols;?>" type="hidden" >
                  <?php
                     while($cols>0)
                     {
                     	?>
                  <div class="row">
                  <div class="input-field col s4">
                  <input placeholder="Column name"  name="name[]" type="text" required>
                  </div>
                  <div class="input-field col s4">
                  <input placeholder="Data Value"  name="name[]" type="text" required>
                  </div>
                  </div>
                  <?php
                     $cols--;
                     }		
                     }
                     ?>
                  <a class="waves-effect waves-light btn blue" target="_blank" href="createSpreadsheet.php" style="margin-left:0%;">Create Spreadsheet</a>  
                  <input value="Download Spreadsheet" id="submit"  name="submit" type="submit" class="waves-effect waves-light btn blue"/>		
                  </div>
                  </form>
               </div>
            </div>
         </span>
      </div>
   </body>
</html>