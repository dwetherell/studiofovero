<!doctype html>
<head>
    <meta charset="utf-8">
    <title><?php
        echo isset($page_title) ? "{$page_title} : " : '';
        e(class_exists('Settings_lib') ? settings_item('site.title') : 'Studio Fovero');
    ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
      
     <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0" />
     
     

    <meta name="description" content="<?php e(isset($meta_description) ? $meta_description : ''); ?>">
    <meta name="author" content="<?php e(isset($meta_author) ? $meta_author : ''); ?>">
     <meta name="robots" content="nofollow" /><!-- SEO Use -->
    
     <meta name="keywords" content="" /><!-- SEO Use -->
     
   
     
  
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    

    <!-- Bootstrap Core CSS -->
    <link href="themes/default/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <link href="themes/default/css/studioStyles.css" rel="stylesheet">
     <link href="themes/default/css/nav.css" rel="stylesheet">
      <link href="themes/default/css/tablet.css" rel="stylesheet">
     <link href="themes/default/css/mobile.css" rel="stylesheet">
     
      <!-- Owl Carousel Assets -->
    <link href="themes/default/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="themes/default/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Prettify -->
    <link href="themes/default/js/google-code-prettify/prettify.css" rel="stylesheet">
     
     <script src="https://code.jquery.com/jquery.min.js"></script>
     

     <!-- Animation -->
     <script src="themes/default/js/animation/jquery.animsition.min.js"></script>
      <link href="themes/default/js/animation/animsition.min.css" rel="stylesheet">
     
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
  $bg = array('intro-bg3.jpg', 'intro-bg3.jpg', 'intro-bg3.jpg', 'intro-bg3.jpg', 'intro-bg3.jpg', 'intro-bg3.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

</head>
<body>
    
    <style type="text/css">
<!--
body{
background: url(themes/default/images/<?php echo $selectedBg; ?>) #000 no-repeat center center;
background-attachment:fixed;
background-position: left top;
background-position-x: 43%;
}
-->
</style>