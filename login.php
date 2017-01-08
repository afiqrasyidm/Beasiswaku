
		
<?php

	$valid="";
	$user_id="";
	//$bol=false;
	if(isset($_POST['username'])){
			
	
		if(login($_POST['username'], $_POST['password'])){
			//tambahkan session, kemudian redirect
			
			
				$_SESSION["userlogin"] = $_POST["username"];
				$_SESSION["user_id"] = $user_id;
		?>
				 <script> location.replace("index.php"); </script>
		<?php
		}
		
	}
	else{
			
		
		
	}
	
	
	
	function login($username, $password){
		//validate()
		//cek ke database
		$conn = connectDB();
		
		$sql = "SELECT user_id,username, password FROM user WHERE username='$username' AND password='$password'";
		$sql2= "SELECT username FROM user WHERE username='$username' ";
		$sql3 = "SELECT user_id,username, password FROM userBeasiswa WHERE username='$username' AND password='$password'";
		$sql4= "SELECT username FROM userBeasiswa WHERE username='$username' ";
				
		$result = $conn->query($sql);
		$result2 = $conn->query($sql2);
		$result3=$conn->query($sql3);
		$result4=$conn->query($sql4);
				
				
		if($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			
			$GLOBALS['user_id']=$row['user_id'];
			$conn->close();
			return true;
		}
		if($result3->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			
			$GLOBALS['user_id']=$row['user_id'];
			$conn->close();
			return true;
		}
		if($result2->num_rows == 0){
			
			$conn->close();
			
			$GLOBALS['valid'] ="username tidak valid";

			return false;
		}
		if($result4->num_rows == 0){
			
			$conn->close();
			
			$GLOBALS['valid'] ="username tidak valid";

			return false;
		}
		
		
		$conn->close();
		//$valid= "password tidak valid";
		 $GLOBALS['valid']="password tidak valid";
		//echo $valid;
		//$bol=true;
		return false;
	}
	
	
?>

		<div class="form loginBox">
                <form method="POST" action="">
                
						<input id="username" class="form-control" type="text" placeholder="Username" name="username">
                        <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                         <input class="btn btn-default btn-login" type="submit" value="submit" onclick="loginAjax()">
                                
								
								
				</form>
          </div>
