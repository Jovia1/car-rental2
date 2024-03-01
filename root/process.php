<?php 
//getting the database connection... 
require_once('config.php');
$errors = array();
foreach ($errors as $error) {
	 echo $errors;
}
//working with login form submision

if (isset($_POST['loginbtn'])) {
	trim(extract($_POST));
	if (count($errors) == 0) {
		$contact = $_POST['contact']; 
		$password = sha1($password);
		$result = $dbh->query("SELECT * FROM users WHERE contact = '$contact' AND password='$password'");
		if ($result->rowCount() == 1) {
			$row = $result->fetch(PDO::FETCH_OBJ);
			//`user_id`, `fname`, `email`, `contact`, `password`, `image`, `date_registered`, `role`
			$_SESSION['user_id'] = $row->user_id;
			$_SESSION['fname'] = $row->fname;
			$_SESSION['email'] = $row->email;
			$_SESSION['image'] = $row->image;
			$_SESSION['date_registered'] = $row->date_registered;
			$_SESSION['role'] = $row->role;
			//=========================================================
			if ($result->rowCount() > 0) {
				echo "<script>
				alert('Login is Successful');
				window.location = '".SITE_URL."';
				</script>";
			}else{
				echo "<script>
				alert('Login failed, please check your login details again');
				window.location = '".SITE_URL."/login.php';
				</script>";
			}

		}else{
			echo "<script>
				alert('Wrong number or password');
				window.location =  '".SITE_URL."/login.php';
				</script>";
		}
	}
}elseif(isset($_POST['register_btn'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table...
	    //`user_id`, `fname`, `email`, `contact`, `password`, `image`, `date_registered`, `role`
	    $check = $dbh->query("SELECT contact FROM users WHERE contact='$contact' ")->fetchColumn();
	  if(!$check){
	  	// $reset_password = $password; 
		$password = sha1($password);
	    $jovia = "INSERT INTO users VALUES(NULL,'$fname','$email','$contact','$password','$image','$today','$role')";
	    $result = dbCreate($jovia);
	    if($result == 1){
	    	echo "<script>
	          	alert('Registration is Successful');
	        	window.location = '".SITE_URL."/login.php';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('User registration failed');
		   	  window.location = '".SITE_URL."/register.php';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Username already registered');
	        window.location = '".SITE_URL."/register.php';
	        </script>";
	 	}
	}


}elseif(isset($_POST['driver_btn'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table from User form...
	    //`driver_id`, `fullname`, `image`, `driver_email`, `driver_contact`, `registration_no`
	    $check = $dbh->query("SELECT driver_contact FROM drivers WHERE driver_contact='$driver_contact' ")->fetchColumn();
	  if(!$check){
		// $password = sha1($password);
	    $sql = $dbh->query("INSERT INTO drivers VALUES(NULL,'$fullname','$image','$driver_email','$driver_contact','$registration_no')");
	    // $result = dbCreate($sql);
	    if($sql){
	    	echo "<script>
	          	alert('Driver is Successful');
	        	window.location = '".SITE_URL."/drivers.php';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Drivers registration failed');
		   	  window.location = '".SITE_URL."/drivers.php';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Drivers already registered');
	        window.location = '".SITE_URL."/drivers.php';
	        </script>";
	 	}
	}
}
elseif(isset($_POST['career_btn'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table from career form...
	    //`career_id`, `cname`, `croles`, `cdescription`, `eligibility`
	    $check = $dbh->query("SELECT * FROM career WHERE cname='$name' ")->fetchColumn();
	  if(!$check){
		// $password = sha1($password);
	    $sql = "INSERT INTO career VALUES(NULL,'$cname','$croles','$cdescription','$eligibility')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Career is Successful');
	        	window.location = '".SITE_URL."/career.php';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Career registration failed');
		   	  window.location = '".SITE_URL."/career.php';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Career already registered');
	        window.location = '".SITE_URL."/career.php';
	        </script>";
	 	}
	}

}
elseif(isset($_POST['brand_btn'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table from brand form...
	    //`brand_id`, `bname`, `bimage`, `bdriven_train`, `bcolor`, `bmake`, `bseats`, `bfuel_type`, `bcc`
	    $check = $dbh->query("SELECT * FROM brand WHERE bname='$bname' ")->fetchColumn();
	  if(!$check){
		// $password = sha1($password);
	    $sql = "INSERT INTO brand VALUES(NULL,'$bname','$bimage','$bdriven_train','$bcolor','$bmake','$bseats','$bfuel_type','$bcc')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Brand is Successful');
	        	window.location = '".SITE_URL."/brand.php';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Brand registration failed');
		   	  window.location = '".SITE_URL."/brand.php';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Brand already registered');
	        window.location = '".SITE_URL."/brand.php';
	        </script>";
	 	}
	}

}

?>