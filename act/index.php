<html>
	<head>
		<title></title>
	</head>

<?php

if(isset($_POST['add'])){
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];

	if((is_numeric($val1)) && (is_numeric($val2))){
		$val3 = $val2 + $val1;
	}else{
		$val3 = $val1 + $val2;
	}
}

if(isset($_POST['edit'])){
	$val1 = $_POST['val_edit'];
	$val2 = $_POST['val_edit'];
}

?>

Add:
<form method='post' action='#'>
<input type="text" name='val1' value="<?php if(isset($_POST['add'])) { echo $val1; } ?>">
<input type="text" name='val2' value="<?php if(isset($_POST['add'])) { echo $val2; } ?>">
<input type="text" name='output' value="<?php if(isset($_POST['add'])) { echo $val3; } ?>">
<button type = "submit" name="add">Add</button>
</form>

Edit:
<form method='post' action='#'>
<input type="text" name='val_edit' value="<?php if(isset($_POST['edit'])) { echo $val1; } ?>">
<input type="text" name='val_edit' value="<?php if(isset($_POST['edit'])) { echo $val1; } ?>">
<button type = "submit" name="edit">Edit</button>
</form>

Delete:
<form method='post' action='#'>
<input type="text" name='val_delete'>
<button type = "reset">Delete</button>
</form>


<body>
</body>
</html>