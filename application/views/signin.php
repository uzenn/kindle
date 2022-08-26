<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KindleBook - Sign in</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/typography.css') ?>">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
</head>

<body>
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center page-content rounded">
                    <div class="row m-0">
                        <div class="col-sm-12 sign-in-page-data">
                            <div class="sign-in-from bg-primary rounded">
                                <h3 class="mb-0 text-center text-white">Sign in</h3>
                                <form class="mt-4 form-text" action="<?= site_url('user-signin') ?>" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="sign-info text-center">
                                        <button type="submit" class="btn btn-white d-block w-100 mb-2">Sign in</button>
                                        <span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a href="<?= site_url('sign-up') ?>" class="text-white">Sign up</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Appear JavaScript -->
    <script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
    <!-- Countdown JavaScript -->
    <script src="<?= base_url('assets/js/countdown.min.js') ?>"></script>
    <!-- Counterup JavaScript -->
    <script src="<?= base_url('assets/js/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
    <!-- Wow JavaScript -->
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <!-- Apexcharts JavaScript -->
    <script src="<?= base_url('assets/js/apexcharts.js') ?>"></script>
    <!-- lottie JavaScript -->
    <script src="<?= base_url('assets/js/lottie.js') ?>"></script>
    <!-- Slick JavaScript -->
    <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
    <!-- Select2 JavaScript -->
    <script src="<?= base_url('assets/js/select2.min.js') ?>"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="<?= base_url('assets/js/smooth-scrollbar.js') ?>"></script>
    <!-- Style Customizer -->
    <script src="<?= base_url('assets/js/style-customizer.js') ?>"></script>
    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url('assets/js/chart-custom.js') ?>"></script>
    <!-- Custom JavaScript -->
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>