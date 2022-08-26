
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Kindle</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="<?= base_url('assets/landing/fontawesome/js/all.min.js') ?>"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/landing/css/theme.css') ?>">

</head> 

<body>    
    <header class="header">	    
        <div class="branding">
            <div class="container-fluid position-relative py-3">
                <div class="logo-wrapper">
	                <div class="site-logo"><a class="navbar-brand" href="<?= site_url() ?>"><img class="logo-icon me-2" style="width: 40px" src="assets/images/logo.png" alt="logo" ><span class="logo-text">KindleBook</span></a></div>    
                </div><!--//docs-logo-wrapper-->
	        
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->
    
    <section class="hero-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
				    <div class="promo pe-md-3 pe-lg-5">
					    <h1 class="headline mb-3">
						    Free Book &amp; eBook <br>Access it anywhere anytime
					    </h1><!--//headline-->
					    <div class="subheadline mb-4">
						    Website to provide free eBook and with one time only payment you can access all books directory
						    
					    </div><!--//subheading-->
					    
					    <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
						    <div class="col-12 col-md-auto">
						        <a class="btn btn-primary w-100" href="<?= site_url('subscription') ?>">Subscribe Now</a>
						    </div>
						    <div class="col-12 col-md-auto">
						        <a class="btn btn-secondary w-100" href="<?= site_url('home') ?>">Continue to site</a>
						    </div>
					    </div><!--//cta-holder-->
					    
					    <div class="hero-quotes mt-5">
						    <div id="quotes-carousel" class="quotes-carousel carousel slide carousel-fade mb-5" data-bs-ride="carousel" data-bs-interval="8000">
							    <div class="carousel-inner">
								    <div class="carousel-item active">
								        <blockquote class="quote p-4 theme-bg-light">
									        "This website is so helpful, because for student like me can access free eBook and with one time payment I can access all books which is cheap and useful"     
								        </blockquote><!--//item-->
								        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
									        <div class="col-12 col-md-auto text-center text-md-start">
									            <img class="source-profile" src="<?= base_url('assets/images/user/profile-1.png') ?>" alt="image" >
									        </div><!--//col-->
									        <div class="col source-info text-center text-md-start">
										        <div class="source-name">James</div>
										        <div class="soure-title">Student, Highschool</div>
										    </div><!--//col-->
								        </div><!--//source-->
								    </div><!--//carousel-item-->
								</div><!--//carousel-inner-->
							</div><!--//quotes-carousel-->
							
					    </div><!--//hero-quotes-->
				    </div><!--//promo-->
			    </div><!--col-->
			    <div class="col-12 col-md-5 mb-5 align-self-center">
				    <div class="book-cover-holder">
					    <img class="img-fluid book-cover" src="<?= base_url('assets/images/trendy-books/05.jpg') ?>" alt="book cover" >
					    <div class="book-badge d-inline-block shadow">
						    New<br>Release
					    </div>
				    </div><!--//book-cover-holder-->
			    </div><!--col-->
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//hero-section-->
    
    <section id="benefits-section" class="benefits-section theme-bg-light-gradient py-5">
	    <div class="container py-5">
		    <h2 class="section-heading text-center mb-3">What Will You Get From This Website?</h2>
		    <div class="row text-center">
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-laptop-code"></i></div>
						    <h3 class="item-heading">Friendly Interface</h3>
					    </div><!--//item-heading-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fab fa-js-square"></i></div>
						    <h3 class="item-heading">Fast Access</h3>
					    </div><!--//item-heading-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fab fa-rocketchat"></i></div>
						    <h3 class="item-heading">Full Contents</h3>
					    </div><!--//item-heading-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fa fa-book"></i></div>
						    <h3 class="item-heading">Request Book</h3>
					    </div><!--//item-heading-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fa fa-download"></i></div>
						    <h3 class="item-heading">Download eBook</h3>
					    </div><!--//item-heading-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-hand-holding-usd"></i></div>
						    <h3 class="item-heading">Cheap Subscription eBook</h3>
					    </div><!--//item-heading-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//benefits-section-->
    
    <section id="content-section" class="content-section">
	    <div class="container">
		    <div class="single-col-max mx-auto">
		    <h2 class="section-heading text-center mb-5">What's Nerd+ Benefits</h2>
			    <div class="row">
				    <div class="col-12 col-md-6">
					    <div class="figure-holder mb-5">
						    <img class="img-fluid" src="<?= base_url('assets/images/logo.png') ?>" alt="image" >
					    </div><!--//figure-holder-->
				    </div><!--//col-->
				    <div class="col-12 col-md-6 mb-5">
					    <div class="key-points mb-4 text-center">
						    <ul class="key-points-list list-unstyled mb-4 mx-auto d-inline-block text-start">
							    <li><i class="fas fa-check-circle me-2"></i>Access all books content.</li>
							    <li><i class="fas fa-check-circle me-2"></i>Access them offline (download).</li>
							    <li><i class="fas fa-check-circle me-2"></i>Most priority.</li>
							    <li><i class="fas fa-check-circle me-2"></i>Be the first to access newest books.</li>
						    </ul>
					    </div><!--//key-points-->
					    
				    </div><!--//col-12-->   
			    </div><!--//row-->
		    </div><!--//single-col-max-->
	    </div><!--//container-->
    </section><!--//content-section-->
       
    <!-- Javascript -->          
    <script src="<?= base_url('assets/landing/plugins/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/landing/plugins/bootstrap/js/bootstrap.min.js') ?>"></script> 
    <script src="<?= base_url('assets/landing/plugins/smoothscroll.min.js') ?>"></script> 
    
    <script src="<?= base_url('assets/landing/js/main.js') ?>"></script>

</body>
</html> 

