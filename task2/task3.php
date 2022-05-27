<!DOCTYPE html>
<html>
<head>
	<title>Task3</title>
</head>
<body>
    <?php
	$amount = '';
	$kwh_usage = '';
	if (isset($_POST['submit'])) {
		$units = $_POST['kwh'];
		if (!empty($units)) {
			$kwh_usage = calculate_electricity_bill($units);
			$amount = '<strong>Total amount of ' . $units . ' units -</strong> ' . $kwh_usage;
		}
	}
	/**
	 * To calculate electricity bill as per unit cost
	 */
	function calculate_electricity_bill($units) {
		$first_unit_cost = 3.50;
		$second_unit_cost = 4.00;
		$third_unit_cost = 5.20;
		$fourth_unit_cost = 6.50;

		if($units <= 50) {
			$bill = $units * $first_unit_cost;
		}
		else if($units > 50 && $units <= 150) {
			$temp = 100 * $first_unit_cost;
			$remaining_units = $units - 100;
			$bill = $temp + ($remaining_units * $second_unit_cost);
		}
		else if($units > 150 && $units <= 250) {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost);
			$remaining_units = $units - 200;
			$bill = $temp + ($remaining_units * $third_unit_cost);
		}
		else {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
			$remaining_units = $units - 300;
			$bill = $temp + ($remaining_units * $fourth_unit_cost);
		}
		return number_format((float)$bill, 2, '.', '');
	}
	?>
	<div class="container">
		<h1>PHP- Calculate Electricity Bill</h1>
		<div class="form-group">
		<form action="" method="post">
		<div class="form-group">
			<input type="number" name="kwh" placeholder="Please enter no. of Units" class="form-control" />
			<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
		</div>
			
		
			
		</form>
		
		<div>
		    <?php echo '<br />' . $amount; ?>
		</div>
	</div>
</body>
</html>