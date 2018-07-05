<!DOCTYPE html>

<?php
	
	if(isset($_POST['wdays']))
	{
?>
	<script type="text/javascript">
		alert("File downloaded successfully");
	</script>
<?php
	}
	
?>

<html lang="en">
   <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="module2.css">
	  
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>View Students</title>
   </head>
   <body>
      
      <div class="container" style="border:none;">
         <div class="row">
            <div class="" style="margin-left:-18%;width:145%;">
               <div id="main" class="card">
                  <div class="card-content">
                     <span class="card-title">
                        <h5><b>Define CAlender</b></h5>
                        <div>
                           <form method="POST" action="" name="form1">
                              <p>
                          
                            <h5><b>Select no. of working days</b></h5>
                              
							  
							  
                              <div class="input-field col s3">
                                 <select   value="<?php if(isset($_POST['wdays'])){ echo $_POST['wdays']; }?>" onchange="this.form1.submit();" id="wdays" name="wdays" >
                                    <option value=""  selected>Select no. of days</option>
									 <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    
                                 </select>
                              </div>
                              
							  <br>
                              <br><br>
							  
							  <div class="input-field col s3">
                                 <select multiple name="Standard[]" multiple >
                                    <option value="" disabled selected>Select Non-working days</option>
                                    <option value="1"> Sunday</option>
                                    <option value="2">Monday</option>
                                    <option value="3">Tuesday</option>
                                    <option value="4">Wednesday</option>
                                    <option value="5">Thursday</option>
                                    <option value="6">Friday</option>
                                    <option value="7">Saturday</option>
                                 </select>
                              </div>
							  <br>
							  <br><br>
							  
							  <h5><b>Upload holiday list</b></h5>
                              
                            
                             <input class="waves-effect waves-light btn blue" type="button" name="upload" value="Upload file" />
                            
                              
                              <br>	
                              <br>	
                              <input class="waves-effect waves-light btn blue" type="submit" name="submit" value="Submit" />
                              <br>
                              <br>
                           </form>
                           </p>
                          
                        </div>
                  </div>
                  </span>
               </div>
            </div>
         </div>
      </div>
      </div> 
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script src="app.js"></script>
      <script>
         $(document).ready(function(){
           // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
           $('.modal').modal();
         });
         
         $(document).ready(function() {
           $('select').material_select();
         });
              $(".button-collapse").sideNav();
         
               // Init Sidenav
               $('.button-collapse').sideNav();
           
      </script>
      <script>
         $('.datepicker').pickadate({
         selectMonths: true, // Creates a dropdown to control month
         selectYears: 15, // Creates a dropdown of 15 years to control year,
         today: 'Today',
         clear: 'Clear',
         close: 'Ok',
         closeOnSelect: false // Close upon selecting a date,
         });
      </script>
   </body>
</html>