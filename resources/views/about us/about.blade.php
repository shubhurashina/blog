@extends('layout.master')
@section('container')
	<div class=" container about_us_heading">

		<div class="about_us_header">
			
					<h4>About us</h4>
			

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
		</div>

		<div class="who">
			<h4>WHO WE ARE?</h4>
		</div>

		<div class="row">
				
				<div class="body_card col-4">
						<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="{{asset('images/300.png')}}" alt="Card image cap">
							  
							  <div class="card-body">
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
				</div>

				<div class="body_card col-4">
						<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="{{asset('images/300.png')}}" alt="Card image cap">
							  
							  <div class="card-body">
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
				</div>

				<div class="body_card col-4">
						<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="{{asset('images/300.png')}}" alt="Card image cap">
							  
							  <div class="card-body">
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
				</div>
		</div>
		
			
			
	</div>
@endsection