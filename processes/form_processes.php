<?php
	require_once "../includes/db_connect.php";

	if(isset($_POST["submit"])){
		$houseNO = mysqli_real_escape_string($conn, $_POST["houseNO"]);
		$Occupantname = mysqli_real_escape_string($conn, $_POST["Occupantname"]);
			
		$household_insert = "INSERT INTO household (houseNO, Occupantname) VALUES ('$houseNO', '$Occupantname')";

		if ($conn->query($household_insert) === TRUE) {
			header("Location: ../Household.php");
			exit();
		} else {
			echo "Error: " . $household_insert . "<br />" . $conn->error;
		}

		$conn->close();
	}
	if(isset($_POST["register_btn"])){
		$first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
		$last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
		$user_name = mysqli_real_escape_string($conn, $_POST["user_name"]);
		$user_type = mysqli_real_escape_string($conn, $_POST["user_type"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$location = mysqli_real_escape_string($conn, $_POST["location"]);
		

		$user_insert = "INSERT INTO users (first_name, last_name, email, user_name, user_type, password, location) VALUES ('$first_name', '$last_name', '$email', '$user_name', '$user_type', '$password', '$location')";

		if ($conn->query($user_insert) === TRUE) {
			header("Location: ../Register.php");
			exit();
		} else {
			echo "Error: " . $user_insert . "<br />" . $conn->error;
		}
		$conn->close();
	}
	
	
	if(isset($_POST["send"])){
		$houseNO = mysqli_real_escape_string($conn, $_POST["houseNO"]);
		$applianceID = mysqli_real_escape_string($conn, $_POST["applianceID"]);
		$appliancename = mysqli_real_escape_string($conn, $_POST["appliancename"]);
		$Quantity = mysqli_real_escape_string($conn, $_POST["Quantity"]);
		$Rating_watts = mysqli_real_escape_string($conn, $_POST["Rating_watts"]);
		$hours_used_per_days = mysqli_real_escape_string($conn, $_POST["hours_used_per_days"]);
		$kilowattperhour_KWH = mysqli_real_escape_string($conn, $_POST["kilowattperhour_KWH"]);
		$Numberofdays = mysqli_real_escape_string($conn, $_POST["Numberofdays"]);
		$consumption = mysqli_real_escape_string($conn, $_POST["consumption"]);

		$appliance_insert = "INSERT INTO appliance (houseNO, applianceID, appliancename, Quantity, Rating_watts, hours_used_per_days, kilowattperhour_KWH, Numberofdays, consumption) VALUES ('$houseNO', '$applianceID', '$appliancename', '$Quantity', '$Rating_watts', '$hours_used_per_days', '$kilowattperhour_KWH', '$Numberofdays', '$consumption')";

		if ($conn->query($appliance_insert) === TRUE) {
			header("Location: ../Appliance.php");
			exit();
		} else {
			echo "Error: " . $appliance_insert . "<br />" . $conn->error;
		}

		$conn->close();
	}

	if(isset($_POST["Submit"])){
		$houseNO = mysqli_real_escape_string($conn, $_POST["houseNO"]);
		$consumption = mysqli_real_escape_string($conn, $_POST["consumption"]);
		$meter_reading = mysqli_real_escape_string($conn, $_POST["meter_reading"]);
		$total_bills = mysqli_real_escape_string($conn, $_POST["total_bills"]);
		$final_amount = mysqli_real_escape_string($conn, $_POST["final_amount"]);

		$Bill_insert = "INSERT INTO bills (houseNO, consumption, meter_reading, total_bills, final_amount) VALUES ('$houseNO', '$consumption', '$meter_reading', '$total_bills', '$final_amount')";

		if ($conn->query($Bill_insert) === TRUE) {
			header("Location: ../Bills.php");
			exit();
		} else {
			echo "Error: " . $Bill_insert . "<br />" . $conn->error;
		}

		$conn->close();
	}