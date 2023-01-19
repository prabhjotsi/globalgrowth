

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> GlobalGrowth</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/front_assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/front_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/front_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/front_assets/css/style.css" rel="stylesheet">
 
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg  px-4 px-lg-5 py-3 py-lg-0" style="background-color: black;">
                <a href="/" class="navbar-brand p-0">
                    <img src="public/front_assets/images/logo.png" class="w-100" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <!-- <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/mt-type-accounts" class="nav-item nav-link">Mt5 Type Account</a> -->

                        <!-- <a href="service.html" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="quote.html" class="dropdown-item">Free Quote</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <!-- <a href="/contact" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <!-- <a href="/contact" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Free Quote</a> -->
                </div>
            </nav>

        </div>
        <!-- Navbar & Hero End -->

        

<style>
	.error{
		color: red;
		font-size: initial;
		font-weight: bold;
		margin-left: 15px;
	}

	.form-control{
		font-weight: 600;
	}
	label{
		font-weight: 600;
	}

</style>
<!-- <div class="auth-wrapper">
	<div class="auth-content text-center w-50">
		<img src="/static/assets/images/logo.png" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<form method="POST">
				<input type="hidden" name="csrfmiddlewaretoken" value="bIGVVWkN8ZGK21XpjVPiKKnfhzChEWOIjwPikbvd5VAbbGzL1zO3Y7dopRTzZdnU">
				<div class="row align-items-center ">
					<div class="col-md-12">
						<div class="card-body">
							<h4 class="mb-3 f-w-400">Login</h4>
							
							
							<hr>
							<div class="form-group mb-3">
								<input type="text" class="form-control" id="Email" placeholder="Email address"
									name="uname" required>
							</div>
							<div class="form-group mb-4">
								<input type="password" class="form-control" id="Password" placeholder="Password"
									name="pwd" required>
							</div>
							<input type="submit" class="btn btn-block btn-primary mb-4" value="Signin">
							<hr>
							<a href="/clientapp/auth-forgot-password" class="f-w-400 text-danger">Forgot Password?</a>
							<a href="/clientapp/signup" class="f-w-400 text-info ml-5">Client Register</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div> -->



 <!-- Contact Start -->
 <div class="container-xxl py-5">
	<div class="container">
		<div class="row g-0 pt-5">
			<div class="col-lg-6 mt-5 wow fadeIn" data-wow-delay="0.5s">
				<div class="h-75" style="min-height:100px;">
					<img src="public/front_assets/images/login.svg" class="w-75 img-fluid">
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn mt-3" data-wow-delay="0.1s">
				<div class="bg-secondary p-5">
					<p class="d-inline-block bg-dark text-primary py-1 px-4">User Login</p>
                    @if(Session::has('message'))
						<div class="alert alert-danger">{{Session::get('message')}}</div>
					@endif
                            <!-- form start -->
					<form action="{{route('user.login.process')}}" method="POST" >
						<!-- <input type="hidden" name="csrfmiddlewaretoken" value="bIGVVWkN8ZGK21XpjVPiKKnfhzChEWOIjwPikbvd5VAbbGzL1zO3Y7dopRTzZdnU"> -->
						@csrf
					
						<div class="row g-3">
							<div class="col-md-12">
								<div class="form-floating">
									<input type="text" class="form-control" value="{{old('email')}}" name="email" required>
									<label for="username">Email address</label>
								</div>
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
							</div>
					
							<div class="col-md-12">
								<div class="form-floating">
									<input type="password" value="" class="form-control"  name="password" required>
									<label for="password">Password</label>
								</div>
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
							</div>
					
						
							<div class="col-12">
							<div id="btn_loader">
								<button  class="btn btn-primary w-100 py-3" type="submit">SignIn</button><br>
						
								</div>
								<hr>
								<br>
							<a href="/clientapp/auth-forgot-password" class="f-w-400 text-warning">Forgot Password?</a>
							<a href="/clientapp/signup" class="f-w-400 text-info float-right" style="float:right">Client Register</a>
							</div>
						</div>

					</form>
				</div>
			</div>
		
		</div>
	</div>
</div>
<!-- Contact End -->  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script>


$('#button_id').on('click',function(){
	var val=document.getElementById("Email").value
	var va2=document.getElementById("Password").value
	if(val==''  ){
	document.getElementById("Email").focus();
	
	}else if(va2==''){
	document.getElementById("Password").focus();
	}
	
	else{
	document.getElementById('btn_loader').innerHTML='<button class="btn btn-primary w-100 py-3" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</button>'
     $('#AddEmpModal').submit();
	 }
	 
 });
 
</script>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <!-- <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Quick Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Trend24FX</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">Trend24FX</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">Trend24FX</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/front_assets/lib/wow/wow.min.js"></script>
    <script src="public/front_assets/lib/easing/easing.min.js"></script>
    <script src="public/front_assets/lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="public/front_assets/js/main.js"></script>
</body>

</html>