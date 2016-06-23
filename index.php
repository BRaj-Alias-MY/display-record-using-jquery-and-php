<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	
<script>
$(document).ready(function(){
 $("#btn_submit").click(function(){
	var employeeId = $("#employeeId").val();
	   $.ajax({
                        url: 'process.php',
                        type: 'post',
                        data: {
                            "employeeId": employeeId,
                            
                        },
                        success: function(response) {
                           
                            $("#result").html(response);
							//alert($("#ename").val())
							$("#employeeName").val($("#ename").val());
							$("#designation").val($("#desg").val());
						 $("#empSalary").val($("#salary").val());
						 
							
                           // $("#result").html(response);
                        }
               });
	 
	 
 });	
	
});
	
</script>	
</head>
<body>

	 <div class="container">
  <div class="jumbotron">
    <h1>Display Record using jQuery and PHP (AJAX)</h1> 
     
</div>
	</div>
		 
	<div class="container">
  <h2>Display Record using jQuery and PHP</h2>
  <div class="panel panel-default">
    <div class="panel-body">Enter Employee ID : </div>
	   <div class="panel-body">
		   <input type="text" value="" name="employeeId" id="employeeId" value="" class="form-control"/><br>
		   <input type="text" value="" name="employeeName" id="employeeName" value="" class="form-control"/><br>
		   
		   <input type="text" value="" name="designation" id="designation" value="" class="form-control"/><br>
		    
		   <input type="text" value="" name="empSalary" id="empSalary" value="" class="form-control"/><br>
		   
		   
		   
		   
	  <button type="button" name="btn_submit" id="btn_submit" class="btn btn-primary">Show Record</button>
	 <br>
		   <div id="result"></div>
	  </div>
  </div>
</div>

	 
</body>

</html>