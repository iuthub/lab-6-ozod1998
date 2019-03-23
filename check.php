<?php
    if(isset($_POST["name"])) {
    	$name = $_POST["name"];
    	if(!preg_match("/.{2,}/", $name)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["email"])) {
    	$email = $_POST["email"];
    	if (!preg_match("/.*@.*/", $email)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["username"])) {
    	$username = $_POST["username"];
    	if (!preg_match("/.{5,}/", $username)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["password"])) {
    	$password = $_POST["password"];
    	if (!preg_match("/\A(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})(?=\D*\d)\w{6,10}\z/", $password)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["confirm_password"])) {
    	$confirm_password = $_POST["confirm_password"];
    	if ($confirm_password != $password) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["birth"])) {
    	$birth = $_POST["birth"];
    	if (!preg_match("/^\d{2}+\.+\d{2}+\.+\d{4}$/", $birth)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["postal_code"])) {
    	$postal_code = $_POST["postal_code"];
    	if (!preg_match("/^\d{6}$/", $postal_code)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["home_phone"])) {
    	$home_phone = $_POST["home_phone"];
    	if (!preg_match("/^\d{2}\s\d{7}$/", $home_phone)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["phone"])) {
    	$phone = $_POST["phone"];
    	if (!preg_match("/^\d{2}\s\d{7}$/", $phone)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["card_number"])) {
    	$card_number = $_POST["card_number"];
    	if (!preg_match("/^\d{16}$/", $card_number)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["expiry_date"])) {
    	$expiry_date = $_POST["expiry_date"];
    	if (!preg_match("/^\d{2}.\d{2}.\d{4}$/", $expiry_date)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["salary"])) {
    	$salary = $_POST["salary"];
    	if (!preg_match("/^(UZS)+\s\d{6,9}.\d{2}$/", $salary)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["url"])) {
    	$url = $_POST["url"];
    	if (!preg_match("/^(http:)\/\/+\w{1,}.[a-z]{1,}$/", $url)) {
    		echo "<h1>Error!</h1>";
    	}
    }
    if (isset($_POST["gpa"])) {
    	$gpa = $_POST["gpa"];
    	if ($gpa > '4.5' || $gpa < '0') {
    		echo "<h1>Error!</h1>";
    	}
    }


?>