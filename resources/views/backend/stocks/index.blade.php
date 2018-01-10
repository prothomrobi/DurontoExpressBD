@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Stock Management
        <small>Stock List</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-12">
        @if(Session::has('sms'))
            <div id="flash" class="alert alert-success"> {{ Session::get('sms') }}</div>
        @endif
        <fieldset>
            <legend>
                Stock
                <a href="{{ route('admin.stocks.create') }}" class="btn btn-info btn-xs pull-right">New Stock</a>
            </legend>
            <table class="table table-bordered table-striped data-table" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Entry Date</th>
                    <th>Vendor Name</th>
                    <th>Product Name</th>
                    <th>product_code</th>
                    <th>lot_no</th>
                    <th>Stock Carton</th>
                    <th>Stock Piece</th>
                    <th>stock_price_vendor</th>
                    <th>stock_price_client</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                @foreach($stocks as $key => $stock)
                        <th scope="row"> {{ ++$key }} </th>
                        <td> {{ $stock->entry_date }} </td>
                        <td> {!! $stock->vendors->vendor_name !!} </td>
                        <td> {{ $stock->products->product_name or '' }} </td>
                        <td> {{ $stock->products->product_code or '' }} </td>
                        <td> {{ $stock->lot_no  }} </td>
                        <td> {{ $stock->stock_quantity_carton }} </td>
                        <td> {{ $stock->stock_quantity_piece }} </td>
                        <td> {{ $stock->stock_price_vendor }} </td>
                        <td> {{ $stock->stock_price_client }} </td>
                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="EDIT" href="{{ route('admin.stocks.edit', ['id' => $stock->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
