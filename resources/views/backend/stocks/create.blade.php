@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Create Stock
        <small>Create Stock</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    Create Stock
                </div>
            </div>
            <div class="panel-body">
                    {!! Form::open(['route' => 'admin.stocks.store', 'method' => 'POST']) !!}
                    @include('backend.stocks.form')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')


    <script type="text/javascript">

    </script>

@endsection
