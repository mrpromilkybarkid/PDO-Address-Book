<?php

require 'conx.php';

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>PDO Address Book</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>

<style>

body {
	padding-top: 15px;
}

</style>

<body>

<div class="container">

<?php

$getContacts = $db->query("
	SELECT * FROM contacts
");

while ($row = $getContacts->fetch()) {

?>

	<div class="well">
		<h1><b>Name:</b> <?php echo $row['name']; ?></h1> <br />
		<h2><b>Email:</b> <?php echo $row['email']; ?> </h2> <br />
		<h3><b>Phone:</b> <?php echo $row['phoneNumber']; ?> </h3> 
	</div>

<?php

}

?>

</div>

</body>
</html>