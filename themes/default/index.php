<?php 
echo theme_view('header'); 
 echo theme_view('_sitenav');
 error_reporting(0);
 //error_reporting(E_ALL ^ E_WARNING); 
?>


<div class="container"><!-- Start of Main Container -->
  <div class="animsition-overlay" data-animsition-overlay="true"> 
      
      <!--<div class="spinner"><img src="themes/studio-black/images/page-load.png" /></div>-->
      
    <?php
   
    
    echo Template::message();
    echo isset($content) ? $content : Template::content();
    //echo isset($content) ? $content : Template::yield();

    echo theme_view('footer');
    ?>

      </div>
     </div>