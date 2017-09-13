@extends('layouts.authmaster')

@section('title')

@endsectio

@section('content')			
			<section class="php">
				<div class="container">
				<div class="php-test">
				<div class="row">
					<div class="col-md-4 sidebar">
						<h3 class="online">online test</h3>
						<ul>
							<a href="{{route('php-test')}}"><li>php online test</li></a>

							<a href="{{route('java-test')}}"><li>java online test</li></a>

							<a href="{{route('c-test')}}"><li class="active">c online test</li></a>

							<a href="{{route('html-test')}}"><li>html/css online test</li></a>

							<a href="{{route('phython-test')}}"><li>phython online test</li></a>

							<a href="{{route('cplus-test')}}"><li>c++ online test</li></a>
						</ul>
					</div>
					<div class="col-md-8">
						<h3 class="online-test">c online test</h3>
						<div class="row course-test">
							<div class="col-sm-4 test-level">
								<h3>beginer level</h3>
								<a href="{{route('c.beginner')}}"><button class="btn btn-lg btn-primary">start<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
							</div>

							<div class="col-sm-4 test-level">
								<h3>intermadiet level</h3>
								<a href="{{route('c.intermediate')}}"><button class="btn btn-lg btn-primary">start<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
							</div>

							<div class="col-sm-4 test-level">
								<h3>advance level</h3>
								<a href="{{route('c.advance')}}"><button class="btn btn-lg btn-primary">start<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
							</div>
						</div>
					</div>
				</div><!-- end row -->

				</div>
					
				</div>
			</section>
			
	<footer class="footer">
		<div class="container">
		<h3>follow us on</h3>
		<ul>
			<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			
		</ul>
			
		</div>
	</footer>
@endsection