<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'structure/head.php'; ?>
</head>
<body>
<div id="wrapper">
	<?php include 'structure/navbar.php'; ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Come Join Our Family</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row">
								<div class="col-md-6">
									<div class="contact-form">
											
										<form id="contactform" class="contact">
											<div class="form-group has-feedback">
												<label for="name">Nama</label>
												<input type="text" class="form-control" id="name" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">Alamat Email</label>
												<input type="email" class="form-control" id="email" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
 
											<div class="form-group has-feedback">
												<label for="message">Pesan</label>
												<textarea class="form-control" rows="6" id="pesan" placeholder="">

												</textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<button type="submit" id="submit" class="submit btn btn-default" onclick="kirimPesan()">Submit</button>
										</form>
										 
										
									</div>
								</div>
								<div class="col-md-6" align="right">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.11453121608!2d106.89131276375986!3d-6.115280764432134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1feaf1107bd3%3A0xd5a16ccb0b16baf3!2sJl.+Kebon+Bawang+VI+No.35%2C+Kb.+Bawang%2C+Tj.+Priok%2C+Kota+Jkt+Utara%2C+Daerah+Khusus+Ibukota+Jakarta+14320!5e0!3m2!1sen!2sid!4v1496154694749" width="70%" height="400" frameborder="0" id="maps" style="border:0;" allowfullscreen></iframe>
								</div>
							</div>
	</div>
 
	</section>
	
	<?php include 'structure/footer.php'; ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/validate.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.1.0/firebase.js"></script>
<script src="js/form.js"></script>
</body>
</html>