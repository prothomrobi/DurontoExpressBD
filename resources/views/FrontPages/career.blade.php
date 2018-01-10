@extends('master')
@section('content')

<section class="breadcrumb-area " style="background-image: url(assets/wp-content/uploads/2017/06/breadcrumb-bg.jpg)">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="breadcrumb-title">
									<h1>Career</h1>
								</div>
								<div class="page-breadcrumb">
									<i class="fa fa-home"></i> <a href="../../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="../blog/index.html">Career</a>								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>

<div class="ten columns clearfix">
    <div id="intro_txt">   
            <p>
                
                <span style="color:#003366"><span style="font-size:18px"><strong>Job Openings</strong></span></span></p>

<hr />
<p style="color:green;">@if(Session::has('message'))
                <strong>{{ Session::get('message') }}</strong>
    @endif</p>
<p>
    
    Sorry, we presently have no openings on offer. However, we welcome you to enlist your interest in joining Hamid Group by filling in the form below and/or upload r&eacute;sum&eacute; into our HR database.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

        		
                 
         
             <div id="career">
    <div id="form_holder">
        <form action="{{ route('frontend.career') }}" method="post"  enctype="multipart/form-data" name="career_mail" id="career_mail">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="FL_container"><label>Name:</label></div>
            <div class="FR_container"><input name="name" id="name" type="text"></div></br></br>
            <div class="FL_container"><label>Date of Birth:</label></div>
            <div class="FR_container"><input name="date_of_birth" id="dob" type="date" style="width:210px;border:1px solid #CCC;"></div></br></br>
            <div class="FL_container"><label>Contact No:</label></div>
            <div class="FR_container"><input name="contact_no" id="cell" type="text"></div></br></br>
            <div class="FL_container"><label>E-mail:</label></div>
            <div class="FR_container"><input name="email" id="email" type="text"></div></br></br>
            <div class="FL_container"><label>Experience (if any):</label></div>
            <div class="FR_container"><input name="experience" id="exp" type="text"></div></br></br>
            <div class="FL_container"><label>Desired position:</label></div>
            <div class="FR_container"><select name="payment_method" class="form-control" id="sel1" style="width:210px;border:1px solid #CCC;">
                <option value="">---- Select an option ----</option>
                <option value="Part Time Rider">Part Time Rider</option>
                <option value="Full Time Ride">Full Time Ride</option>
                <option value="Dispatcher">Dispatcher</option>
                <option value="Office Coordinator">Office Coordinator</option>
                <option value="Customer Executive">Customer Executive</option>
                <option value="Business Exexutive">Business Exexutive</option>
                <option value="Marketing Executive">Marketing Executive</option>
                <option value="Executive">Executive</option>
                <option value="Trainee">Trainee</option>
                
                </select></div></br></br>
            <div class="FL_container"><label>Expected Salary:</label></div>
            <div class="FR_container"><input name="salary" id="sal" type="text"></div></br></br>
            <div class="FL_container"><label>Write about you:</label></div>
            <div class="FR_container"><textarea name="about_me" id="about"></textarea></div></br></br></br></br>
            <div class="FL_container"><label>Attach CV:</label></div>
            <div class="FR_container"><input type="file" name="cv_path" id="cv"></div><br></br>
            <div class="submitContainer">
                <button type="submit" value="submit" id="submit">Send</button>
            </div>
        </form>
    </div>
</div>
        
              

    </div>



@endsection