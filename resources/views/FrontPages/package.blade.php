@extends('master')
@section('content')

<section class="breadcrumb-area " style="background-image: url(assets/wp-content/uploads/2017/06/breadcrumb-bg.jpg)">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="breadcrumb-title">
									<h1>Package & Terms</h1>
								</div>
								<div class="page-breadcrumb">
									<i class="fa fa-home"></i> <a href="../../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="../blog/index.html">Package & Terms</a>								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<div id="fullwidth" class="main-fullwidth main-col-full">

<section class="vc_row wpb_row vc_row-fluid vc-zozo-section typo-default"><div class="zozo-vc-main-row-inner vc-normal-section"><div class="container"><div class="row"><div class="wpb_column vc_main_column vc_column_container vc_col-sm-12 typo-default"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="zozo-vc-row-inner vc-inner-row-section clearfix">
    



@foreach($packages as $package)
<div class="wpb_column vc_column_inner vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3 typo-default" style="margin-top:10px;"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="zozo-vc-custom-css" data-css="#zozo-pricing-table-1 .zozo-pricing-item .pricing-title {color: #9299a1;}
#zozo-pricing-table-1 .zozo-pricing-item .pricing-cost h3 {color: #ffffff;}
"></div><div id="zozo-pricing-table-1" class="zozo-pricing-table-wrapper vc-pricing-table pricing-bottom-spacing price-style-one"><div class="zozo-pricing-item"><div class="pricing-plan-list pricing-box"><div class="pricing-head"><h4 class="pricing-title ">{!! $package->client_name !!}</h4><div class="pricing-cost-wrapper"><div class="pricing-cost"><h3>${{ $package->amount or '' }}</h3><span class="pricing-duration">/Month</span></div></div></div><div class="pricing-features clearfix"><ul>
<li>{{ $package->contact_no  }}</li>
<li>{!! $package->address !!}</li>

<li class="inactive">Additional Truck Available</li>
</ul>
</div></div></div></div></div></div></div>

@endforeach















</div></div></div></div></div></div></div></div></section>



		
</div>

@endsection