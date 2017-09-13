<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">home <span class="sr-only">(current)</span></a></li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">course<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="{{route('php-test')}}">php</a></li>
									<li><a href="{{route('java-test')}}">java</a></li>
									<li><a href="{{route('c-test')}}">c</a></li>
									<li><a href="{{route('html-test')}}">html/Css</a></li>
									<li><a href="{{route('phython-test')}}">phython</a></li>
									<li><a href="{{route('cplus-test')}}">c+</a></li>
								</ul>
							</li>
							<li><a href="#faq">faq</a></li>
							<li><a href="#about-us">about us</a></li>
							
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li class="login" data-toggle="modal" data-target="#login"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>login</a></li>

							<li class="sing-up" data-toggle="modal" data-target="#sing-up"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>sing-up</a></li>
							
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-->
			</nav>