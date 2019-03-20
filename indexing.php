<head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!--icons-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script type="text/javascript" src="script/scripting.js"></script>
<script type="text/javascript" src="script/numericInput.min.js"></script> <!--library for nummeric values-->
</head>
<body>
	
	<div id="container" style="width:80%;height:200px;border-bottom:1px;">
		<div id="jumbo" style="margin-left: 500px">
			<h1>medicine Stock<small>pr</small></h1>
		</div>
	</div>

	<div id="display" style="margin-left: 500px;">enter medicine details</div>
	<div id="infos">
		<form style="margin-left: 500px;">
		  	<table>
		  		<thead>
		  			<tr>
		  			<th>medicine name</th>
		  			<th>quantity</th>
		  		</tr>
		  		</thead>
		  		<tbody>
		  		<tr>
		  			
		  			<td><input type="text" id="name" name="name"placeholder="enter medicine name"/> </td>
		  			<td><input type="text" id="qty" name="qty"placeholder="enter medicine quantity"/> </td>
		  		</tr>
		   
		  		<tr>
		  			<input type="submit" value="submmit"/>
		  		</tr>
		  		</tbody>
		  	</table>
		</form>
	</div>
	</div>
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<tr>
					<th>#</th>
					<th>medicine name</th>
					<th>available</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
				<tr>
					<td>1</td>
					<td>CombiFlame</td>
					<td>45</td>
					<td><a href="#" class="btn btn-info">edit</a> </td>
					<td><a href="#" class="btn btn-danger">delete</a></td>
				</tr>
			</table>
	</div>
</body>