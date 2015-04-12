<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<title>The Fifth Wall</title>
	<meta name="description" content="Will contact page." />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function () {
		$('#submit').click(function(){
			if ($('#email').val() == '' || $('#comments').val() == '')
			{
				alert('Please fill in your email address and leave us a message.');
				return false;
			}
		});
	});
	</script>
</head>
<body>
	<?php require_once('header.php'); ?>
       
     <div class="contentcontactimage">   
        <img src="gallery_images/images/Groundupcontact.jpg" width="600" height="397" />
        </div>
        
         <div class="content">
        <h3 id="contactusred">Contact Us</h3>
    <p>We are here to inspire and create, for a no-obligation quote regarding bespoke art or design projects please call us directly on 07926 849873 or email at <a href="mailto:enquiries@thefifthwall.co.uk">enquiries@thefifthwall.co.uk</a>  </p>
    
   <p> First and foremost a bespoke art & design company, we are delighted to now provide a platform for up and coming artists to promote their creativity and offer the chance for people to enjoy their very own piece of these creations in their homes or work place. If you are interested in joining or collaborating with our growing team of talented individuals then please contact The Fifth Wall for more information or visit our online <a href="www.thefifthwall.co.uk/shop" target="_blank">shop</a>. </p>
            
    <p>Alternatively you can fill in the contact form below with your contact details and an outline of your intended project and we'll get in touch with you to discuss further.</p>
            
    
            <form action="mailer.php" method="post"> 
		<input type="hidden" name="subject" value="Mail from Contact Form on thefifthwall.co.uk" /> 
		<p>Your email:<input id="email" type="text" name="email" required /></p>
		<p>How can we help you?<textarea name="comments" style="width:600px;" rows="10" required></textarea></p> 
		<input id="submit" type="submit" name="submit" value="submit"/>
	    </form>
        </div>
	<?php require_once('footer.php'); ?>
</body>
</html>