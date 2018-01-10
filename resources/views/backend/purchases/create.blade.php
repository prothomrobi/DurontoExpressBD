@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Create purchase
        <small>Create purchase</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    Create purchase
                </div>
            </div>
            <div class="panel-body">
                    {!! Form::open(['route' => 'admin.purchases.store', 'method' => 'POST']) !!}
                    @include('backend.purchases.form')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')


    <script type="text/javascript">

    </script>

@endsection
