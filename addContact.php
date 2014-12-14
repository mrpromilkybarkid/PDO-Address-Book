<?php

include_once 'header.php';

?>

<style> input { margin: 20px; } </style>

<div class="container">
	<div class="well">
		<form action="" method="POST">
			<input class="form-control" type="text" name="name" placeholder="Name" />
			<input class="form-control" type="email" name="email" placeholder="Email" />
			<input class="form-control" type="text" name="number" placeholder="Phone Number" />
			<input class="form-control btn btn-success" type="submit" name="AddContact" value="Add Contact" />
		</form>
	</div>
</div>

<?php

if (isset($_POST['AddContact'])) {
	if (!empty($_POST['name'])) {
		if (!empty($_POST['email'])) {
			if (!empty($_POST['number'])) {
				
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phoneNumber = $_POST['number'];

				$addContact = $db->query("
					INSERT INTO contacts (name, phoneNumber, email)
					VALUES ('$name', '$phoneNumber', '$email')
				");

				header('Location: index.php');

			} else {
				echo "
					<div class='container'>
					<div class='alert alert-danger'>
					Please Fill In ALL Fields.
					</div>
					</div>
				";
			}
		} else {
			echo "
					<div class='container'>
					<div class='alert alert-danger'>
					Please Fill In ALL Fields.
					</div>
					</div>
				";
		} 
	} else {
		echo "
					<div class='container'>
					<div class='alert alert-danger'>
					Please Fill In ALL Fields.
					</div>
					</div>
				";
	}
}

?>