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
			<div class="container-fluid mb-5">
				<div class="col-xs-12 d-flex justify-content-center">
					<div class="row w-100 d-flex justify-content-center">
						<div class="tilt p-0" data-tilt data-tilt-max-glare="0.8">
							<div class="particles" id="particles">
							</div>
							<div class="popout-container">
								<div class="tilt-parallax">
									<h2>Welcome To LUG</h2>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- header container -->

			<!-- body sections -->
			<div class="container-fluid">
				
				<div class="col-xs-12 d-flex justify-content-center">
					<div class="row max-1000">
						<div class="col-xs-12 home-sect">
							<h2 class="text-white">
								Linux Users Group (LUG)
							</h2>
							<span><i>Who Are We?</i></span>
							<span></span>
							<div class="col-xs-12 terminal">
								<div></div>
								<div>
									<ul class="p-2">
										<li class="text-success" >whoarewe</li>
										<li class="defer">We are a group at the University of Maryland, Baltimore County that has a passion for all things Linux!</li>
										<li class="defer">Even if you don&apos;t use it all the time, we generally welcome anyone to collaborate with us.</li>
										<li class="defer">We host regular club activies on-campus, but we have a lot going on around our Discord.</li>
										<li class="defer-nl"> </li>
										<li class="text-success" >whereis discord</li>
										<li class="defer"><a target="_blank" href="https://discord.gg/jgMqPtK2mg">https://discord.gg/jgMqPtK2mg</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section>
		<?php include_once(__DIR__."/assets/php/post-scripts.php"); ?>
	</body>
</html>