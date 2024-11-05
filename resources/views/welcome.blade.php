@extends('layout.index')
@section('meta')
    
<title> HOME</title>
<meta name="description" content="Multipurpose HTML template.">
@endsection

@section('search-tab')
@include('layout.partials.search-tab')
@endsection
@section('content')

<div class="sb-breadcrumbs breadcrumb-bg ">
	<ul class="breadcrumb ">
	   <li class="breadcrumb-item ">
		  <i class="fa fa-home"></i>
		  <a href="{{url('/')}}" class="breadcrumb-label">Home</a>
	   </li>
	</ul>
 </div>
 <div class="row page">
	@include('layout.partials.sidebar')
	<main class="col-lg-9 col-md-12 page-content" id="product-listing-container">
		<div class="section-slideshow">
			<div class="container">
			    <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12  col_qavo block-slideshow__left" style="max-width:100%!important;">
					  <div class="slideshow ">
						<div class="heroCarousel " data-slick='{
							  "dots": true,
							  "arrows": false,
							  "mobileFirst": false,
							  "slidesToShow": 1,
							  "slidesToScroll": 1,
							  "autoplay": true,
							  "autoplaySpeed": 15000
						  }'>
						  <div class="heroCarousel-slide " style="background-image: url({{asset('revo_template/s-3zqjz60dg3/images/stencil/original/carousel/11/slide1__577324847.jpg?c=2')}})">
							<a href="{{url('')}}">
							  <img class="heroCarousel-image lazyload" src="{{asset('revo_template/s-3zqjz60dg3/images/stencil/original/carousel/11/slide1__577324847.jpg?c=2')}}" alt="" title="" />
							  <div class="heroCarousel-content heroCarousel-content--empty">
								<h1 class="heroCarousel-title">the shopping list</h1>
								<div class="heroCarousel-description">
								  <h3 class="description-tilte">5 looks we love this month </h3>
								  <span class="heroCarousel-action ">
									<i class="fa fa-caret-right" aria-hidden="true"></i> See More </span>
								</div>
							  </div>
							</a>
						  </div>
						  <div class="heroCarousel-slide " style="background-image: url({{asset('revo_template/s-3zqjz60dg3/images/stencil/original/carousel/9/slide24847.jpg?c=2')}})">
							<a href="index.html">
							  <img class="heroCarousel-image lazyload" src="{{asset('revo_template/s-3zqjz60dg3/images/stencil/original/carousel/9/slide24847.jpg?c=2')}}" alt="" title="" />
							</a>
						  </div>
						  <div class="heroCarousel-slide " style="background-image: url({{asset('revo_template/s-3zqjz60dg3/images/stencil/original/carousel/12/slide3__554894847.jpg?c=2')}})">
							<a href="index.html">
							  <img class="heroCarousel-image lazyload" src="{{asset('revo_template/s-3zqjz60dg3/images/stencil/original/carousel/12/slide3__554894847.jpg?c=2')}}" alt="" title="" />
							  <div class="heroCarousel-content heroCarousel-content--empty">
								<h1 class="heroCarousel-title"> Iphone 6 plus </h1>
								<div class="heroCarousel-description">
								  <h3 class="description-tilte">5 looks we love this month </h3>
								  <span class="heroCarousel-action ">
									<i class="fa fa-caret-right" aria-hidden="true"></i> see more </span>
								</div>
							  </div>
							</a>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
			</div>
		  </div>
	   <div class="products-category clearfix">
		  <div class="form-group category-info">
			 <h3 class="title-category "> Feature Products</h3>
			 <!-- snippet location categories -->
		  </div>
		  <div class="products-list row" >
			<div class="product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-12">
				<article class="product-item-container ">
				  <div class="left-block d-flex align-items-center justify-content-center">
					<div class="sale-flag-discount">
					  <span class="sale-text">-24%</span>
					</div>
					<div class="flag-badges">
					  <img class="card-image lazyload" data-sizes="auto" width="60px" height="60px" src="{{asset('rezo_template/s-3zqjz60dg3/stencil/671eab80-1ec6-0137-c53b-0242ac11000a/e/80359d40-88bb-013b-10b2-66c6c8fc1ce5/img/loading.svg')}}" data-src="{{asset('revo_template/s-3zqjz60dg3/images/stencil/181x181/products/80/510/13__495514847.jpg')}}" alt="Donec et libero nunc quis facilisis odio">
					</div>
					<div class="countdown--box d-none d-sm-block">
					  <div class="defaultCountdown defaultCountdown-137" data-timer="11/23/2025" data-countdown-id="137"></div>
					</div>
					<a href="#" class="quickview btn-button d-none d-md-block" data-animation="false" data-product-id="137" title="Quick view">
					  <i class="fa fa-search"></i>
					</a>
				  </div>
				  <div class="right-block">
					<h4 class="card-title">
					  <a href="products/donec-et-libero-nunc-quis-facilisis-odio.html">Donec et libero nunc quis facilisis odio</a>
					</h4>
					<div class="ratings ">
					  <div class="prod-rating" data-test-info-type="productRating">
						<span class="rating--small">
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <!-- snippet location product_rating -->
						</span>
					  </div>
					</div>
					<div class="price-section price-section--withoutTax ">
					  <span data-product-price-without-tax class="price price--withoutTax">$500.00</span>
					  <span data-product-price-without-tax class="price price--noSaleWithoutTax">$654.00</span>
					</div>
					<div class="description"> &nbsp; Nam tempus turpis at metus scelerisque placerat nulla deumantos sollicitudin felis. Pellentesque diam dolor, elementum et lobortis at,... </div>
					<div class="product-colors" data-product-id="137"></div>
					<div class="button-group">
					  <div class="action-item addToCart">
						<a href="cart.html?action=add&amp;product_id=137" data-addtocart data-product-id="137" data-wait-message="Add to Cart" class="action-link  button--cart" title="Add to Cart">Add to Cart</a>
					  </div>
					</div>
				  </div>
				</article>
			  </div>
				<div class="product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-12">
				<article class="product-item-container ">
				  <div class="left-block d-flex align-items-center justify-content-center">
					<div class="sale-flag-discount">
					  <span class="sale-text">-24%</span>
					</div>
					<div class="flag-badges">
					  <img class="card-image lazyload" data-sizes="auto" width="60px" height="60px" src="{{asset('revo_template\s-3zqjz60dg3\images\stencil\181x181\products\81\514\8__637524847.jpg')}}" alt="Donec et libero nunc quis facilisis odio">
					</div>
					<div class="countdown--box d-none d-sm-block">
					  <div class="defaultCountdown defaultCountdown-137" data-timer="11/23/2025" data-countdown-id="137"></div>
					</div>
					<a href="#" class="quickview btn-button d-none d-md-block" data-animation="false" data-product-id="137" title="Quick view">
					  <i class="fa fa-search"></i>
					</a>
				  </div>
				  <div class="right-block">
					<h4 class="card-title">
					  <a href="products/donec-et-libero-nunc-quis-facilisis-odio.html">Donec et libero nunc quis facilisis odio</a>
					</h4>
					<div class="ratings ">
					  <div class="prod-rating" data-test-info-type="productRating">
						<span class="rating--small">
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <!-- snippet location product_rating -->
						</span>
					  </div>
					</div>
					<div class="price-section price-section--withoutTax ">
					  <span data-product-price-without-tax class="price price--withoutTax">$500.00</span>
					  <span data-product-price-without-tax class="price price--noSaleWithoutTax">$654.00</span>
					</div>
					<div class="description"> &nbsp; Nam tempus turpis at metus scelerisque placerat nulla deumantos sollicitudin felis. Pellentesque diam dolor, elementum et lobortis at,... </div>
					<div class="product-colors" data-product-id="137"></div>
					<div class="button-group">
					  <div class="action-item addToCart">
						<a href="cart.html?action=add&amp;product_id=137" data-addtocart data-product-id="137" data-wait-message="Add to Cart" class="action-link  button--cart" title="Add to Cart">Add to Cart</a>
					  </div>
					</div>
				  </div>
				</article>
			  </div>
				<div class="product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-12">
				<article class="product-item-container ">
				  <div class="left-block d-flex align-items-center justify-content-center">
					<div class="sale-flag-discount">
					  <span class="sale-text">-24%</span>
					</div>
					<div class="flag-badges">
					  <img class="card-image lazyload" data-sizes="auto" width="60px" height="60px" src="{{asset('revo_template/s-3zqjz60dg3/images/stencil/181x181/products/86/516/27__387504847.jpg')}}" alt="Donec et libero nunc quis facilisis odio">
					</div>
					<div class="countdown--box d-none d-sm-block">
					  <div class="defaultCountdown defaultCountdown-137" data-timer="11/23/2025" data-countdown-id="137"></div>
					</div>
					<a href="#" class="quickview btn-button d-none d-md-block" data-animation="false" data-product-id="137" title="Quick view">
					  <i class="fa fa-search"></i>
					</a>
				  </div>
				  <div class="right-block">
					<h4 class="card-title">
					  <a href="products/donec-et-libero-nunc-quis-facilisis-odio.html">Donec et libero nunc quis facilisis odio</a>
					</h4>
					<div class="ratings ">
					  <div class="prod-rating" data-test-info-type="productRating">
						<span class="rating--small">
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <span class="icon icon--ratingEmpty">
							<svg>
							  <use xlink:href="#icon-star" />
							</svg>
						  </span>
						  <!-- snippet location product_rating -->
						</span>
					  </div>
					</div>
					<div class="price-section price-section--withoutTax ">
					  <span data-product-price-without-tax class="price price--withoutTax">$500.00</span>
					  <span data-product-price-without-tax class="price price--noSaleWithoutTax">$654.00</span>
					</div>
					<div class="description"> &nbsp; Nam tempus turpis at metus scelerisque placerat nulla deumantos sollicitudin felis. Pellentesque diam dolor, elementum et lobortis at,... </div>
					<div class="product-colors" data-product-id="137"></div>
					<div class="button-group">
					  <div class="action-item addToCart">
						<a href="cart.html?action=add&amp;product_id=137" data-addtocart data-product-id="137" data-wait-message="Add to Cart" class="action-link  button--cart" title="Add to Cart">Add to Cart</a>
					  </div>
					</div>
				  </div>
				</article>
			  </div>
		  </div>
		  <div class="pagination">
			 <ul class="pagination-list">
				{{-- {!! $products->links() !!} --}}
			 </ul>
		  </div>
	   </div>
	</main>
 </div>
@endsection