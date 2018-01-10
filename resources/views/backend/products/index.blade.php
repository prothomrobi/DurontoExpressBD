@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Product Management
        <small>Product List</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-12">
        @if(Session::has('sms'))
            <div id="flash" class="alert alert-success"> {{ Session::get('sms') }}</div>
        @endif
        <fieldset>
            <legend>
                Product Name
                <a href="{{ route('admin.products.create') }}" class="btn btn-info btn-xs pull-right">New product</a>
            </legend>
            <table class="table table-bordered table-striped data-table" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Product Name</th>
                    <th>Vendor Name</th>
                    <th>Product Code</th>
                    <th>Unit System</th>
                    <th>Unit Per Carton</th>
                    <th>Unit Price Vendor</th>
                    <th>Unit price Client</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($products as $key => $product)


                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $product->product_name }}</td>
                        <td>{!! $product->vendors->vendor_name !!}</td>
                        <td> {{ $product->product_code or '' }} </td>
                        <td> {{ $product->unit_system }} </td>
                        <td> {{ $product->unit_per_carton or '' }} </td>
                        <td> {{ $product->unit_price_vendor  }} </td>
                        <td> {{ $product->unit_price_client  }} </td>

                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="EDIT" href="{{ route('admin.products.edit', ['id' => $product->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
