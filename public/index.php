<!DOCTYPE html>
<html>
	<?php include_once(__DIR__."/assets/php/preload.php")?>
	<body>
		<?php include_once(__DIR__."/assets/php/pre-scripts.php"); ?>
		<?php include_once(__DIR__."/assets/layout/header.php"); ?>

		<div class="container-fluid">
			<div class="separator" ></div>
		</div>

		<section data-bs-theme="dark">
			<!-- header container -->
			<div class="container-fluid mb-5 mt-5 p-0 banner">
				<div class="col-xs-12">
					<div class="particles" id="particles"></div>
					<div class="popout-container" >
						<h1>Linux Users Group</h1>
					</div>
				</div>
			</div>
			<!-- header container -->

			<!-- body sections -->
			<div class="container-fluid">
				
				<div class="col-xs-12 d-flex justify-content-center">
					<div class="row max-1000">
						<div class="col-xs-12 home-sect mb-5">
							<h2 class="text-white">
								Who Are We?
							</h2>
							<span class="blip"></span>
						</div>

						<!-- homepage cards -->
						<div class="col-xs-12">
							<div class="row">
								
								<div class="col-xs-12 col-sm-6 col-lg-4">
									<div class="card" style="width: 18rem;">
									  <img loading="lazy" src="assets/images/debian_card.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
									    <h5 class="card-title">Linux Users</h5>
									    <p class="card-text">
									    	While we aren&apos;t professionals (argubly, yet) we
									    	are a group that uses linux every day to once in a while.
									    	Some dual boot and others use a VM, but we all know which
									    	is cooler.
									    </p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-lg-4">
									<div class="card" style="width: 18rem;">
									  <img loading="lazy" src="assets/images/students_card.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
									    <h5 class="card-title">Students</h5>
									    <p class="card-text">
									    	Since this is a group unofficially affiliated with UMBC,
									    	most of us are students. We welcome anyone who wants to
									    	join us, student or not. We can help with that pesky VM.
									    </p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-lg-4">
									<div class="card" style="width: 18rem;">
									  <img loading="lazy" src="assets/images/collaborators_card.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
									    <h5 class="card-title">Collaborators</h5>
									    <p class="card-text">
									    	One of the core fundimentals of modern-day development
									    	is the open-source nature of things. Got a script you
									    	want some help with, or to show off? Come showcase it
									    	and give us new ideas.
									    </p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
									  </div>
									</div>
								</div>

							</div>
						</div>
						<!-- end homepaeg cards -->

					</div>
				</div>

			</div>

		</section>
		<?php include_once(__DIR__."/assets/php/post-scripts.php"); ?>
	</body>
</html>