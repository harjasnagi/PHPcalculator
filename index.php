<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="out-wrap">
		<div style="float: left; width: 10%;">
			<center> <h6>Left 10%</h6> </center>
		</div>
		<div style="float: left; width:80%;">
			<center>
				<h1>PHP calculator</h1>
				<div class="inner-wrap">
					<form method="POST">
						<div style="float: left; width: 50%;">
							<h3>First number</h3>
							<input class="inp" type="text" name="digit-1">
						</div>
						<div style="float: left; width: 50%;">
							<h3>Second number</h3>
							<input class="inp" type="text" name="digit-2">
						</div>

						<div>
							<input class="but" type="submit" name="calc-1" value="Add">
							<input class="but" type="submit" name="calc-2" value="Sub">
							<input class="but" type="submit" name="calc-3" value="Mul">
							<input class="but" type="submit" name="calc-4" value="Div">
							<br>
							<input class="clear" type="submit" name="calc-5" value="Clear">
						</div>
						<!-- <input type="submit" name="calc" value="Calculate"> -->
					</form>
					<br>
					
					<div class="answer">
						<?php
							$one = $_POST['digit-1'];
							$two = $_POST['digit-2'];
							if (isset($_POST['calc-1'])) {
								$ans = $one + $two;
								echo $ans;					
							}
							else if (isset($_POST['calc-2'])) {
								$ans = $one - $two;
								echo $ans;					
							}
							else if (isset($_POST['calc-3'])) {
								$ans = $one * $two;
								echo $ans;					
							}
							else if (isset($_POST['calc-4'])) {
								if($two=="0"){
									echo "Division by zero";
								}
								else {
									$ans = $one/$two;
									echo $ans;	}
							}
							else if (isset($_POST['calc-5'])) {
								echo "-";
							}
						?>
					</div>
				</div>
			</center>
		</div>
		<div style="float: left; width: 10%;">
			<center> <h6>Right 10%</h6> </center>
		</div>

		<p style="position: fixed; bottom: 0; width:100%; text-align: center">Made by Harjas <3</p>
	</div>
</body>
</html>