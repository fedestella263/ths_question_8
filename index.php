<!doctype html>
<html lang="en">
	<head>
		<title>Tower House Studio | Question 8</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="main-box" class="container bg-info">
			<div class="row">
				<div class="col">
					<div class="row">
						<label class="col-sm-5 col-form-label">Value 1:</label>
						<div class="col-sm-7">
							<input id="input-value1" class="form-control" type="text">
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<label class="col-sm-5 col-form-label">Value 2:</label>
						<div class="col-sm-7">
							<input id="input-value2" class="form-control" type="text">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<label class="col col-form-label">Operation</label>
			</div>
			<div class="form-group row">
				<div class="col">
					<select id="select-operation" class="form-control">
						<option value="sum">Sum</option>
						<option value="subtraction">Subtraction</option>
						<option value="division">Division</option>
						<option value="multiplication">Multiplication</option>
					</select>
				</div>
				<div class="col">
					<button id="button-calculate" type="button" class="btn float-right btn-success">Calculate</button>
				</div>
			</div>
			<div class="row">
				<label class="col col-form-label">Result: <span id="output-result"></span></label>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>