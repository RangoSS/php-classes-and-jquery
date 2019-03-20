

<head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!--icons-->
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->

<?php include "heds.php";?>
</head>

<header>

</header>

	<div class="container" >
       <h1 style="margin-left: 400px;">Create New<small>user</small></h1>
	</div>
<form  class="form-horizontal" method="post" action="testingCreatingUser.php"  >
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control isnumber" id="name" maxlength="30" name="names"  style="margin-bottom: 10px" type="text"  />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> surname<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control isnumber" id="surname" name="surname"  style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Occupation<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <select id="jobs" name="jobs" onchange="occupationType(this.value);" class="input-md textinput textInput form-control" style="margin-bottom: 10px;">
                                <option value="">--job type--</option>
                                <option value="HR">HR</option>
                                <option value="EXECUTIVE">EXECUTIVE</option>
                                <option value="PROGRAMMER">PROGRAMMER</option>
                                <option value="FINANCE">FINANCE</option>
                                <option value="PROCUREMENT">PROCUREMENT</option>
                                <option value="DAILYLOTTO">DAILY LOTTO</option>
                                 </select>
                            </div>
                        </div>
                        <!-- select if you are permanent or tempral-->
                        <div class="control col-md-8"style="margin-left: 120px;">
                        <div id="perm_infos" class="form-group required">
                            <label for="id_gender"  class="control-label col-md-4  requiredField"> Specific<span class="asteriskField">*</span> </label>
                            <!--radio buttons-->
                            <div class="controls col-md-8 "  style="margin-bottom: 10px;">
                                 <label class="radio-inline"> <input onchange="checkPlayType(this.value);" type="radio" name="jobType"  value="tempral"  style="margin-bottom: 10px">Tempral</label>
                                 <label class="radio-inline"> <input onchange="checkPlayType(this.value);" type="radio" name="jobType"  value="permanent"  style="margin-bottom: 10px">Permanet </label>
                            </div>
                            <!--end radio buttons-->
                        </div>
                         <div id="permanent_info" class="controls col-md-8" style="margin-left: 250px;display:none;">
                              <p id="manualEntry" >you have a benefits of car and house allowance<small>your salary will depends on perfomance</small>but when you die you will  pay your debts when you wake up <b>ENTER TAX NUMBER</b>
                               <!--this is the textbox wich is going to hides too-->
                                <input type="text" id="tax_input" name="tax_input" class="input-md textinput textInput form-control" 
                                style="width:200px;"/>
                                
                             
                                
                          </div>
                           <!--if is tempral comes here and switch off permanent-->
                           <div id="temp_info" class="controls col-md-8" style="margin-left: 250px; display:none;" >
                                 <label>start date</label><input type="date" id="date1" name="date1" class="input-md textinput textInput form-control"/>
                                 <label>end date</label><input type="date" id="date2" name="date2" class="input-md textinput textInput form-control" style="margin-bottom: 10px;"/>

                                </div>
                             
                             <div id="manualnumbersview" style="text-align: center;"></div><!-- div for displaying entered--></p>   
                   
                            
                            
                        <!--this pharagraph hides itself if is permanet-->
                             

                               

                            
                            
                        

                        <!--end-->
                        <div id="div_id_password2" class="form-group required">
                             <label for="id_password2" class="control-label col-md-4  requiredField"> Ticket Boards<span class="asteriskField">*</span> </label>

                             <!--<div class="controls col-md-8 ">-->
                                <div class="controls col-md-8 " > 
                                <select id="numberofboardsperticket" class="input-md textinput textInput form-control" style="margin-bottom: 10px;">
   
                                 </select>
                        
                        </div>
                    </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField">Number of Tickets<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control isnumber" id="numberofwagers" name="numberofwagers"  style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                     
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                                
                            </div>
                        </div> 
                    </form>
                </div>

                <script type="text/javascript">
                	var currentSelevtedVal;
                    function checkPlayType(selectedVal){
                       $("jobType").val();
                       if(selectedVal=="tempral"){
                        currentSelevtedVal="tempral";
                        $("#temp_info").show();
                        $("#permanent_info").hide();
                       } 
                       else{
                        currentSelevtedVal="permanent";
                        $("#temp_info").hide();
                        $("#permanent_info").show();
                       }  
                    }
                		
                	
                	
                </script>


