<!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			     <?php
$social = "SELECT * FROM social_networking";
$querysocial = mysqli_query($db, $social);
while ($socialdata = mysqli_fetch_array($querysocial)) {
?>
         <li><a href="<?= $socialdata['social_link']; ?>" target="_blank"><i class="<?= $socialdata['icon_social']; ?>"></i></a></li>

<?php
}
?>   
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright <a href="<?= $seodata['coplink']?>" target="_blank"><?= $seodata['copyright']?></a> <?=date("Y");?>.</span> 
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="<?=$base_frontend_th_one_js?>jquery-2.1.3.min.js"></script>
   <script src="<?=$base_frontend_th_one_js?>plugins.js"></script>
   <script src="<?=$base_frontend_th_one_js?>main.js"></script>
