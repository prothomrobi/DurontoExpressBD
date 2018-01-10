@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Edit Register User
        <small>Edit  Register User</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    Update Register User
                </div>
            </div>
            <div class="panel-body">
                {!! Form::model($registeruser, ['route' => ['admin.registerusers.update', $registeruser->id], 'method' => 'PUT']) !!}
                <div class="form-group">
    {{ Form::label('name', ' Name', ['class' => 'control-label']) }}
    {{ Form::text('name', old('name'), [ 'class' => 'form-control',
     'aria-describedby' => 'titleHelp',  'placeholder' => ' Name','required' =>'required']) }}
</div>
<div class="form-group">
    {{ Form::label('date_of_birth', 'date_of_birth', ['class' => 'control-label']) }}
    {{ Form::text('date_of_birth', old('date_of_birth'), [ 'class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('n_id', 'NID', ['class' => 'control-label']) }}
    {{ Form::text('n_id', old('n_id'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'n_id']) }}
</div>
<div class="form-group">
    {{ Form::label('father_name', 'father_name', ['class' => 'control-label']) }}
    {{ Form::text('father_name', old('father_name'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'father_name']) }}
</div>
<div class="form-group">
    {{ Form::label('mother_name', 'mother_name', ['class' => 'control-label']) }}
    {{ Form::text('mother_name', old('mother_name'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'mother_name']) }}
</div>
<div class="form-group">
    {{ Form::label('father_name', 'father_name', ['class' => 'control-label']) }}
    {{ Form::text('e-mail', old('e-mail'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'e-mail']) }}
</div>
<div class="form-group">
    {{ Form::label('division', 'division', ['class' => 'control-label']) }}
    {{ Form::text('division', old('division'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'division']) }}
</div>
<div class="form-group">
    {{ Form::label('contact_no', 'contact_no', ['class' => 'control-label']) }}
    {{ Form::text('contact_no', old('contact_no'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'contact_no']) }}
</div>
<div class="form-group">
    {{ Form::label('contact_no', 'contact_no', ['class' => 'control-label']) }}
    {{ Form::text('contact_no', old('contact_no'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'contact_no']) }}
</div>
<div class="form-group">
    {{ Form::label('address', 'address', ['class' => 'control-label']) }}
    {{ Form::text('address', old('address'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'address']) }}
</div>
<div class="form-group">
    {{ Form::label('business_name', 'business_name', ['class' => 'control-label']) }}
    {{ Form::text('business_name', old('business_name'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'business_name']) }}
</div>
<div class="form-group">
    {{ Form::label('business_address', 'business_address', ['class' => 'control-label']) }}
    {{ Form::text('business_address', old('business_address'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'business_address']) }}
</div>
<div class="form-group">
    {{ Form::label('contact_no1', 'contact_no1', ['class' => 'control-label']) }}
    {{ Form::text('contact_no1', old('contact_no1'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'contact_no1']) }}
</div>
<div class="form-group">
    {{ Form::label('district', 'district', ['class' => 'control-label']) }}
    {{ Form::text('district', old('district'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'district']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'email', ['class' => 'control-label']) }}
    {{ Form::text('email', old('email'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('website', 'website', ['class' => 'control-label']) }}
    {{ Form::text('website', old('website'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'website']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'email', ['class' => 'control-label']) }}
    {{ Form::text('email', old('email'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('bank_account', 'bank_account', ['class' => 'control-label']) }}
    {{ Form::text('bank_account', old('bank_account'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'bank_account']) }}
</div>
<div class="form-group">
    {{ Form::label('mobile_wallet', 'mobile_wallet', ['class' => 'control-label']) }}
    {{ Form::text('mobile_wallet', old('mobile_wallet'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'mobile_wallet']) }}
</div>
<div class="form-group">
    {{ Form::label('wallet_type', 'wallet_type', ['class' => 'control-label']) }}
    {{ Form::text('wallet_type', old('wallet_type'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'wallet_type']) }}
</div>
<div class="form-group">
    {{ Form::label('wallet_no', 'wallet_no', ['class' => 'control-label']) }}
    {{ Form::text('wallet_no', old('wallet_no'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'wallet_no']) }}
</div>
<div class="form-group">
    {{ Form::label('emergency_contact', 'emergency_contact', ['class' => 'control-label']) }}
    {{ Form::text('emergency_contact', old('emergency_contact'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'emergency_contact']) }}
</div>
<div class="box box-info">
    <div class="box-body">
        <div class="pull-left">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div><!--pull-left-->

        <div class="pull-right">
                {{ Form::submit('Update',  [ 'class' => 'btn btn-success']) }}
        </div><!--pull-right-->

        <div class="clearfix"></div>
    </div><!-- /.box-body -->
</div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')


    

@endsection
