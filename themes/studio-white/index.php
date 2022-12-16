<?php 
echo theme_view('header'); 
 echo theme_view('_sitenav');
?>

<div class="container"><!-- Start of Main Container -->
  <div class="animsition-overlay" data-animsition-overlay="true"> 
      
      <!--<div class="spinner"><img src="themes/default/images/page-load.png" /></div>-->
      
    <?php
   
    
    echo Template::message();
    echo isset($content) ? $content : Template::content();

    echo theme_view('footer');
    ?>

      </div>
     </div>