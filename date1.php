<html>
	<head>
	</head>
<body>


<?php

$date = "Monday";


if(isset($_POST['date'])){
	$date = $_POST['date'];
}

if (isset($_POST['addweek'])){
	$curr_date = $_POST['curr_date'];
	$weeks = $_POST['weektxt'];
	$date = "+" . $weeks . " week," . $curr_date;
}

if (isset($_POST['addmonth'])){
	$curr_date = $_POST['curr_date'];
	$months = $_POST['monthtxt'];
	$date = "+" . $months . " month," . $curr_date;
}


$sdate = strtotime($date);
echo date("M d, Y", $sdate);

?>

<form method ='post' action='#'>

<button name = 'date' value = "Monday">Mon</button>
<button name = 'date' value = "Tuesday">Tue</button>
<button name = 'date' value = "Wednesday">Wed</button>
<button name = 'date' value = "Thursday">Thu</button>
<button name = 'date' value = "Friday">Fri</button>
</form>

<form method = 'post' action = '#'>
<input type='hidden' name='curr_date' value='<?php echo date("M d, Y", $sdate); ?>'>
<br>
Week: <input type='number' min='1' name='weektxt' required>
<button type = 'submit' name='addweek'>Add Week</button>
</form>

<form method = 'post' action = '#'>
<input type='hidden' name='curr_date' value='<?php echo date("M d, Y", $sdate); ?>'>
<br>
Month: <input type='number' min='1' name='monthtxt' required>
<button type = 'submit' name='addmonth'>Add Month</button>
</form>

</body>
</html> 