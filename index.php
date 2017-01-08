<?php include 'header.php';?>
	
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="home_text wow fadeInUp animated">
	                            <h2>BeasiswaKu</h2>
	                            <p>Web Crowdfunding untuk mewadahi pemberi beasiswa dengan pencari beasiswa </p>
	                            <img src="images/shape.png" alt="">                        
	                        </div>
							
	                    </div>
	                </div>
					
			
	            </div>
				
			

	                        
	        </div>  
	    </section>         
    </header>


    

    <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
        <div class="container">
            <div class="icon">
                <i class="icon-quote"></i>
            </div>
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>Education is the key to unlock the golden door of freedom</p>
                    <h4>-George Washington Carver</h4>
                </div>

            </div>            
        </div>
    </section>
	<div id="DAFTAR">
		<div class ="container-fluid" id ="containerPetunjuk">
					<div class="col-md-12 text-center wow fadeInUp animated" id="isi">
						<p>"Beasiswaku adalah sebuah aplikasi Crowdfunding yang bisa membantu para pelajar yang membutuhkan biaya dan pemberi biaya 
						bertemu dan saling membantu satu sama lainnya"</p>
					</div>	
						<div class="col-md-6 wow fadeInLeft animated" id="pelajar" >
		
							<p>Kamu seorang pelajar dan membutuhkan dana untuk pendidikan? Kamu daftar menjadi user pelajar yang membutuhkan beasiswa, sehingga bisa membuat post untuk bisa dilihat oleh pemberi beasiswa</p>
							<div class="col-md-12 text-center">
								<a href="registerPencariBeasiswa.php"><button id="button2" type="button" class="btn btn-primary btn-md">Daftar Sekarang!</button></a>    
							</div>
			
						</div>
					
						
						<div class="col-md-6 wow fadeInRight animated" id="pemberiDana" >
						
							<p>Atau Kamu seorang yang ingin membuat kontribusi nyata dari dengan uang? Kamu bisa membantu pelajar dengan dana yang kamu berikan dalam bentuk beasiswa</p>

											<div class="col-md-12 text-center">
													<a href="registerDonatur.php"><button id="button1" type="button" class="btn btn-primary btn-md">Daftar Sekarang!</button></a>    
											</div>
		
							
						</div>
					
		
		
		</div>
	</div>	
	
	
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Me</h2>
                        <p>+62813601341347</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Me</h2>
                        <p>afiqrasyid@gmail.com</p>
                    </div>

                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
		
    <div class="container">
       
       
		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
								<?php include 'login.php';?>
                             </div>
                        </div>

						 <?php include 'registerPencariBeasiswa.php';?>      
						 <?php include 'registerPemberiBeasiswa.php';?>      
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>


<?php include 'footer.php';?>

