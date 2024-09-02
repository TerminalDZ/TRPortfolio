<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>
	   		<div class="logo">
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll"  href="#services" title="">Services</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
						
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'm <?= $bfrdata['profile_fullname']; ?>.</h1>

	   			<p class="intro-position">
				   <?php
    $jobs = explode(",", $bfrdata['profile_job']);
    foreach ($jobs as $job) {
      echo "<span>$job</span>";
    }
  ?>
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">   
	   <?php
$social = "SELECT * FROM social_networking";
$querysocial = mysqli_query($db, $social);
while ($socialdata = mysqli_fetch_array($querysocial)) {
?>
         <li><a href="<?= $socialdata['social_link']; ?>" target="_blank"><i class="<?= $socialdata['icon_social']; ?>"></i></a></li>

<?php
}
?>     

      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1><?= $bfrdata['about_title']; ?></h1>

   			<div class="intro-info">

   				<img src="<?=$base_img_about;?><?= $bfrdata['about_img']; ?>" alt="Profile Picture">

   				<p class="lead"><?= $bfrdata['about_desc']; ?></p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p><?= $bfrdata['profile_desc']; ?></p>

   			<ul class="info-list">
   				<li <?php if (empty($bfrdata['profile_fullname'])) { echo 'style="display: none"'; } ?>>
   					<strong>Fullname:</strong>
   					<span><?= $bfrdata['profile_fullname']; ?></span>
   				</li>
   				<li <?php if (empty($bfrdata['profile_birthdate'])) { echo 'style="display: none"'; } ?>>
   					<strong>Birth Date:</strong>
   					<span><?= date('F d, Y', strtotime($bfrdata['profile_birthdate'])); ?></span>
   				</li>
   				<li <?php if (empty($bfrdata['profile_job'])) { echo 'style="display: none"'; } ?>>
   					<strong>Job:</strong>
					   <span><?= str_replace(',', ' , ', $bfrdata['profile_job']); ?></span>
   				</li>
   				<li <?php if (empty($bfrdata['profile_website'])) { echo 'style="display: none"'; } ?>>
   					<strong>Website:</strong>
   					<span><?= $bfrdata['profile_website']; ?></span>
   				</li>
   				<li <?php if (empty($bfrdata['profile_email'])) { echo 'style="display: none"'; } ?>>
   					<strong>Email:</strong>
   					<span><?= $bfrdata['profile_email']; ?></span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p><?= $bfrdata['skills_desc']; ?></p>

				<ul class="skill-bars">
				<?php
    $skillsdb = "SELECT * FROM skills";
    $queryskillsdb = mysqli_query($db, $skillsdb);
    while ($skillsdbdata = mysqli_fetch_array($queryskillsdb)) {
  ?>
				   <li>
				   	<div class="progress percent<?=$skillsdbdata['skills_range'];?>"><span><?=$skillsdbdata['skills_range'];?>%</span></div>
				   	<strong><?=$skillsdbdata['skills_name'];?></strong>
				   </li>
      <?php }; ?>
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
			   <?php if ($bfrdata['profile_downloadcv']=="#") {   ?>
			<?php }else{ ?>
				<a  href="<?=$base_img_cv;?><?= $bfrdata['profile_downloadcv']; ?>" target="_blank" title="Download CV" class="button button-primary">Download CV</a>

				<?php }; ?>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1><?= $bfrdata['resume_title']; ?></h1>

   			<p class="lead"><?= $bfrdata['resume_desc']; ?></p>

   		</div>   		
   	</div> <!-- /section-intro--> 

	   <div class="row resume-timeline" <?php if ($resume_count_type1==0) { echo 'style="display: none"'; }; ?>>

<div class="col-twelve resume-header">

	<h2>Work Experience</h2>

</div> <!-- /resume-header -->

<div class="col-twelve">

	<div class="timeline-wrap">

	<?php
$resumedbty1 = "SELECT * FROM resume WHERE resume_type = 1";
$queryresumedbty1 = mysqli_query($db, $resumedbty1);
while ($resumedbdataty1 = mysqli_fetch_array($queryresumedbty1)) {
?>
		<div class="timeline-block">

			<div class="timeline-ico">
				<i class="fa fa-graduation-cap"></i>
			</div>

			<div class="timeline-header">
				<h3><?= $resumedbdataty1['resume_what']; ?></h3>
				<p><?= date('F Y', strtotime($resumedbdataty1['resume_when_start'])); ?> - <?php if ($resumedbdataty1['resume_when_end'] == $resumedbdataty1['resume_add']) { ?>
					 Present
					 <?php } else { ?>
						 <?= date('F Y', strtotime($resumedbdataty1['resume_when_end'])); ?>
				 <?php }; ?></p>
			</div>

			<div class="timeline-content">
				<h4><?= $resumedbdataty1['resume_where']; ?></h4>
				<p>
					<?php
					if ($resumedbdataty1['resume_desc'] == ".") {
						echo "&nbsp";
					} else {
						echo $resumedbdataty1['resume_desc'];
					}
?>
					
				</p>
			</div>

		</div> 

		<?php }; ?>

	 

	</div> <!-- /timeline-wrap -->   			

</div> <!-- /col-twelve -->

</div> <!-- /resume-timeline -->

<div class="row resume-timeline" <?php if ($resume_count_type2==0) { echo 'style="display: none"'; }; ?>>

<div class="col-twelve resume-header">

	<h2>Education</h2>

</div> <!-- /resume-header -->

<div class="col-twelve">

	<div class="timeline-wrap">

	<?php
$resumedbty2 = "SELECT * FROM resume WHERE resume_type = 2";
$queryresumedbty2 = mysqli_query($db, $resumedbty2);
while ($resumedbdataty2 = mysqli_fetch_array($queryresumedbty2)) {
?>
		<div class="timeline-block">

			<div class="timeline-ico">
				<i class="fa fa-briefcase"></i>
			</div>

			<div class="timeline-header">
				<h3><?= $resumedbdataty2['resume_what']; ?></h3>
				<p><?= date('F Y', strtotime($resumedbdataty2['resume_when_start'])); ?> - <?php if ($resumedbdataty2['resume_when_end'] == $resumedbdataty2['resume_add']) { ?>
					 Present
					 <?php } else { ?>
						 <?= date('F Y', strtotime($resumedbdataty2['resume_when_end'])); ?>
				 <?php }; ?></p>
			</div>

			<div class="timeline-content">
				<h4><?= $resumedbdataty2['resume_where']; ?></h4>
				<p>
                
                <?php
					if ($resumedbdataty2['resume_desc'] == ".") {
						echo "&nbsp";
					} else {
						echo $resumedbdataty2['resume_desc'];
					}
?>
                
                </p>
			</div>

		</div> 

		<?php }; ?>

	</div> <!-- /timeline-wrap -->   			

</div> <!-- /col-twelve -->

</div> <!-- /resume-timeline -->
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1><?= $bfrdata['portfolio_title']; ?></h1>

   			<p class="lead"><?= $bfrdata['portfolio_desc']; ?></p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   		
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
			 <?php
    $portfoliodb = "SELECT * FROM portfolio";
    $queryportfoliodb = mysqli_query($db, $portfoliodb);
    while ($portfoliodbdata = mysqli_fetch_array($queryportfoliodb)) {
  ?>
	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="<?=$base_img_portfolio?><?= $portfoliodbdata['portfolio_img']; ?>" alt="<?= $portfoliodbdata['portfolio_title']; ?>">
	                  <a href="#modal-<?= $portfoliodbdata['id']; ?>" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title"><?= $portfoliodbdata['portfolio_title']; ?></h3>	     					    
		     					    	 <span class="folio-types">
										  <?= $portfoliodbdata['portfolio_types']; ?>
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        	</div> 

	            <div id="modal-<?= $portfoliodbdata['id']; ?>" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="<?=$base_img_portfolio?><?= $portfoliodbdata['portfolio_img']; ?>" alt="<?= $portfoliodbdata['portfolio_title']; ?>" />
				     	</div>      	

					   <div class="description-box">
					      <h4><?= $portfoliodbdata['portfolio_title']; ?></h4>		      
					      <p><?= $portfoliodbdata['portfolio_desc']; ?></p>

					      <div class="categories"> <?= $portfoliodbdata['portfolio_types']; ?></div>			               
					   </div>

			         <div class="link-box">
			            <a href=" <?= $portfoliodbdata['portfolio_url']; ?>" target="_blank">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				</div> 
				<?php }; ?>

				   


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 




	
	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Services</h5>
   			<h1><?= $bfrdata['services_title']; ?></h1>

   			<p class="lead"><?= $bfrdata['services_desc']; ?></p>

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

		   <?php
    $servicesdb = "SELECT * FROM services";
    $queryservicesdb = mysqli_query($db, $servicesdb);
    while ($servicesdbdata = mysqli_fetch_array($queryservicesdb)) {
  ?>
				<div class="service">	

					<span class="icon"><i  class="<?= $servicesdbdata['services_icon']; ?>"></i></span>                          

	            <div class="service-content">	

	            	<h3><?= $servicesdbdata['services_title']; ?></h3>  

		            <p class="desc"><?= $servicesdbdata['services_desc']; ?>
	         		</p>

	            </div>	                          

			   </div> 
			   <?php }; ?>

	

	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /services -->	


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat" <?php if (empty($ralisadata['projects_completed'])) { echo 'style="display: none"'; } ?>>

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
						<?= $ralisadata['projects_completed']; ?>
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div> <!-- /stat -->					

					<div class="bgrid stat" <?php if (empty($ralisadata['happy_clients'])) { echo 'style="display: none"'; } ?>>

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
						<?= $ralisadata['happy_clients']; ?>
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat" <?php if (empty($ralisadata['awards_received'])) { echo 'style="display: none"'; } ?>>

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
						<?= $ralisadata['awards_received']; ?>
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat -->									

					<div class="bgrid stat" <?php if (empty($ralisadata['crazy_ideas'])) { echo 'style="display: none"'; } ?>>

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
						<?= $ralisadata['crazy_ideas']; ?>
						</h3>

						<h5 class="stat-title">
							Crazy Ideas
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat" <?php if (empty($ralisadata['coffee_cups'])) { echo 'style="display: none"'; } ?>>

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
						<?= $ralisadata['coffee_cups']; ?>
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat" <?php if (empty($ralisadata['hours'])) { echo 'style="display: none"'; } ?>>

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
						<?= $ralisadata['hours']; ?>
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->

	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1><?= $bfrdata['contact_title']; ?></h1>

   			<p class="lead"><?= $bfrdata['contact_desc']; ?></p>

   		</div> 
   	</div> <!-- /section-intro -->
 
   	<div class="row contact-form">
<!-- contact-warning -->
<div id="message-warning"></div> 
   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="name" type="text" id="contactName" placeholder="Name" value="" minlength="4" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="email" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="subject" type="text" id="contactSubject" placeholder="Subject" minlength="6" value="" required="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="message" id="contactMessage" placeholder="message" minlength="15" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button name="sendcontact" class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

                      
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">
			<?php
		   if (!empty($seodata['address'])) {
?>
   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
			   <?= $seodata['address']; ?>
            </p>
<?php }; ?>
   		</div>
		   <?php
   if (!empty($bsmdata['contact_email']) || !empty($bsmdata['s_contact_email'])) {
?>
   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>			   <?php if (!empty($bsmdata['contact_email'])) { ?>

				<?= $bsmdata['contact_email']; ?>
				<br><?php }; ?>
				<?php if (!empty($bsmdata['s_contact_email'])) { ?>
			   <?= $bsmdata['s_contact_email']; ?>			
			   <?php }; ?>     
			   </p>

   		</div>
		   <?php 
   }; ?>
		   <?php
   if (!empty($bsmdata['phone_number']) || !empty($bsmdata['mobile_number']) || !empty($bsmdata['fax_number'])) {
?>
   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>
			   <?php if (!empty($bsmdata['phone_number'])) { ?>
   			<p>Phone: (+<?= $bsmdata['ncp']; ?>) <?= $bsmdata['phone_number']; ?><br>
<?php }; ?>
<?php if (!empty($bsmdata['mobile_number'])) { ?>
			   	Mobile: (+<?= $bsmdata['ncm']; ?>) <?= $bsmdata['mobile_number']; ?><br>
				   <?php }; ?>
				   <?php if (!empty($bsmdata['fax_number'])) { ?>
			     	Fax: (+<?= $bsmdata['ncf']; ?>) <?= $bsmdata['fax_number']; ?>
					 <?php }; ?>
			   </p>

   		</div>
   		<?php 
   }; ?>
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->
