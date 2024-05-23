	<nav class="navbar lug-header navbar-dark" data-bs-theme="dark">
	  <div class="container-fluid">
	    <a class="navbar-brand text-light" href="#">
	    	<img alt="LUG Logo" class="lug-logo-image" src="assets/images/logo.png" >
	    	UMBC Linux Users Group
	    </a>
	    <div class="">
	    	<div class="row">
	    		<div class="col-xs-12 col-md-0 d-xs-block d-md-none">
	    			<button
	    				class="navbar-toggler text-primary"
	    				type="button"
	    				data-bs-toggle="collapse"
	    				data-bs-target="#mobile-collapse"
	    				aria-controls="collapse"
	    				aria-expanded="false"
	    				aria-label="Toggle navigation"
	    			>
	    			  <span class="navbar-toggler-icon text-primary"></span>
	    			</button>			
	    		</div>
	    		<div class="col-xs-0 col-md-12 d-xs-none d-none d-md-block">
					<button
	    				class="navbar-toggler text-primary"
	    				type="button"
	    				data-bs-toggle="offcanvas"
	    				data-bs-target="#offcanvasNavbar"
	    				aria-controls="offcanvas-nav"
	    				aria-expanded="false"
	    				aria-label="Toggle navigation"
	    			>
	    			  <span class="navbar-toggler-icon text-primary"></span>
	    			</button>
	    		</div>
	    	</div>
	    </div>
	    <?php include_once(__DIR__."/desktop-header.php"); ?>
	    <?php include_once(__DIR__."/mobile-header.php"); ?>
	  </div>
	</nav>