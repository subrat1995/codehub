@extends('layouts.master')

@section('body')		
		<!-- Main wrapper -->
<div id="main-wrapper">

	<!-- Content -->
	<div id="content">

		<!-- Fluid container -->
		<div class="container-fluid">
			
			<!-- Page heading -->
			<div id="heading" class="row">
				<div class="col-12">

					<header>
						<h1>Current Events</h1>
						<h2>Things happenings at the moment!!</h2>
					</header>

				</div>
			</div>

			<div class="row">
				<div class="col-12">

					<!-- Inner -->
					
						<div class="alert alert-danger fade in">
							<i class="fa fa-exclamation-circle"></i>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<p>Oops! We dont have anything going on!! Why don't you check for <a href="{{route('upcomingevents')}}">upcoming events</a></p>
						</div>
					
				</div>
			</div>


		</div>
	</div>
</div>
		

@endsection