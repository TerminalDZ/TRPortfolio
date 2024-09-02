<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $seodata['title']?></title>
<meta name="description" content="<?= $seodata['description']?>">
<meta name="keywords" content="<?= $seodata['keyword']?>">
<link rel="shortcut icon" href="<?=$base_img_seo?><?= $seodata['icon']; ?>">
<link rel="stylesheet" href="<?=$base_frontend_th_two_css?>styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="https://use.fontawesome.com/d9245013f2.js"></script>

<!-- Google tag (gtag.js)
   ================================================== -->
<?php
   if (!empty($seodata['google_an'])) {
     echo '<script async src="https://www.googletagmanager.com/gtag/js?id='.$seodata['google_an'].'"></script>';
   }
   ?>