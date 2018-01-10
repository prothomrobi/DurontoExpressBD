@extends('master')
@section('content')

<section class="breadcrumb-area " style="background-image: url(assets/wp-content/uploads/2017/06/breadcrumb-bg.jpg)">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="breadcrumb-title">
									<h1>Customer Terms & Condition</h1>
								</div>
								<div class="page-breadcrumb">
									<i class="fa fa-home"></i> <a href="../../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="../blog/index.html">Customer Terms & Condition</a>								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>

<div class="navbar subnav">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                    <li class="active">Terms and Conditions </li>
            </ol>
        </div>
    </div>


<div class="container content-container" id="one-column-container">
    <div class="row">
        <div class="col-md-24">
            



<div class="cms-content-wrapper gutter-bottom-xlg">
    {!! $about->contact_address or ' ' !!}

</div>


        </div>
    </div>
</div>

    </div>

</div>


@endsection