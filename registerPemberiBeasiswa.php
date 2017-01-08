	
<?php

		$nameErr = "";
		$passErr = "";
		$cek = "";
	
	
	if(isset($_POST['usernameBaru1'])){
		//echo "asdasdsad";
		$username = $_POST['usernameBaru1'];
		$password = $_POST['passwordBaru1'];
		$nama = $_POST['nama1'];
		$email = $_POST['emailBaru1'];


		$nomorHP = $_POST['nomorHP1'];

		$formatBenar = true;
		if(preg_match("/[0-9]/",$_POST["usernameBaru1"])){ 
				$nameErr = "format nama salah"; 
				$formatBenar = false;
		
		}
		else if(preg_match("/[A-Z]/",$_POST["usernameBaru1"])){ 
				$nameErr = "format nama "; 
				$formatBenar = false;
		
		}
		else if(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/',$_POST["usernameBaru1"])){
				$nameErr = "format nama salah"; 
				$formatBenar = false;
		}
		//sumber http://stackoverflow.com/questions/11873990/create-preg-match-for-password-validation-allowing
		
		//memasukkan data
		$conn = connectDB();
		$sql = "INSERT into user (fullname,phone,tanda_user,username, email, password) values('$nama','$nomorHP',0,'$username','$email','$password')";
		$sql2= "SELECT username FROM user WHERE username='$username' ";
		
		if($formatBenar){
			$result2 = $conn->query($sql2);
					
			
			if($result2->num_rows > 0){
				
				
				//$GLOBALS['valid'] ="username tidak valid";
				$cek = "username telah digunakan";
			}
			else if ($conn->query($sql) === TRUE ) {
				//echo "New record created successfully";
		
			} else {
				//echo "asd";
			}
			
				$conn->close();
				
			
		}
	}
	
	

	
?>
		
		<!--This is a comment. Comments are not displayed in the browser
		<h2>Insert Account</h2>
		
http://codepen.io/axpro/pen/eIkAm
		<form method="POST" action="login.php">
			username: <input type="text" name="usernameBaru"><br>
			password: <input type="password" name="passwordBaru"><br>
			email: <input type="text" name="emailBaru"><br>
			<input type="submit" value="submit">
			
		</form>
		-->

						<div class="box">
							<div class="content registerBox" style="display:none;">
								<div class="form">
									<form method="post"  action="" accept-charset="UTF-8">
															
									<input id="email" class="form-control" type="text" placeholder="Email" name="emailBaru1">
									<input id="nama" class="form-control" type="text" placeholder="Nama" name="nama1">
									<input id="username" class="form-control" type="text" placeholder="Username" name="usernameBaru1">                               
									<input id="password" class="form-control" type="password" placeholder="Password" name="passwordBaru1">
									<input id="nomorHp" class="form-control" type="text" placeholder="NO HP" name="nomorHP1">
															   
															  

									 <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
																
															
									</form>
								</div>
							</div>
						</div>     
		