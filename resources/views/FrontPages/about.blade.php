@extends('master')
@section('content')

<section class="breadcrumb-area " style="background-image: url(assets/wp-content/uploads/2017/06/breadcrumb-bg.jpg)">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="breadcrumb-title">
									<h1>{{ $about_name }}</h1>
								</div>
								<div class="page-breadcrumb">
									<i class="fa fa-home"></i> <a href="../../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="../blog/index.html">{{ $about_name }}</a>								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<section id="mainhome">

<div class="feature_section13">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                    <div class="item-page">



{!! $about->contact_address  or '' !!}






	
</div>

            </div>
        </div>
    </div>
</div>
</section>

@endsection