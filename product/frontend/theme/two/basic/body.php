<header class="container header active" id="home">
   <div class="header-content">
      <div class="left-header">
         <div class="h-shape"></div>
         <div class="image">
            <img src="<?=$base_img_about;?><?= $bfrdata['about_img']; ?>" alt="">
         </div>
      </div>
      <div class="right-header">
         <h1 class="name">
            Hi, I'm <span><?= $bfrdata['profile_fullname']; ?></span>
         </h1>
         <p>
            <?php
               $jobs = explode(",", $bfrdata['profile_job']);
               foreach ($jobs as $job) {
                 echo "<strong> | $job | </strong>";
               }
               ?>
         </p>
         <div class="btn-con" style="cursor: pointer;">
            <div href="" class="main-btn control"  data-id="about">
               <span class="btn-text">More About Me</span>
               <span class="btn-icon"><i class="fas fa-arrow-down"></i></span>
            </div>
         </div>
      </div>
   </div>
</header>
<main>
   <section class="container about" id="about">
      <div class="main-title">
         <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
      </div>
      <div class="about-container">
         <div class="left-about">
            <h4><?= $bfrdata['about_title']; ?></h4>
            <p><?= $bfrdata['about_desc']; ?></p>
            <?php if ($bfrdata['profile_downloadcv']=="#") {   ?>
            <?php }else{ ?>
            <div class="btn-con">
               <a href="<?=$base_img_cv;?><?= $bfrdata['profile_downloadcv']; ?>" target="_blank" class="main-btn">
               <span class="btn-text">Download CV</span>
               <span class="btn-icon"><i class="fas fa-download"></i></span>
               </a>
            </div>
            <?php }; ?> 
         </div>
         <div class="right-about">
            <div class="about-item" <?php if (empty($ralisadata['projects_completed'])) { echo 'style="display: none"'; } ?>>
               <div class="abt-text">
                  <p class="large-text"><?= $ralisadata['projects_completed']; ?>+</p>
                  <p class="small-text">PROJECTS <br /> COMPLETED</p>
               </div>
            </div>
            <div class="about-item" <?php if (empty($ralisadata['happy_clients'])) { echo 'style="display: none"'; } ?>>
               <div class="abt-text">
                  <p class="large-text"><?= $ralisadata['happy_clients']; ?>+</p>
                  <p class="small-text">HAPPY <br /> CLIENTS</p>
               </div>
            </div>
            <div class="about-item" <?php if (empty($ralisadata['awards_received'])) { echo 'style="display: none"'; } ?>>
               <div class="abt-text">
                  <p class="large-text"><?= $ralisadata['awards_received']; ?>+</p>
                  <p class="small-text">AWARDS <br> RECEIVED</p>
               </div>
            </div>
            <div class="about-item" <?php if (empty($ralisadata['crazy_ideas'])) { echo 'style="display: none"'; } ?>>
               <div class="abt-text">
                  <p class="large-text"><?= $ralisadata['crazy_ideas']; ?>+</p>
                  <p class="small-text">CRAZY <br> IDEAS</p>
               </div>
            </div>
            <div class="about-item" <?php if (empty($ralisadata['coffee_cups'])) { echo 'style="display: none"'; } ?>>
               <div class="abt-text">
                  <p class="large-text"><?= $ralisadata['coffee_cups']; ?>+</p>
                  <p class="small-text">COFFEE <br> CUPS</p>
               </div>
            </div>
            <div class="about-item" <?php if (empty($ralisadata['hours'])) { echo 'style="display: none"'; } ?>>
               <div class="abt-text">
                  <p class="large-text"><?= $ralisadata['hours']; ?>+</p>
                  <p class="small-text">HOURS</p>
               </div>
            </div>
         </div>
      </div>
      <div class="about-stats">
         <h4 class="stat-title">My Skills</h4>
         <div class="progress-bars">
            <?php
               $skillsdb = "SELECT * FROM skills";
               $queryskillsdb = mysqli_query($db, $skillsdb);
               while ($skillsdbdata = mysqli_fetch_array($queryskillsdb)) {
               ?>
            <style>
               .about-stats .progress-bars .progress-bar .progress-con .progress .range<?=$skillsdbdata['id'];?> {
               width: <?=$skillsdbdata['skills_range'];?>%;
               }
            </style>
            <div class="progress-bar">
               <p class="prog-title"><?=$skillsdbdata['skills_name'];?></p>
               <div class="progress-con">
                  <p class="prog-text"><?=$skillsdbdata['skills_range'];?>%</p>
                  <div class="progress">
                     <span class="range<?=$skillsdbdata['id'];?>"></span>
                  </div>
               </div>
            </div>
            <?php }; ?>
         </div>
      </div>
      <h4 class="stat-title">My Timeline</h4>
      <div class="timeline">
         <?php
            $resumedb = "SELECT * FROM resume ";
            $queryresumedb = mysqli_query($db, $resumedb);
            while ($resumedbdata = mysqli_fetch_array($queryresumedb)) {
            ?>
         <div class="timeline-item">
            <div class="tl-icon">
               <?php
                  if ($resumedbdata['resume_type'] == 1) {
                      echo '<i class="fa fa-graduation-cap"></i>';
                  } elseif ($resumedbdata['resume_type'] == 2) {
                      echo '<i class="fas fa-briefcase"></i>';
                  }
                  ?>
            </div>
            <p class="tl-duration"><?= date('F Y', strtotime($resumedbdata['resume_when_start'])); ?> - <?php if ($resumedbdata['resume_when_end'] == $resumedbdata['resume_add']) { ?>
               Present
               <?php } else { ?>
               <?= date('F Y', strtotime($resumedbdata['resume_when_end'])); ?>
               <?php }; ?>
            </p>
            <h5><?= $resumedbdata['resume_what']; ?><span> - <?= $resumedbdata['resume_where']; ?></span></h5>
            <p>
               <?= $resumedbdata['resume_desc']; ?>
            </p>
         </div>
         <?php }; ?>
      </div>
   </section>
   <section class="container" id="portfolio">
      <div class="main-title">
         <h2>My <span>Services</span><span class="bg-text">My Work</span></h2>
      </div>
      <h3 class="port-text"><?= $bfrdata['services_title']; ?></h3>
      <p class="port-text">
         <?= $bfrdata['services_desc']; ?>
      </p>
      <div class="portfolios">
         <?php
            $servicesdb = "SELECT * FROM services";
            $queryservicesdb = mysqli_query($db, $servicesdb);
            while ($servicesdbdata = mysqli_fetch_array($queryservicesdb)) {
            ?>
         <div class="portfolio-item">
            <div class="services">
               <i  class="<?= $servicesdbdata['services_icon']; ?>"></i>
            </div>
            <div class="hover-items">
               <h3><?= $servicesdbdata['services_title']; ?></h3>
               <div class="icons">
                  <p><?= $servicesdbdata['services_desc']; ?></p>
               </div>
            </div>
         </div>
         <?php }; ?>
      </div>
   </section>
   <section class="container" id="blogs">
      <div class="blogs-content">
         <div class="main-title">
            <h2>My <span>Portfolio</span><span class="bg-text">My Portfolio</span></h2>
         </div>
         <h3 class="port-text"><?= $bfrdata['portfolio_title']; ?></h3>
         <p class="port-text">
            <?= $bfrdata['portfolio_desc']; ?>
         </p>
         <div class="blogs">
            <?php
               $portfoliodb = "SELECT * FROM portfolio";
               $queryportfoliodb = mysqli_query($db, $portfoliodb);
               while ($portfoliodbdata = mysqli_fetch_array($queryportfoliodb)) {
               ?>
            <div class="blog">
               <img src="<?=$base_img_portfolio?><?= $portfoliodbdata['portfolio_img']; ?>" alt="<?= $portfoliodbdata['portfolio_title']; ?>">
               <div class="blog-text">
                  <h4>
                     <a href="<?= $portfoliodbdata['portfolio_url']; ?>" target="_blank"><?= $portfoliodbdata['portfolio_title']; ?></a>
                  </h4>
                  <span class="portfolio-item-spane"><?= $portfoliodbdata['portfolio_types']; ?></span>
                  <p>
                     <?= $portfoliodbdata['portfolio_desc']; ?>
                  </p>
               </div>
            </div>
            <?php }; ?>
         </div>
      </div>
   </section>
   <section class="container contact" id="contact">
      <div class="contact-container">
         <div class="main-title">
            <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
         </div>
         <div class="contact-content-con">
            <div class="left-contact">
               <h4><?= $bfrdata['contact_title']; ?></h4>
               <p>
                  <?= $bfrdata['contact_desc']; ?>
               </p>
               <div class="contact-info">
                  <?php
                     if (!empty($seodata['address'])) {
                     ?>
                  <div class="contact-item">
                     <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Location</span>
                     </div>
                     <p>
                        : <?= $seodata['address']; ?>
                     </p>
                  </div>
                  <?php }; ?>
                  <?php if (!empty($bsmdata['contact_email'])) { ?>
                  <div class="contact-item">
                     <div class="icon">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                     </div>
                     <p>
                        <span>: <?= $bsmdata['contact_email']; ?></span>
                     </p>
                  </div>
                  <?php }; ?>
                  <?php if (!empty($bsmdata['s_contact_email'])) { ?>
                  <div class="contact-item">
                     <div class="icon">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                     </div>
                     <p>
                        <span>:  <?= $bsmdata['s_contact_email']; ?>	</span>
                     </p>
                  </div>
                  <?php }; ?>
                  <?php if (!empty($bsmdata['phone_number'])) { ?>
                  <div class="contact-item">
                     <div class="icon">
                        <i class="icon-phone"></i>
                        <span>Phone</span>
                     </div>
                     <p>
                        <span>: (+<?= $bsmdata['ncp']; ?>) <?= $bsmdata['phone_number']; ?></span>
                     </p>
                  </div>
                  <?php }; ?>
                  <?php if (!empty($bsmdata['mobile_number'])) { ?>
                  <div class="contact-item">
                     <div class="icon">
                        <i class="icon-phone"></i>
                        <span>Mobile</span>
                     </div>
                     <p>
                        <span>: (+<?= $bsmdata['ncm']; ?>) <?= $bsmdata['mobile_number']; ?></span>
                     </p>
                  </div>
                  <?php }; ?>
                  <?php if (!empty($bsmdata['fax_number'])) { ?>
                  <div class="contact-item">
                     <div class="icon">
                        <i class="icon-phone"></i>
                        <span>Fax</span>
                     </div>
                     <p>
                        <span>: (+<?= $bsmdata['ncf']; ?>) <?= $bsmdata['fax_number']; ?></span>
                     </p>
                  </div>
                  <?php }; ?>
               </div>
               <div class="contact-icons">
                  <div class="contact-icon">
                     <?php
                        $social = "SELECT * FROM social_networking";
                        $querysocial = mysqli_query($db, $social);
                        while ($socialdata = mysqli_fetch_array($querysocial)) {
                        ?>
                     <a href="<?= $socialdata['social_link']; ?>" target="_blank">
                     <i class="<?= $socialdata['icon_social']; ?>"></i>
                     </a>
                     <?php
                        }
                        ?> 
                  </div>
               </div>
            </div>
          
            <div class="right-contact">
               <div id="message-success">
                  <i class="fa fa-check"></i>
                  <span style="margin-left: 1rem;">Your message was sent, thank you!</span>
               </div>
               <div id="message-warning"></div>               
               <form name="contactForm" id="contactForm" class="contact-form" method="post" action="">
                  <div class="input-control form-field">
                     <input name="name" type="text" id="contactName" placeholder="YOUR NAME" value="" minlength="4" required="">
                     </div>
                     <div class="input-control form-field">
                     <input name="email" type="email" id="contactEmail" placeholder="YOUR EMAIL" value="" required="">
                  </div>
                  <div class="input-control form-field">
                     <input name="subject" type="text" id="contactSubject" placeholder="ENTER SUBJECT" minlength="6" value="" required="">
                  </div>
                  <div class="input-control form-field">
                     <textarea name="message" id="contactMessage" placeholder="Message Here..." minlength="15" rows="8" cols="15" required=""></textarea>
                  </div>
                  <div class="submit-btn form-field">
                  <button class="main-btn" name="sendcontact" style="
    width: 100%;
    height: 50px;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
">Submit</button>

                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
</main>
<div class="controls">
   <div class="control active-btn" data-id="home" >
      <i class="fas fa-home"></i>
   </div>
   <div class="control" data-id="about">
      <i class="fas fa-user"></i>
   </div>
   <div class="control" data-id="portfolio">
      <i class="fas fa-briefcase"></i>
   </div>
   <div class="control" data-id="blogs">
      <i class="far fa-newspaper"></i>
   </div>
   <div class="control" data-id="contact">
      <i class="fas fa-envelope-open"></i>
   </div>
</div>
<div class="theme-btn">
   <i class="fas fa-adjust"></i>
</div>


