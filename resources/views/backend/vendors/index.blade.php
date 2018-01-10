@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Vendor Management
        <small>Vendor List</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-12">
        @if(Session::has('sms'))
            <div id="flash" class="alert alert-success"> {{ Session::get('sms') }}</div>
        @endif
        <fieldset>
            <legend>
                Vendor Name
                <a href="{{ route('admin.vendors.create') }}" class="btn btn-info btn-xs pull-right">New Vendor</a>
            </legend>
            <table class="table table-bordered table-striped data-table" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>vendor Name</th>
                    <th>Address</th>
                    <th>telephone</th>
                    <th>Cell Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($vendors as $key => $vendor)


                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $vendor->vendor_name }}</td>
                        <td>{!! $vendor->address !!}</td>
                        <td> {{ $vendor->telephone or '' }} </td>
                        <td> {{ $vendor->cell_number or '' }} </td>
                        <td> {{ $vendor->e_mail  }} </td>


                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="EDIT" href="{{ route('admin.vendors.edit', ['id' => $vendor->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
