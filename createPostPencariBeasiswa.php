<?php include 'headerSelainIndex.php';?>
	
	



		<div class="container createPost">
		  <h2>Buat Post Tentang Dirimu</h2>
		  <form action="uploadPencariBeasiswa.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <label>Motivasi:(kenapa memerlukan beasiswa tersebut)</label>
			  <textarea class="form-control" rows="5" id="comment" name="motivasi"></textarea>
			  <label>Upload berkas softcopy untuk beasiswa, yakni KTP, transkrip nilai terakhir, sertifikat presitasi, jika ada, dan photo (dalam bentuk zip) </label>
			  <input type="file" name="file" />
			  <button   type="submit" class="btn btn-default">Submit</button>
			</div>
		  </form>
		</div>

<?php include 'footer.php';?>