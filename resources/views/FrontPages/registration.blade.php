@extends('master')
@section('content')

<section class="breadcrumb-area " style="background-image: url(assets/wp-content/uploads/2017/06/breadcrumb-bg.jpg)">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="breadcrumb-title">
									<h1>Customer Registration</h1>
								</div>
								<div class="page-breadcrumb">
									<i class="fa fa-home"></i> <a href="../../index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="../blog/index.html">Customer Registration</a>								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>

<div class="ten columns clearfix">
    <div id="intro_txt">   
            <p><span style="color:#003366"><span style="font-size:18px"><strong>Create an account</strong></span></span></p>

<hr />
<p style="color:green;">@if(Session::has('message'))
                <strong>{{ Session::get('message') }}</strong>
    @endif</p>
<p>
<p>*  Indicates required field</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

        		
                 
<section>
<form action="{{ route('frontend.registration') }}" method="post"  enctype="multipart/form-data" >    
         
<div id="career">
    <div id="form_holder">
        <input name="_token" value="{{ csrf_token() }}" id="name" type="hidden">
            <div class="FL_container"><label>Name*:</label></div>
            <div class="FR_container"><input name="name" id="name" type="text" required></div></br></br>
            <div class="FL_container"><label>Date of Birth*:</label></div>
            <div class="FR_container"><input name="date_of_birth" id="date_of_birth" type="date" style="width:210px;border:1px solid #CCC;" required></div></br></br>
            <div class="FL_container"><label>NID No:</label></div>
            <div class="FR_container"><input name="n_id" id="cell" type="text" required></div></br></br>
            <div class="FL_container"><label>Father Name*:</label></div>
            <div class="FR_container"><input name="father_name" id="dp" type="text" required></div></br></br>
            <div class="FL_container"><label>Mother Name*:</label></div>
            <div class="FR_container"><input name="mother_name" id="dp" type="text" required></div></br></br>
            <div class="FL_container"><label>E-mail*:</label></div>
            <div class="FR_container"><input name="e-mail" id="email" type="text" required></div></br></br>
            <div class="FL_container"><label>District*:</label></div>
            <div class="FR_container"><input name="division" id="exp" type="text" required></div></br></br>
            <div class="FL_container"><label>Contact No*:</label></div>
            <div class="FR_container"><input name="contact_no" id="cell" type="text" required></div></br></br>
            <div class="FL_container"><label>Address*:</label></div>
            <div class="FR_container"><input name="address" id="sal" type="text" required></div></br></br>
            
            
            
        
    </div>
</div>
  
<div id="career">
    <div id="form_holder">
       
            <div class="FL_container"><label>Business Name:</label></div>
            <div class="FR_container"><input name="business_name" id="name" type="text"></div></br></br>
            <div class="FL_container"><label>Business Address:</label></div>
            <div class="FR_container"><input name="business_address" id="dob" type="text"></div></br></br>
            <div class="FL_container"><label>Contact No:</label></div>
            <div class="FR_container"><input name="contact_no1" id="cell" type="text"></div></br></br>
            <div class="FL_container"><label>District:</label></div>
            <div class="FR_container"><input name="district" id="email" type="text"></div></br></br>
            <div class="FL_container"><label>Email:</label></div>
            <div class="FR_container"><input name="email" id="exp" type="text"></div></br></br>
            <div class="FL_container"><label>Website:</label></div>
            <div class="FR_container"><input name="website" id="dp" type="text"></div></br></br>
            
            
            
        
    </div>
</div>       

<div id="career">
    <div id="form_holder">
        
            <div class="FL_container"><label>Payment Method:</label></div>
            <div class="FR_container"><select name="payment_method" class="form-control" id="sel1" style="width:210px;border:1px solid #CCC;">
                <option value="">---- Select an option ----</option>
                <option value="cash">Cash</option>
                <option value="bank">Bank</option>
                <option value="mobile-wallet">Mobile Wallet</option>
                
                </select></div>
                </br></br>
            <div class="FL_container"><label>Bank:</label></div>
            <div class="FR_container"><select name="bank" class="form-control" id="sel1" style="width:210px;border:1px solid #CCC;">
                <option value="">---- Select a bank ----</option>
                <option value="FSIB">FSIB</option>
                <option value="DBBL">DBBL</option>
                <option value="Bank_Asia">Bank Asia</option>
                <option value="Trust_Bank">Trust Bank</option>
                <option value="Sonali_Bank">Sonali Bank</option>
                <option value="Janata_Bank">Janata Bank</option>
                <option value="Prime_Bank">Prime Bank</option>
                </select></div></br></br>
            <div class="FL_container"><label>Bank Account:</label></div>
            <div class="FR_container"><input name="bank_account" id="cell" type="text"></div></br></br>
            <div class="FL_container"><label>Moblie wallet:</label></div>
            <div class="FR_container"><input name="mobile_wallet" id="email" type="text"></div></br></br>
            <div class="FL_container"><label>Wallet Type:</label></div>
            <div class="FR_container"><input name="wallet_type" id="exp" type="text"></div></br></br>
            <div class="FL_container"><label>Wallet No:</label></div>
            <div class="FR_container"><input name="wallet_no" id="dp" type="text"></div></br></br>
            <div class="FL_container"><label>Emergency Contact:</label></div>
            <div class="FR_container"><input name="emergency_contact" id="sal" type="text"></div></br></br>
            
            <div class="submitContainer">
                <button type="submit" value="submit" id="submit">Send</button>
            </div>
        
    </div>
</div>  
</form>
</section>
</div> 


@endsection