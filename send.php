<!-- Send Registration form data -->
<?php


if (isset($_POST['name1']) && isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['dept']) && isset($_POST['room']) && isset($_POST['food'])&& isset($_POST['time'])&&isset($_POST['quantity']) && isset($_POST['date'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name1 = validate($_POST['name1']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);
		$dept = validate($_POST['dept']);
	$room = validate($_POST['room']);
		$food = validate($_POST['food']);
			$time = validate($_POST['time']);
			$quantity = validate($_POST['quantity']);
	      $date= validate($_POST['date']);



	if (empty($name1) ||  empty($email) || empty($phone)|| empty($dept) || empty($room) || empty($food) || empty($time )|| empty($quantity)|| empty($date)) {
		header("Location: booking.html");
	}else {

		$sql = "INSERT INTO table2(name1,email,phone,dept,room,food,time,quantity,date) VALUES('$name1', '$email','$phone','$dept','$room','$food','$time','$quantity','$date')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
0			?>
        <script>alert("Your response has been recorded THANK YOU !");</script>
        <?php
		}else {
			echo "Your response has not been send PLEASE TRY AGAIN !";
		}
	}

}else {
	header("Location: booking.html");
}
?>
