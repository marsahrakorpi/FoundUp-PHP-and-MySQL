<?php require '../components/authentication.php' ?>
<?php require '../components/session-check.php' ?>

<?php
	$user_username = $_SESSION['user_username'];
	header('location: ../application/user/editMyProfile.php?user='.$user_username);
?>