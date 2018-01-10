@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Create Terms & Condition
        <small>Create Terms&condition</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    Create Terms&condition
                </div>
            </div>
            <div class="panel-body">
                    {!! Form::open(['route' => 'admin.terms.store', 'method' => 'POST']) !!}
                    @include('backend.sales.form')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')


    <script type="text/javascript">

    </script>

@endsection
