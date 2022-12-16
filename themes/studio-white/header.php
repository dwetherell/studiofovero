<!doctype html>
<head>
    <meta charset="utf-8">
    <title><?php
        echo isset($page_title) ? "{$page_title} : " : '';
        e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire');
    ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php e(isset($meta_description) ? $meta_description : ''); ?>">
    <meta name="author" content="<?php e(isset($meta_author) ? $meta_author : ''); ?>">
  
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    

    <!-- Bootstrap Core CSS -->
    <link href="themes/default/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   
     <link href="themes/default/css/studioStyles.css" rel="stylesheet">
     <link href="themes/default/css/nav.css" rel="stylesheet">
     <link href="themes/default/css/mobile.css" rel="stylesheet">
     
      <!-- Owl Carousel Assets -->
    <link href="themes/default/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="themes/default/js/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- Prettify -->
    <link href="themes/default/js/google-code-prettify/prettify.css" rel="stylesheet">
     
     <script src="http://code.jquery.com/jquery.min.js"></script>
     

     <!-- Animation -->
     <script src="themes/default/js/animation/jquery.animsition.min.js"></script>
      <link href="themes/default/js/animation/animsition.min.css" rel="stylesheet">
     
    <!-- Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
  $bg = array('intro-bg3.jpg', 'background-2.png', 'intro-bg3.jpg', 'background-2.png', 'intro-bg3.jpg', 'background-2.png'); // array of filenames

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