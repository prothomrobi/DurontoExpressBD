@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Create Company
        <small>Create Company</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    Create Company
                </div>
            </div>
            <div class="panel-body">
                    {!! Form::open(['route' => 'admin.companies.store', 'method' => 'POST']) !!}
                    @include('backend.companies.form')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')



@endsection
