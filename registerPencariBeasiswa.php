
<?php

		$nameErr = "";
		$passErr = "";
		$cek = "";
	
	
	if(isset($_POST['usernameBaru'])){
		//echo "asdasdsad";
		$username = $_POST['usernameBaru'];
		$password = $_POST['passwordBaru'];
		$email = $_POST['emailBaru'];
		$namaSekolah = $_POST['namaSekolah'];
		$semester = $_POST['semester'];
		$tempatTinggal = $_POST['tempatTinggal'];
		$nama = $_POST['nama'];
		$nomorHP = $_POST['nomorHP'];
		
		$formatBenar = true;
		if(preg_match("/[0-9]/",$_POST["usernameBaru"])){ 
				$nameErr = "format nama salah"; 
				$formatBenar = false;
		
		}
		else if(preg_match("/[A-Z]/",$_POST["usernameBaru"])){ 
				$nameErr = "format nama "; 
				$formatBenar = false;
		
		}
		else if(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/',$_POST["usernameBaru"])){
				$nameErr = "format nama salah"; 
				$formatBenar = false;
		}
		//sumber http://stackoverflow.com/questions/11873990/create-preg-match-for-password-validation-allowing
		
		//memasukkan data
		$conn = connectDB();
		$sql = "INSERT into userBeasiswa (fullname,phone,address,sekolah,semester,tanda_user,username, email, password) values
		('$nama','$nomorHP','$tempatTinggal','$namaSekolah','$semester',1,'$username','$email','$password')";
		$sql2= "SELECT username FROM userBeasiswa WHERE username='$username' ";
		
		if($formatBenar){
			$result2 = $conn->query($sql2);
					
			
			if($result2->num_rows > 0){
				
				
				//$GLOBALS['valid'] ="username tidak valid";
				$cek = "username telah digunakan";
			}
			else if ($conn->query($sql) === TRUE ) {
				//echo "New record created successfully";
;
			} else {
				echo "asd";
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
							<div class="content registerPencariBeasiswaBox" style="display:none;">
								<div class="form">
									<form method="POST"  action="" accept-charset="UTF-8">
															
									<input id="email" class="form-control" type="text" placeholder="Email" name="emailBaru">
									<input id="nama" class="form-control" type="text" placeholder="Nama" name="nama">
									<input id="username" class="form-control" type="text" placeholder="Username" name="usernameBaru">                               
									<input id="password" class="form-control" type="password" placeholder="Password" name="passwordBaru">
									<input id="nomorHp" class="form-control" type="text" placeholder="NO HP" name="nomorHP">
									<input id="tempatTinggal" class="form-control" type="text" placeholder="Tempat Tinggal Sekarang" name="tempatTinggal">
									<input id="namaSekolah" class="form-control" type="text" placeholder="Nama Sekolah" name="namaSekolah">						  
									<input id="semester" class="form-control" type="text" placeholder="NO HP" name="semester">						   


									 <input  id='buttonRegister' class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
																
															
									</form>
								</div>
							</div>
						</div>     
		
		