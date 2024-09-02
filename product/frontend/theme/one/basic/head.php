   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?= $seodata['title']?></title>
	<meta name="description" content="<?= $seodata['description']?>">  
   <meta name="keywords" content="<?= $seodata['keyword']?>"/>

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?=$base_frontend_th_one_css?>base.css">  
   <link rel="stylesheet" href="<?=$base_frontend_th_one_css?>main.css">
   <link rel="stylesheet" href="<?=$base_frontend_th_one_css?>vendor.css">   



  
   <!-- script
   ================================================== -->   
	<script src="<?=$base_frontend_th_one_js?>modernizr.js"></script>
	<script src="<?=$base_frontend_th_one_js?>pace.min.js"></script>

   <!-- favicons
	================================================== -->
   <link rel="shortcut icon" href="<?=$base_img_seo?><?= $seodata['icon']; ?>">
   <!-- Google tag (gtag.js)
	================================================== -->
   <?php
if (!empty($seodata['google_an'])) {
  echo '<script async src="https://www.googletagmanager.com/gtag/js?id='.$seodata['google_an'].'"></script>';
echo "<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '".$seodata['google_an']."');
</script>";
}
?>

<style>
	#intro {
	background: #151515 url(<?=$base_img_seo;?><?= $seodata['background']; ?>) no-repeat center bottom;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
	background-attachment: fixed;
	width: 100%;
	height: 100%;
	min-height: 720px;
	display: table;
	position: relative;
	text-align: center;
}
   </style>
