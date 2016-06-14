	<!DOCTYPE html>
	<html>
	<head>
		<title>::::</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
	
	</body>
	</html>
	Bnjour;
	<hr />

	<?php require_once('./config.php'); ?>
	normal test<br />
	<form action="charge.php" method="post">
	  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	          data-key="<?php echo $stripe['publishable_key']; ?>"
	          data-description="Access for a year"
	          data-amount="1000"
	          data-locale="auto"></script>
	</form>
	<br />
	with CURL
	<hr />

	<form action="chargeCurl.php" method="post" class="form-horizontal" role="form">
	<div class="form-group col-sm-10">
		<label for="email">Email address:</label>
		<input type="email" name="email" id="email" class="form-control" required="true" />
		</div>
		<div class="form-group col-sm-10">
		<label for="exp_month">exp_month:</label>
		<input type="number" name="exp_month" id="exp_month" class="form-control" required="true"/>
		</div>
		<div class="form-group col-sm-10">
		<label for="exp_year">exp_year:</label>
		<input type="number" name="exp_year" id="exp_year" class="form-control" required="true"/>
		</div>
		<div class="form-group col-sm-10">
		<label for="number" >Card number</label>
		<input type="number" name="number" name="number" class="form-control" required="true"/><code>test with : 4242 4242 4242 4242</code><br />
		</div>
		<div class="form-group col-sm-10 ">
			<label for="cvc">CVC :</label>
		<input type="number" name="cvc" id="number" class="form-control" required="true"/>
		</div>
		<div class="form-group col-sm-10">
		<input type="submit" class="btn btn-default"/>
		</div>
		<!-- + verefication des champs -->
	</form>