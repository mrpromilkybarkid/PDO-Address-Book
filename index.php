<?php

include_once 'header.php';

?>

<div class="container">

	<a href="addContact.php" class="btn btn-info form-control">Add Contact</a>

<?php

$getContacts = $db->query("
	SELECT * FROM contacts
");

while ($row = $getContacts->fetch()) {

?>

	<div class="well well-sm">
		<h4><b>Name:</b> <?php echo $row['name']; ?></h4> <br />
		<h4><b>Email:</b> <?php echo $row['email']; ?> </h4> <br />
		<h4><b>Phone:</b> <?php echo $row['phoneNumber']; ?> </h4> 
	</div>

<?php

}

?>

</div>

</body>
</html>