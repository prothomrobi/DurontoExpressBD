@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Create Packages
        <small>Create Package</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    Create Packages
                </div>
            </div>
            <div class="panel-body">
                    {!! Form::open(['route' => 'admin.packages.store', 'method' => 'POST']) !!}
                    @include('backend.clients.form')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')


    <script type="text/javascript">

    </script>

@endsection
