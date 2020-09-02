@extends('masterpage\master2')
@section('product')



<!DOCTYPE html>
<html lang="en">
	
    <body>		

	
			<section class="main-content">
				<div class="row">
					<div class="span12">												
						<div class="row">
							<div class="span12">
							
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	
											@if ($errors->any())
    <div class="alert alert-primary">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		
          
                                  	@foreach($product as $product)
														
												<li class="span3">
													<div class="product-box" >
														<span class="sale_tag"></span>
														
														<p><a href="{{URL::to('/')}}/product/productdetail/{{$product->id}}"><img src="PFC/StampPaper/stamp_image/{{$product->stamp_image}}" width="250px" height="250px"></a></p>
														<a href="#" class="title"><h3>{{$product->stamp_title}} </h3></a><br/>
														<a href="#" class="category">{{$product->description}}</a>
														
													</div>
												</li>
											   @endforeach
											</ul>
										</div>
								
									</div>							
								</div>
							</div>						
						</div>
						<br/>
			


</body>
</html>
@endsection