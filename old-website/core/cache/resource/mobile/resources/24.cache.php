<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 24,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'contact',
    'longtitle' => 'contact',
    'description' => 'contact',
    'alias' => 'contact',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p>Hey contact us</p>',
    'richtext' => 1,
    'template' => 12,
    'menuindex' => 5,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1375705442,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1375705442,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'mobile',
    'content_type' => 1,
    'uri' => 'contact.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'mobile-products-1' => 
    array (
      0 => 'mobile-products-1',
      1 => '',
      2 => 'image',
      3 => NULL,
      4 => 'image',
    ),
    'mobile_body' => 
    array (
      0 => 'mobile_body',
      1 => '',
      2 => 'htmltag',
      3 => NULL,
      4 => 'richtext',
    ),
    'mobile-images' => 
    array (
      0 => 'mobile-images',
      1 => '',
      2 => 'image',
      3 => NULL,
      4 => 'image',
    ),
    'mobile-products-2' => 
    array (
      0 => 'mobile-products-2',
      1 => '',
      2 => 'image',
      3 => NULL,
      4 => 'image',
    ),
    'mobile-products-3' => 
    array (
      0 => 'mobile-products-3',
      1 => '',
      2 => 'image',
      3 => NULL,
      4 => 'image',
    ),
    'mobile-products-4' => 
    array (
      0 => 'mobile-products-4',
      1 => '',
      2 => 'image',
      3 => NULL,
      4 => 'image',
    ),
    'headerimage' => 
    array (
      0 => 'headerimage',
      1 => '',
      2 => 'image',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Studio Fovero Salon and Spa</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/social.css">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/twitter.js"></script>
<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,500italic,700italic" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/mobile.style.css">






</head>
<body>
	<!-- Mobile-freindly navbar adapted from example-->
	<!-- http://twitter.github.io/bootstrap/examples/start-templete.html-->
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Studio Fovero Salon and Spa</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="http://www.mobile.studiofovero.com/">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="products.html">Products</a></li>
               <li><a href="promotions.html">Promotions</a></li>
           <li><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
		</div>
	</div>
</div>	

     <div class="container">
       <a href="tel:16144458866"> <button class="btn-callnow"><i class="icon-twitter"></i> Call Us Now</button> </a>

        <div class="row-fluid heading">
        <div class="span12">
         <h2>  contact</h2>
         </div>
       </div>
      <div class="row-fluid subheading">
         <div class="span12">

            <p class="lead"><div></div></p>

 [[!FormIt?
&hooks=`spam,email,FormSave,redirect,FormItAutoResponder`
&emailFrom=`Studio Fovero Salon and Spa`
&emailTpl=`sentEmailTpl`
&fsFormTopic=`Contact Studio Fovero List`
&emailSubject=`Studio Fovero Website Request`
&emailTo=`lildebbie@studiofovero.com`
&emailBCC=`dave@thecreativestory.com`
&redirectTo=`1`
&validate=`name:required,
  email:email:required,
  subject:required,
  text:required:stripTags`

&fiarTpl=`autoResponseTpl`
&fiarSubject=`Thank You for Contacting Studio Fovero Salon and Spa`
&fiarReplyTo=`lildebbie@studiofovero.com`
&fiarToField=`email`
&fiarFromName=`Studio Fovero Salon and Spa`
&fiarBCC=`dave@thecreativestory.com`	
 &fiarBCCName=`David Wetherell`
]]

<h6></h6>

<div></div>
</br>

[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]

<form action="contact.html" method="post" class="contactForm">
<input type="hidden" name="nospam:blank" value="" />
<div> 

<label for="name" style="float: left";>Name:</label>
<input type="text" name="name" size="100" id="name" value="[[!+fi.name]]" />
<span class="error">[[!+fi.error.name]]</span></div>

</br>

<div> <label for="email" style="float: left";>Email:</label>
<input type="text" name="email" size="100" id="email" value="[[!+fi.email]]" />
<span class="error">[[!+fi.error.email]]</span></div>

</br>


<div> <label for="subject" style="float: left";>Subject:</label>
<input type="text" name="subject" size="98" id="subject" value="[[!+fi.subject]]" />
<span class="error">[[!+fi.error.subject]]</span></div>


</br>


<label for="text" style="float: left";>Message:<span class="error">[[!+fi.error.text]]</span></label>
<textarea name="text" id="text" cols="80" rows="7" value="[[!+fi.text]]">[[!+fi.text]]</textarea>

</br>
</br>

<input type="submit" value="Send to Studio Fovero" class="submitBtn" />
</br>
</form>


        </div>
       </div>



<div class="row-fluid pitch">

        <!-- We define a new \'actions\' div to contain statistics, order, and share buttons -->
 <div class="span5 actions">
<div class="span8 offset2 social">
		<!-- Social buttons are not included in default Bootstrap -->
		<!-- See: http://noizwaves.github.io/bootstrap-social-buttons -->
<a rel="nofollow" href="http://m.facebook.com/sharer.php?u=https://www.facebook.com/StudioFovero" onclick="return fbs_click()" target="_blank" class=""> <button class="btn btn-facebook"><i class="icon-facebook"></i> Share Facebook</button  </a>


		</br></br>


<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>   
<a href="javascript:return false;" rel="nofollow" onclick="window.open(\'https://twitter.com/share?text=Studio Fovero Salon and Spa located smack-dab in the middle of the German Village Columbus Ohio website: www.studiofovero.com &url=www.studiofovero.com\', \'Twitter\', \'toolbar=0,status=0,width=626,height=436\')">   <button class="btn btn-twitter"><i class="icon-twitter"></i> Share Twitter</button>                     </a>
		
	</div>
	
		</div>
			</div>

 	
      		<div class="row-fluid faq">
      			<div class="span10 offset1">
      				<h3>Studio Fovero Information</h3>
      				<div class="accordion" id="accordion2">
      					<div class="accordion-group">
      						<div class="accordion-heading">
      							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Address</a>
      						</div>
      						<div id="collapseOne" class="accordion-body collapse">
      							 <div class="accordion-inner">
       								102 E. Whittier St.</br>
                                                                Columbus, Ohio 43206


      								
      							</div>
      							
      							
      						</div>
      						
      					</div>
      					
      					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
      							Phone
      						</a>
                   </div>
                   <div id="collapseTwo" class="accordion-body collapse">
                   <div class="accordion-inner">
Phone: 614.445.8866
                 </div>
                </div>
      		 </div>
      		       					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
      							How to schedule an appointment?
      						</a>
                   </div>
                   <div id="collapseThree" class="accordion-body collapse">
                   <div class="accordion-inner">
                  <a href="tel:16144458866"> <button class="btn-callnow"><i class="icon-twitter"></i> Call to Schedule</button> </a>
                 </div>
                </div>
      		 </div>
      	 </div>
      </div>
    </div>
    
       
      <!-- Not crucial but we put this under a CC By-SA 3.0 license   -->
      <!-- http://creativecommons.org/license/ -->
      <div class="row-fluid footer">
      	
      	<div class="span12">
      		<p>Studio Fovero Salon and Spa </br> Artistically Engineered by: <a href="www.limeflies.com" target="_blank">LiimeFlies Development</a> </p>
      		
      	</div>
    </div><!-- footer end -->

</div><!--container-->
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-39958452-1\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>    

</body>
</html>
          ',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$mobile-style]]' => '

<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/social.css">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/twitter.js"></script>
<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,500italic,700italic" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/mobile.style.css">




',
    '[[~19]]' => 'http://www.mobile.studiofovero.com/',
    '[[~20]]' => 'about.html',
    '[[~21]]' => 'services.html',
    '[[~22]]' => 'products.html',
    '[[~23]]' => 'promotions.html',
    '[[~24]]' => 'contact.html',
    '[[$menu]]' => '	<!-- Mobile-freindly navbar adapted from example-->
	<!-- http://twitter.github.io/bootstrap/examples/start-templete.html-->
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Studio Fovero Salon and Spa</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="http://www.mobile.studiofovero.com/">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="products.html">Products</a></li>
               <li><a href="promotions.html">Promotions</a></li>
           <li><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
		</div>
	</div>
</div>	',
    '[[*pagetitle]]' => 'contact',
    '[[*mobile_body]]' => '<div></div>',
    '[[*menutitle]]' => '',
    '[[*contactus]]' => '<div></div>',
    '[[*id]]' => 24,
    '[[$mobileEmail]]' => '
 [[!FormIt?
&hooks=`spam,email,FormSave,redirect,FormItAutoResponder`
&emailFrom=`Studio Fovero Salon and Spa`
&emailTpl=`sentEmailTpl`
&fsFormTopic=`Contact Studio Fovero List`
&emailSubject=`Studio Fovero Website Request`
&emailTo=`lildebbie@studiofovero.com`
&emailBCC=`dave@thecreativestory.com`
&redirectTo=`1`
&validate=`name:required,
  email:email:required,
  subject:required,
  text:required:stripTags`

&fiarTpl=`autoResponseTpl`
&fiarSubject=`Thank You for Contacting Studio Fovero Salon and Spa`
&fiarReplyTo=`lildebbie@studiofovero.com`
&fiarToField=`email`
&fiarFromName=`Studio Fovero Salon and Spa`
&fiarBCC=`dave@thecreativestory.com`	
 &fiarBCCName=`David Wetherell`
]]

<h6></h6>

<div></div>
</br>

[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]

<form action="contact.html" method="post" class="contactForm">
<input type="hidden" name="nospam:blank" value="" />
<div> 

<label for="name" style="float: left";>Name:</label>
<input type="text" name="name" size="100" id="name" value="[[!+fi.name]]" />
<span class="error">[[!+fi.error.name]]</span></div>

</br>

<div> <label for="email" style="float: left";>Email:</label>
<input type="text" name="email" size="100" id="email" value="[[!+fi.email]]" />
<span class="error">[[!+fi.error.email]]</span></div>

</br>


<div> <label for="subject" style="float: left";>Subject:</label>
<input type="text" name="subject" size="98" id="subject" value="[[!+fi.subject]]" />
<span class="error">[[!+fi.error.subject]]</span></div>


</br>


<label for="text" style="float: left";>Message:<span class="error">[[!+fi.error.text]]</span></label>
<textarea name="text" id="text" cols="80" rows="7" value="[[!+fi.text]]">[[!+fi.text]]</textarea>

</br>
</br>

<input type="submit" value="Send to Studio Fovero" class="submitBtn" />
</br>
</form>',
    '[[$mobile-footer]]' => '
<div class="row-fluid pitch">

        <!-- We define a new \'actions\' div to contain statistics, order, and share buttons -->
 <div class="span5 actions">
<div class="span8 offset2 social">
		<!-- Social buttons are not included in default Bootstrap -->
		<!-- See: http://noizwaves.github.io/bootstrap-social-buttons -->
<a rel="nofollow" href="http://m.facebook.com/sharer.php?u=https://www.facebook.com/StudioFovero" onclick="return fbs_click()" target="_blank" class=""> <button class="btn btn-facebook"><i class="icon-facebook"></i> Share Facebook</button  </a>


		</br></br>


<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>   
<a href="javascript:return false;" rel="nofollow" onclick="window.open(\'https://twitter.com/share?text=Studio Fovero Salon and Spa located smack-dab in the middle of the German Village Columbus Ohio website: www.studiofovero.com &url=www.studiofovero.com\', \'Twitter\', \'toolbar=0,status=0,width=626,height=436\')">   <button class="btn btn-twitter"><i class="icon-twitter"></i> Share Twitter</button>                     </a>
		
	</div>
	
		</div>
			</div>

 	
      		<div class="row-fluid faq">
      			<div class="span10 offset1">
      				<h3>Studio Fovero Information</h3>
      				<div class="accordion" id="accordion2">
      					<div class="accordion-group">
      						<div class="accordion-heading">
      							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Address</a>
      						</div>
      						<div id="collapseOne" class="accordion-body collapse">
      							 <div class="accordion-inner">
       								102 E. Whittier St.</br>
                                                                Columbus, Ohio 43206


      								
      							</div>
      							
      							
      						</div>
      						
      					</div>
      					
      					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
      							Phone
      						</a>
                   </div>
                   <div id="collapseTwo" class="accordion-body collapse">
                   <div class="accordion-inner">
Phone: 614.445.8866
                 </div>
                </div>
      		 </div>
      		       					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
      							How to schedule an appointment?
      						</a>
                   </div>
                   <div id="collapseThree" class="accordion-body collapse">
                   <div class="accordion-inner">
                  <a href="tel:16144458866"> <button class="btn-callnow"><i class="icon-twitter"></i> Call to Schedule</button> </a>
                 </div>
                </div>
      		 </div>
      	 </div>
      </div>
    </div>
    
       
      <!-- Not crucial but we put this under a CC By-SA 3.0 license   -->
      <!-- http://creativecommons.org/license/ -->
      <div class="row-fluid footer">
      	
      	<div class="span12">
      		<p>Studio Fovero Salon and Spa </br> Artistically Engineered by: <a href="www.limeflies.com" target="_blank">LiimeFlies Development</a> </p>
      		
      	</div>
    </div><!-- footer end -->',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'mobile-style' => 
      array (
        'fields' => 
        array (
          'id' => 38,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mobile-style',
          'description' => 'this is the style sheets for the mobile pages',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '

<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/social.css">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/twitter.js"></script>
<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,500italic,700italic" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/mobile.style.css">




',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '

<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/social.css">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/twitter.js"></script>
<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,500italic,700italic" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/mobile.style.css">




',
        ),
        'policies' => 
        array (
          'mobile' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'menu' => 
      array (
        'fields' => 
        array (
          'id' => 36,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'menu',
          'description' => 'this is the menu',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '	<!-- Mobile-freindly navbar adapted from example-->
	<!-- http://twitter.github.io/bootstrap/examples/start-templete.html-->
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Studio Fovero Salon and Spa</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="[[~19]]">Home</a></li>
              <li><a href="[[~20]]">About</a></li>
              <li><a href="[[~21]]">Services</a></li>
              <li><a href="[[~22]]">Products</a></li>
               <li><a href="[[~23]]">Promotions</a></li>
           <li><a href="[[~24]]">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
		</div>
	</div>
</div>	',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '	<!-- Mobile-freindly navbar adapted from example-->
	<!-- http://twitter.github.io/bootstrap/examples/start-templete.html-->
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Studio Fovero Salon and Spa</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="[[~19]]">Home</a></li>
              <li><a href="[[~20]]">About</a></li>
              <li><a href="[[~21]]">Services</a></li>
              <li><a href="[[~22]]">Products</a></li>
               <li><a href="[[~23]]">Promotions</a></li>
           <li><a href="[[~24]]">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
		</div>
	</div>
</div>	',
        ),
        'policies' => 
        array (
          'mobile' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mobileEmail' => 
      array (
        'fields' => 
        array (
          'id' => 43,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mobileEmail',
          'description' => 'This is the contact form',
          'editor_type' => 0,
          'category' => 24,
          'cache_type' => 0,
          'snippet' => '
 [[!FormIt?
&hooks=`spam,email,FormSave,redirect,FormItAutoResponder`
&emailFrom=`Studio Fovero Salon and Spa`
&emailTpl=`sentEmailTpl`
&fsFormTopic=`Contact Studio Fovero List`
&emailSubject=`Studio Fovero Website Request`
&emailTo=`lildebbie@studiofovero.com`
&emailBCC=`dave@thecreativestory.com`
&redirectTo=`1`
&validate=`name:required,
  email:email:required,
  subject:required,
  text:required:stripTags`

&fiarTpl=`autoResponseTpl`
&fiarSubject=`Thank You for Contacting Studio Fovero Salon and Spa`
&fiarReplyTo=`lildebbie@studiofovero.com`
&fiarToField=`email`
&fiarFromName=`Studio Fovero Salon and Spa`
&fiarBCC=`dave@thecreativestory.com`	
 &fiarBCCName=`David Wetherell`
]]

<h6>[[*menutitle]]</h6>

[[*contactus]]
</br>

[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]

<form action="[[~[[*id]]]]" method="post" class="contactForm">
<input type="hidden" name="nospam:blank" value="" />
<div> 

<label for="name" style="float: left";>Name:</label>
<input type="text" name="name" size="100" id="name" value="[[!+fi.name]]" />
<span class="error">[[!+fi.error.name]]</span></div>

</br>

<div> <label for="email" style="float: left";>Email:</label>
<input type="text" name="email" size="100" id="email" value="[[!+fi.email]]" />
<span class="error">[[!+fi.error.email]]</span></div>

</br>


<div> <label for="subject" style="float: left";>Subject:</label>
<input type="text" name="subject" size="98" id="subject" value="[[!+fi.subject]]" />
<span class="error">[[!+fi.error.subject]]</span></div>


</br>


<label for="text" style="float: left";>Message:<span class="error">[[!+fi.error.text]]</span></label>
<textarea name="text" id="text" cols="80" rows="7" value="[[!+fi.text]]">[[!+fi.text]]</textarea>

</br>
</br>

<input type="submit" value="Send to Studio Fovero" class="submitBtn" />
</br>
</form>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
 [[!FormIt?
&hooks=`spam,email,FormSave,redirect,FormItAutoResponder`
&emailFrom=`Studio Fovero Salon and Spa`
&emailTpl=`sentEmailTpl`
&fsFormTopic=`Contact Studio Fovero List`
&emailSubject=`Studio Fovero Website Request`
&emailTo=`lildebbie@studiofovero.com`
&emailBCC=`dave@thecreativestory.com`
&redirectTo=`1`
&validate=`name:required,
  email:email:required,
  subject:required,
  text:required:stripTags`

&fiarTpl=`autoResponseTpl`
&fiarSubject=`Thank You for Contacting Studio Fovero Salon and Spa`
&fiarReplyTo=`lildebbie@studiofovero.com`
&fiarToField=`email`
&fiarFromName=`Studio Fovero Salon and Spa`
&fiarBCC=`dave@thecreativestory.com`	
 &fiarBCCName=`David Wetherell`
]]

<h6>[[*menutitle]]</h6>

[[*contactus]]
</br>

[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]

<form action="[[~[[*id]]]]" method="post" class="contactForm">
<input type="hidden" name="nospam:blank" value="" />
<div> 

<label for="name" style="float: left";>Name:</label>
<input type="text" name="name" size="100" id="name" value="[[!+fi.name]]" />
<span class="error">[[!+fi.error.name]]</span></div>

</br>

<div> <label for="email" style="float: left";>Email:</label>
<input type="text" name="email" size="100" id="email" value="[[!+fi.email]]" />
<span class="error">[[!+fi.error.email]]</span></div>

</br>


<div> <label for="subject" style="float: left";>Subject:</label>
<input type="text" name="subject" size="98" id="subject" value="[[!+fi.subject]]" />
<span class="error">[[!+fi.error.subject]]</span></div>


</br>


<label for="text" style="float: left";>Message:<span class="error">[[!+fi.error.text]]</span></label>
<textarea name="text" id="text" cols="80" rows="7" value="[[!+fi.text]]">[[!+fi.text]]</textarea>

</br>
</br>

<input type="submit" value="Send to Studio Fovero" class="submitBtn" />
</br>
</form>',
        ),
        'policies' => 
        array (
          'mobile' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mobile-footer' => 
      array (
        'fields' => 
        array (
          'id' => 37,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mobile-footer',
          'description' => 'this is the mobile footer',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '
<div class="row-fluid pitch">

        <!-- We define a new \'actions\' div to contain statistics, order, and share buttons -->
 <div class="span5 actions">
<div class="span8 offset2 social">
		<!-- Social buttons are not included in default Bootstrap -->
		<!-- See: http://noizwaves.github.io/bootstrap-social-buttons -->
<a rel="nofollow" href="http://m.facebook.com/sharer.php?u=https://www.facebook.com/StudioFovero" onclick="return fbs_click()" target="_blank" class=""> <button class="btn btn-facebook"><i class="icon-facebook"></i> Share Facebook</button  </a>


		</br></br>


<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>   
<a href="javascript:return false;" rel="nofollow" onclick="window.open(\'https://twitter.com/share?text=Studio Fovero Salon and Spa located smack-dab in the middle of the German Village Columbus Ohio website: www.studiofovero.com &url=www.studiofovero.com\', \'Twitter\', \'toolbar=0,status=0,width=626,height=436\')">   <button class="btn btn-twitter"><i class="icon-twitter"></i> Share Twitter</button>                     </a>
		
	</div>
	
		</div>
			</div>

 	
      		<div class="row-fluid faq">
      			<div class="span10 offset1">
      				<h3>Studio Fovero Information</h3>
      				<div class="accordion" id="accordion2">
      					<div class="accordion-group">
      						<div class="accordion-heading">
      							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Address</a>
      						</div>
      						<div id="collapseOne" class="accordion-body collapse">
      							 <div class="accordion-inner">
       								102 E. Whittier St.</br>
                                                                Columbus, Ohio 43206


      								
      							</div>
      							
      							
      						</div>
      						
      					</div>
      					
      					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
      							Phone
      						</a>
                   </div>
                   <div id="collapseTwo" class="accordion-body collapse">
                   <div class="accordion-inner">
Phone: 614.445.8866
                 </div>
                </div>
      		 </div>
      		       					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
      							How to schedule an appointment?
      						</a>
                   </div>
                   <div id="collapseThree" class="accordion-body collapse">
                   <div class="accordion-inner">
                  <a href="tel:16144458866"> <button class="btn-callnow"><i class="icon-twitter"></i> Call to Schedule</button> </a>
                 </div>
                </div>
      		 </div>
      	 </div>
      </div>
    </div>
    
       
      <!-- Not crucial but we put this under a CC By-SA 3.0 license   -->
      <!-- http://creativecommons.org/license/ -->
      <div class="row-fluid footer">
      	
      	<div class="span12">
      		<p>Studio Fovero Salon and Spa </br> Artistically Engineered by: <a href="www.limeflies.com" target="_blank">LiimeFlies Development</a> </p>
      		
      	</div>
    </div><!-- footer end -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<div class="row-fluid pitch">

        <!-- We define a new \'actions\' div to contain statistics, order, and share buttons -->
 <div class="span5 actions">
<div class="span8 offset2 social">
		<!-- Social buttons are not included in default Bootstrap -->
		<!-- See: http://noizwaves.github.io/bootstrap-social-buttons -->
<a rel="nofollow" href="http://m.facebook.com/sharer.php?u=https://www.facebook.com/StudioFovero" onclick="return fbs_click()" target="_blank" class=""> <button class="btn btn-facebook"><i class="icon-facebook"></i> Share Facebook</button  </a>


		</br></br>


<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>   
<a href="javascript:return false;" rel="nofollow" onclick="window.open(\'https://twitter.com/share?text=Studio Fovero Salon and Spa located smack-dab in the middle of the German Village Columbus Ohio website: www.studiofovero.com &url=www.studiofovero.com\', \'Twitter\', \'toolbar=0,status=0,width=626,height=436\')">   <button class="btn btn-twitter"><i class="icon-twitter"></i> Share Twitter</button>                     </a>
		
	</div>
	
		</div>
			</div>

 	
      		<div class="row-fluid faq">
      			<div class="span10 offset1">
      				<h3>Studio Fovero Information</h3>
      				<div class="accordion" id="accordion2">
      					<div class="accordion-group">
      						<div class="accordion-heading">
      							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Address</a>
      						</div>
      						<div id="collapseOne" class="accordion-body collapse">
      							 <div class="accordion-inner">
       								102 E. Whittier St.</br>
                                                                Columbus, Ohio 43206


      								
      							</div>
      							
      							
      						</div>
      						
      					</div>
      					
      					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
      							Phone
      						</a>
                   </div>
                   <div id="collapseTwo" class="accordion-body collapse">
                   <div class="accordion-inner">
Phone: 614.445.8866
                 </div>
                </div>
      		 </div>
      		       					<div class="accordion-group">
      						<div class="accordion-heading">
      						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
      							How to schedule an appointment?
      						</a>
                   </div>
                   <div id="collapseThree" class="accordion-body collapse">
                   <div class="accordion-inner">
                  <a href="tel:16144458866"> <button class="btn-callnow"><i class="icon-twitter"></i> Call to Schedule</button> </a>
                 </div>
                </div>
      		 </div>
      	 </div>
      </div>
    </div>
    
       
      <!-- Not crucial but we put this under a CC By-SA 3.0 license   -->
      <!-- http://creativecommons.org/license/ -->
      <div class="row-fluid footer">
      	
      	<div class="span12">
      		<p>Studio Fovero Salon and Spa </br> Artistically Engineered by: <a href="www.limeflies.com" target="_blank">LiimeFlies Development</a> </p>
      		
      	</div>
    </div><!-- footer end -->',
        ),
        'policies' => 
        array (
          'mobile' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'FormIt' => 
      array (
        'fields' => 
        array (
          'id' => 34,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormIt',
          'description' => 'A dynamic form processing snippet.',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
          'locked' => false,
          'properties' => 
          array (
            'hooks' => 
            array (
              'name' => 'hooks',
              'desc' => 'prop_formit.hooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the form passes validation. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_formit.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, once the form loads. You can pre-set form fields via $scriptProperties[`hook`]->fields[`fieldname`]. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_formit.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set, will not begin form processing if this POST variable is not passed.',
              'area_trans' => '',
            ),
            'validate' => 
            array (
              'name' => 'validate',
              'desc' => 'prop_formit.validate_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of fields to validate, with each field name as name:validator (eg: username:required,email:required). Validators can also be chained, like email:email:required. This property can be specified on multiple lines.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_formit.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<span class="error">[[+error]]</span>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The wrapper template for error messages.',
              'area_trans' => '',
            ),
            'validationErrorMessage' => 
            array (
              'name' => 'validationErrorMessage',
              'desc' => 'prop_formit.validationerrormessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A general error message to set to a placeholder if validation fails. Can contain [[+errors]] if you want to display a list of all errors at the top.',
              'area_trans' => '',
            ),
            'validationErrorBulkTpl' => 
            array (
              'name' => 'validationErrorBulkTpl',
              'desc' => 'prop_formit.validationerrorbulktpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li>[[+error]]</li>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'HTML tpl that is used for each individual error in the generic validation error message value.',
              'area_trans' => '',
            ),
            'trimValuesBeforeValidation' => 
            array (
              'name' => 'trimValuesBeforeValidation',
              'desc' => 'prop_formit.trimvaluesdeforevalidation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to trim spaces from the beginning and end of values before attempting validation. Defaults to true.',
              'area_trans' => '',
            ),
            'customValidators' => 
            array (
              'name' => 'customValidators',
              'desc' => 'prop_formit.customvalidators_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of custom validator names (snippets) you plan to use in this form. They must be explicitly stated here, or they will not be run.',
              'area_trans' => '',
            ),
            'clearFieldsOnSuccess' => 
            array (
              'name' => 'clearFieldsOnSuccess',
              'desc' => 'prop_formit.clearfieldsonsuccess_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true, will clear the fields on a successful form submission that does not redirect.',
              'area_trans' => '',
            ),
            'successMessage' => 
            array (
              'name' => 'successMessage',
              'desc' => 'prop_formit.successmessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set, will set this a placeholder with the name of the value of the property &successMessagePlaceholder, which defaults to `fi.successMessage`.',
              'area_trans' => '',
            ),
            'successMessagePlaceholder' => 
            array (
              'name' => 'successMessagePlaceholder',
              'desc' => 'prop_formit.successmessageplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.successMessage',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The placeholder to set the success message to.',
              'area_trans' => '',
            ),
            'store' => 
            array (
              'name' => 'store',
              'desc' => 'prop_formit.store_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true, will store the data in the cache for retrieval using the FormItRetriever snippet.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_formit.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for all placeholders set by FormIt for fields. Defaults to `fi.`',
              'area_trans' => '',
            ),
            'storeTime' => 
            array (
              'name' => 'storeTime',
              'desc' => 'prop_formit.storetime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 300,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `store` is set to true, this specifies the number of seconds to store the data from the form submission. Defaults to five minutes.',
              'area_trans' => '',
            ),
            'allowFiles' => 
            array (
              'name' => 'allowFiles',
              'desc' => 'prop_formit.allowfiles_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set to 0, will prevent files from being submitted on the form.',
              'area_trans' => '',
            ),
            'spamEmailFields' => 
            array (
              'name' => 'spamEmailFields',
              'desc' => 'prop_formit.spamemailfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `spam` is set as a hook, a comma-separated list of fields containing emails to check spam against.',
              'area_trans' => '',
            ),
            'spamCheckIp' => 
            array (
              'name' => 'spamCheckIp',
              'desc' => 'prop_formit.spamcheckip_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `spam` is set as a hook, and this is true, will check the IP as well.',
              'area_trans' => '',
            ),
            'recaptchaJs' => 
            array (
              'name' => 'recaptchaJs',
              'desc' => 'prop_formit.recaptchajs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '{}',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a hook, this can be a JSON object that will be set to the JS RecaptchaOptions variable, which configures options for reCaptcha.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_formit.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'formit.opt_red',
                  'value' => 'red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'text' => 'formit.opt_white',
                  'value' => 'white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'text' => 'formit.opt_clean',
                  'value' => 'clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'text' => 'formit.opt_blackglass',
                  'value' => 'blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a hook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
            'redirectTo' => 
            array (
              'name' => 'redirectTo',
              'desc' => 'prop_formit.redirectto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `redirect` is set as a hook, this must specify the Resource ID to redirect to.',
              'area_trans' => '',
            ),
            'redirectParams' => 
            array (
              'name' => 'redirectParams',
              'desc' => 'prop_formit.redirectparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A JSON array of parameters to pass to the redirect hook that will be passed when redirecting.',
              'area_trans' => '',
            ),
            'emailTo' => 
            array (
              'name' => 'emailTo',
              'desc' => 'prop_formit.emailto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailToName' => 
            array (
              'name' => 'emailToName',
              'desc' => 'prop_formit.emailtoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailTo` property.',
              'area_trans' => '',
            ),
            'emailFrom' => 
            array (
              'name' => 'emailFrom',
              'desc' => 'prop_formit.emailfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the From: address for the email. If not set, will first look for an `email` form field. If none is found, will default to the `emailsender` system setting.',
              'area_trans' => '',
            ),
            'emailFromName' => 
            array (
              'name' => 'emailFromName',
              'desc' => 'prop_formit.emailfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the From: name for the email.',
              'area_trans' => '',
            ),
            'emailReplyTo' => 
            array (
              'name' => 'emailReplyTo',
              'desc' => 'prop_formit.emailreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Reply-To: address for the email.',
              'area_trans' => '',
            ),
            'emailReplyToName' => 
            array (
              'name' => 'emailReplyToName',
              'desc' => 'prop_formit.emailreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Reply-To: name for the email.',
              'area_trans' => '',
            ),
            'emailCC' => 
            array (
              'name' => 'emailCC',
              'desc' => 'prop_formit.emailcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to as a CC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailCCName' => 
            array (
              'name' => 'emailCCName',
              'desc' => 'prop_formit.emailccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailCC` property.',
              'area_trans' => '',
            ),
            'emailBCC' => 
            array (
              'name' => 'emailBCC',
              'desc' => 'prop_formit.emailbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to as a BCC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailBCCName' => 
            array (
              'name' => 'emailBCCName',
              'desc' => 'prop_formit.emailbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailBCC` property.',
              'area_trans' => '',
            ),
            'emailSubject' => 
            array (
              'name' => 'emailSubject',
              'desc' => 'prop_formit.emailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, this is required as a subject line for the email.',
              'area_trans' => '',
            ),
            'emailUseFieldForSubject' => 
            array (
              'name' => 'emailUseFieldForSubject',
              'desc' => 'prop_formit.emailusefieldforsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If the field `subject` is passed into the form, if this is true, it will use the field content for the subject line of the email.',
              'area_trans' => '',
            ),
            'emailHtml' => 
            array (
              'name' => 'emailHtml',
              'desc' => 'prop_formit.emailhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, this toggles HTML emails or not. Defaults to true.',
              'area_trans' => '',
            ),
            'emailConvertNewlines' => 
            array (
              'name' => 'emailConvertNewlines',
              'desc' => 'prop_formit.emailconvertnewlines_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true and emailHtml is set to 1, will convert newlines to BR tags in the email.',
              'area_trans' => '',
            ),
            'emailMultiWrapper' => 
            array (
              'name' => 'emailMultiWrapper',
              'desc' => 'prop_formit.emailmultiwrapper_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+value]]',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Will wrap each item in a collection of fields sent via checkboxes/multi-selects. Defaults to just the value.',
              'area_trans' => '',
            ),
            'emailMultiSeparator' => 
            array (
              'name' => 'emailMultiSeparator',
              'desc' => 'prop_formit.emailmultiseparator_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.emailmultiseparator_desc',
              'area_trans' => '',
            ),
            'fiarTpl' => 
            array (
              'name' => 'fiarTpl',
              'desc' => 'prop_fiar.fiartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies auto-response template to send as the email.',
              'area_trans' => '',
            ),
            'fiarToField' => 
            array (
              'name' => 'fiarToField',
              'desc' => 'prop_fiar.fiartofield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies which form field shall be used for the To: address in the auto-response email.',
              'area_trans' => '',
            ),
            'fiarSubject' => 
            array (
              'name' => 'fiarSubject',
              'desc' => 'prop_fiar.fiarsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[++site_name]] Auto-Responder',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, this is required as a subject line for the email.',
              'area_trans' => '',
            ),
            'fiarFrom' => 
            array (
              'name' => 'fiarFrom',
              'desc' => 'prop_fiar.fiarfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the From: address for the email. If not set, will first look for an `email` form field. If none is found, will default to the `emailsender` system setting.',
              'area_trans' => '',
            ),
            'fiarFromName' => 
            array (
              'name' => 'fiarFromName',
              'desc' => 'prop_fiar.fiarfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the From: name for the email.',
              'area_trans' => '',
            ),
            'fiarReplyTo' => 
            array (
              'name' => 'fiarReplyTo',
              'desc' => 'prop_fiar.fiarreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the Reply-To: address for the email.',
              'area_trans' => '',
            ),
            'fiarReplyToName' => 
            array (
              'name' => 'fiarReplyToName',
              'desc' => 'prop_fiar.fiarreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the Reply-To: name for the email.',
              'area_trans' => '',
            ),
            'fiarCC' => 
            array (
              'name' => 'fiarCC',
              'desc' => 'prop_fiar.fiarcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies the email(s) to send the email to as a CC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'fiarCCName' => 
            array (
              'name' => 'fiarCCName',
              'desc' => 'prop_fiar.fiarccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailCC` property.',
              'area_trans' => '',
            ),
            'fiarBCC' => 
            array (
              'name' => 'fiarBCC',
              'desc' => 'prop_fiar.fiarbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies the email(s) to send the email to as a BCC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'fiarBCCName' => 
            array (
              'name' => 'fiarBCCName',
              'desc' => 'prop_fiar.fiarbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailBCC` property.',
              'area_trans' => '',
            ),
            'fiarHtml' => 
            array (
              'name' => 'fiarHtml',
              'desc' => 'prop_fiar.fiarhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, this toggles HTML emails or not. Defaults to true.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_math.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the minimum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_math.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 100,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the maximum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_math.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the input field for the answer.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_math.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the field for the 1st number in the equation.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_math.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the field for the 2nd number in the equation.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_math.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the field for the operator in the equation.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
        ),
        'policies' => 
        array (
          'mobile' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'mobile_body' => 
      array (
        'fields' => 
        array (
          'id' => 57,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'richtext',
          'name' => 'mobile_body',
          'caption' => 'Mobile Page Body',
          'description' => 'Mobile Page Body',
          'editor_type' => 0,
          'category' => 19,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'htmltag',
          'default_text' => '',
          'properties' => 
          array (
            'Mobile body' => 
            array (
              'name' => 'Mobile body',
              'desc' => 'Mobile body',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Mobile body',
              'area_trans' => '',
            ),
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
          ),
          'output_properties' => 
          array (
            'tagname' => 'div',
            'tagid' => '',
            'class' => '',
            'style' => '',
            'attrib' => '',
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'mobile' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'contactus' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'richtext',
          'name' => 'contactus',
          'caption' => 'This is the body to the contact us page ',
          'description' => 'This is the body to the contact us page ',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'htmltag',
          'default_text' => '',
          'properties' => 
          array (
            'hello' => 
            array (
              'name' => 'hello',
              'desc' => 'hello',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'hello',
              'area_trans' => '',
            ),
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
            'tagname' => 'div',
            'tagid' => 'contact',
            'class' => '',
            'style' => '',
            'attrib' => '',
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'mobile' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);