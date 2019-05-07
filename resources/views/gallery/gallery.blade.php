@extends('layout.master')
@section('container')
	<div class="container-fluid gallery " >
			<a class="gallery_head" href="#">Gallery</a>
			

			<div class="row card_gallery_row">
					
					<div class="col-3 first_card_image">
							<div class="card card_gallery" style="width: 18rem;">
								  <img class="card-img-top food_card" src="{{asset('images/2.jpg')}}" alt="Card image cap">
								  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
								  </div>
							</div>
					</div>

					<div class="col-3 second_card_image">
							<div class="card card_gallery" style="width: 18rem;">
								  <img class="card-img-top food_card" src="{{asset('images/3.jpg')}}" alt="Card image cap">
								  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
								  </div>
							</div>
					</div>

					<div class="col-3 third_card_image">
							<div class="card card_gallery" style="width: 18rem;">
								  <img class="card-img-top food_card" src="{{asset('images/4.jpg')}}" alt="Card image cap">
								  <div class="card-body">
									    <h5 class="card-title">Card title</h5>
									    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									    <a href="#" class="btn btn-primary">Go somewhere</a>
								  </div>
							</div>
					</div>
			</div>
			
	</div>

@endsection