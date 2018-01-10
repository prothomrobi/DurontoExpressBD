@extends('master')
@section('content')

<div class="visual-wrap">
	<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner ">
	
	<div class="wpb_wrapper">		
	<section class="breadcrumb-area " style="background-image: url(assets/wp-content/uploads/2017/06/breadcrumb-bg.jpg)">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="breadcrumb-title">
									<h1>Contact Us</h1>
								</div>
								<div class="page-breadcrumb">
									<i class="fa fa-home"></i> <a href="../../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="../blog/index.html">Contact</a>								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
				<!-- Contact -->
		<div class="contact-page ">
			<div class="container">
				<div class="section-title-style sec-pd-offset-btm">
											<h2>GET IN TOUCH</h2>
												<p>
						We Are Always ready to hear from You.						</p>
										</div>

				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div role="form" class="wpcf7" id="wpcf7-f28-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="http://mover.kendytheme.net/index.php/contact-us/#wpcf7-f28-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="28" />
<input type="hidden" name="_wpcf7_version" value="4.8" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f28-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_nonce" value="8a0526d098" />
</div>
<div class="contact-form">
<p>
      <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name *" /></span>
   </p>
<p>
      <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email *" /></span>
   </p>
<p>
      <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" /></span>
   </p>
<p>
      <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span>
   </p>
<p>
      <input type="submit" value="SUBMIT NOW" class="wpcf7-form-control wpcf7-submit contact-submit-button" />
   </p>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<section id="google-map-area">
							<div class="google-map" id="contact-google-map" data-location="23.794601, 90.384367" data-map-zoom="14"></div>
						</section>
					</div>
				</div>
			</div>

		</div>
		<!-- End Contact -->
		</div></div></div></div>
</div>

<?php 
// session_start();

if( isset($_POST['submit']) ){

if (isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['message'])&& isset($_POST['subject'])) {
	$to = 'prothomrobi1@gmail.com';
	$subject = $_POST['subject'];
    $name = $_POST['name'];
    $message = $name.' '.$_POST['message'];
	$headers = $_POST['email'];
    mail($to,$subject,$message,$headers);
  
  if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo '<script>alert("Entered mail successfully");</script>';
}
}
?>

@endsection