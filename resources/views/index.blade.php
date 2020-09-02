
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
       
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Online Lawyer Hier</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Site CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="{{URL::to('/')}}/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
	.log{
		height: 70px;
	}
.law{
	border: solid black;
	border-radius: 5px;
	color: white;
	background-color: black;
	outline: none;
	padding: 10px;
}


</style>
</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{url('homepage')}}">
					<img src="{{URL::to('/')}}/images/adminlogo.png" class="log" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host" >
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/laravel/public/index">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="index/about">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="index/contact">Contact</a></li>
					</ul>

		
                   <li><a href="index/lawyerlogin" ><button class="btn btn-danger">Lawyer login</button></a></li>
                   <li><a href="index/clientlogin"><button class="btn btn-danger">Client login</button></a></li>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('{{URL::to('/')}}/images/c.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 style="color:red;"><strong style="color: black;">Public</strong>Facilitation Center</h2>
										<p class="lead">EASY WAY TO APPLY FOR SERVICES PROVIDED BY PUNJAB FACILITATION CENTER</p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('{{URL::to('/')}}/images/b.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight" style="color:black;">Public<strong style="color: red;">Facilitation Center</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">EASY WAY TO APPLY FOR SERVICES PROVIDED BY PUNJAB FACILITATION CENTER</p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('{{URL::to('/')}}/images/background.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
									<h2 data-animation="animated zoomInRight" style="color:black;">Public<strong style="color: red;">Facilitation Center</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft"> EASY WAY TO APPLY FOR SERVICES PROVIDED BY PUNJAB FACILITATION CENTER</p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h5 style="color: black;font-size: 45px;"><strong>What is a Lawyer?</strong></h5>
                    <p class="lead" style="width: 100%;">A lawyer is someone who is licensed to practice law, and whose obligation it is to uphold the law while also protecting their client's rights. Some duties commonly associated with a lawyer include: providing legal advice and counsel, researching and gathering information or evidence, drawing up legal documents related to divorces, wills, contracts and real estate transactions, and prosecuting or defending in court.!</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h5 style="color: black;font-size: 45px;"> <strong>Welcome to Public Facilitation Center</strong></h5>
                        
                        <p>A lawyer has several duties which go beyond the basic court trial. Researching information, drafting documents, mediating disputes and providing counsel to clients about their legal rights are just some responsibilities involved depending on the area of law.</p>

                        <p> The law is so broad and extensive that it is impossible for a single lawyer to successfully provide legal counsel across each different area of law. It can be likened to a doctor that focuses on a specific area of the body or a specific type of ailment or disease - lawyers also specialize in one or two related areas of law.
                        </p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{URL::to('/')}}/images/law.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{URL::to('/')}}/images/law1.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Public Facilitation Center Provide Different Types Of Lawyers </h2>
                        <p><strong>Divorce Lawyer</strong><br>Divorce lawyers specialize in the many legal aspects that need to be addressed when terminating a marriage.a<br>
                          <strong> Immigration Lawyer</strong><br>Immigration lawyers determine the legal rights, obligations, and duties of individuals considered aliens and specialize in helping them gain legal citizenship within a specific country.<br>
                             <strong>Criminal Lawyer</strong>A criminal lawyer represents defendants and organizations facing criminal charges in state and federal courts.
                              </p>
                         
                        <p><strong>Family Lawyer</strong>A family lawyer handles anything having to do with direct family issues, such as adoption, surrogacy, child abuse, child abduction, spousal abuse, estate or family planning, divorce, custody battles, paternity determinations, juvenile delinquency, child emancipation, prenuptial agreements, and name changes.</p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Our history</h3>
                   
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2018</h2>
								<p>Resolve to be honest at all events; and if in your own judgment you cannot be an honest lawyer, resolve to be honest without being a lawyer. Choose some other occupation, rather than one in the choosing of which you do, in advance, consent to be a knave.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2015</h2>
								<p>Yet the impression is common, almost universal. Let no young man choosing the law for a calling for a moment yield to the popular belief.Lawyers are operators of toll bridges which anyone in search of justice must pass.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2014</h2>
								<p>On one side of the line, the conduct, action, or inaction is proper; on the other side of the line, it is not.Lawyers are the only persons in whom ignorance of the law is not punished.Lawyers are operators of toll bridges which anyone in search of justice must pass.

</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2012</h2>
								<p>There is a vague popular belief that lawyers are necessarily dishonest. I say vague, because when we consider to what extent confidence and honors are reposed in and conferred upon lawyers by the people, it appears improbable that their impression of dishonesty is very distinct and vivid.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2010</h2>
								<p>Lawyers are expected to restore equilibrium, to be balancers. Every discipline, every profession, every job, and every calling has a cutting edge. At that cutting edge, lines are drawn. Lawyers and judges are society's ultimate line drawers.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2007</h2>
								<p>At the most pragmatic level, lawyers are society's professional problem solvers. Lawyers are called upon to make distinctions, to explain how and why cases or experiences are alike or different.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2004</h2>
								<p>All the judges are lawyers; they interpret and enforce our laws. There is no separation of powers where the lawyers are concerned. There is only a concentration of all government power -- in the lawyers.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2002</h2>
								<p>It is the lawyers who run our civilization for us -- our governments, our business, our private lives. Most legislators are lawyers; they make our laws. Most presidents, governors, commissioners, along with their advisers and brain-trusters are lawyers; they administer our laws.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


            <hr class="invis">
<!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('{{URL::to('/')}}/images/soka.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Public Facilitation Center Team Members</h3>
               
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="{{URL::to('/')}}/images/umer.jpeg" alt="" class="img-fluid">
                                <h4>Umer Shakeel</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>Owner Of The Website!</h3>
                                <p class="lead">He has got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="{{URL::to('/')}}/images/azeem.png" alt="" class="img-fluid">
                                <h4>Azeem Aslam </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="{{URL::to('/')}}/images/kami.jpg" alt="" class="img-fluid ">
                                <h4>Ali Kamran</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="{{URL::to('/')}}/images/usman.jpg" alt="" class="img-fluid">
                                <h4>Malik Usman </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                       
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{URL::to('/')}}/images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{URL::to('/')}}/images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{URL::to('/')}}/images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{URL::to('/')}}/images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{URL::to('/')}}/images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{URL::to('/')}}/images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="{{url('homepage')}}">PFC</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{URL::to('/')}}/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{URL::to('/')}}/js/custom.js"></script>
	<script src="{{URL::to('/')}}/js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>