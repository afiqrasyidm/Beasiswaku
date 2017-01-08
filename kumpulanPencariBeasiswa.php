<?php include 'headerSelainIndex.php';?>
	<div id="createPost">

		<button  id="submitButtonPencariBeasiswa" type="button" class="btn btn-success">Buat Post TentangMu!</button>  

	<script>
			var counter= true;
			
			$("#submitButtonPencariBeasiswa").click(function(){
				
				
				if(counter){
					<?php
		
					$boolean="true";
					if(!isset($_SESSION["userlogin"])){
							
								$boolean="false";
							
								echo "var node = document.createElement('P');";
								echo "var textnode = document.createTextNode('Anda harus login sebagai pencari beasiswa');";
								echo "node.appendChild(textnode);";
								echo "document.getElementById('createPostPeringatan').appendChild(node);";
							
					}
					


					?>
					var boolean = "<?php echo $boolean; ?>";
					
					if(boolean === "true"){
							
							window.location.href='createPostPencariBeasiswa.php';
						
					}
					else{
						
						 counter =false ;
						
					}
				}
				
			});
	</script>

	</div>
			<div id ="createPostPeringatan">		
			</div>
	<div id ="pembatas">
	</div>
	<div class="container">
			
	<?php
						$conn = connectDB();
		
						$sql="SELECT * FROM userBeasiswa ORDER BY user_id DESC";
						$result = mysqli_query($conn, $sql);
	
	
						if ( mysqli_num_rows($result) > 0) {
							// output data of each row
							
							while($row = mysqli_fetch_assoc($result)) {
								//echo "id: " . $row["comment_id"]. " - Name: " . $row["name"]. " " . $row["email"];
								//echo $row["content"]. "<br>";
										echo "<div class= 'container'>";
										echo "<div class= 'photoProfil'>";
										echo "<img  class='images' src='images/1.png' alt='gambar' style='width:80px;height:70px;'>";
										echo "<p>".$row["address"]."</p>";
										echo "<p>".$row["phone"]."</p>";
										echo "<p>".$row["email"]."</p>";
										echo "</div>";
										echo "<p class='namaPanjang'>".$row["fullname"]."</p>";
										echo "<div class= 'pendidikan'>";
										echo "<p>(".$row["sekolah"].",<span>Jurusan :".$row["jurusan"]." , Semester:".$row["semester"].")</span> </p>";
										echo "</div>";
										echo "<div class= 'motivasi'>";
										echo "<p>".$row["motivasi"]."</p>";
										echo "</div>";
										
										echo "</div>";
										echo "</div>";
							}
					
						} else {
						//	echo "0 results";
						}
						mysqli_close($conn);
	
	?>
	</div>


<?php include 'footer.php';?>