@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Terms & Condition Management
        <small>Terms & Condition List</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-12">
        @if(Session::has('sms'))
            <div id="flash" class="alert alert-success"> {{ Session::get('sms') }}</div>
        @endif
        <fieldset>
            <legend>
                Terms & Condition Name
                <a href="{{ route('admin.terms.create') }}" class="btn btn-info btn-xs pull-right">New Terms & Condition</a>
            </legend>
            <table class="table table-bordered table-striped data-table" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Terms Type</th>
                    <th>Description</th>
                    <!--<th>telephone</th>-->
                    <!-- <th>Cell Number</th> -->
                    <!--<th>Email</th>-->
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($sales as $key => $sale)


                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $sale->salesman_name }}</td>
                        <td>{!! $sale->contact_address !!}</td>
                        <!-- <td> {{ $sale->cell_number or '' }} </td> -->
                        <!--<td> {{ $sale->e_mail  }} </td>-->


                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="EDIT" href="{{ route('admin.terms.edit', ['id' => $sale->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
