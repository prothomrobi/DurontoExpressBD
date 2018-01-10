@extends('backend.layouts.app')
@section('page-header')
    <h1>
        purchase Management
        <small>purchase List</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-12">
        @if(Session::has('sms'))
            <div id="flash" class="alert alert-success"> {{ Session::get('sms') }}</div>
        @endif
        <fieldset>
            <legend>
                purchase
                <a href="{{ route('admin.purchases.create') }}" class="btn btn-info btn-xs pull-right">New purchase</a>
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
                    <th>purchase Carton</th>
                    <th>purchase Piece</th>
                    <th>purchase_price_vendor</th>
                    <th>purchase_price_client</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                @foreach($purchases as $key => $purchase)
                        <th scope="row"> {{ ++$key }} </th>
                        <td> {{ $purchase->entry_date }} </td>
                        <td> {!! $purchase->vendors->vendor_name !!} </td>
                        <td> {{ $purchase->products->product_name or '' }} </td>
                        <td> {{ $purchase->products->product_code or '' }} </td>
                        <td> {{ $purchase->lot_no  }} </td>
                        <td> {{ $purchase->stock_quantity_carton }} </td>
                        <td> {{ $purchase->stock_quantity_piece }} </td>
                        <td> {{ $purchase->stock_price_vendor }} </td>
                        <td> {{ $purchase->stock_price_client }} </td>
                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="EDIT" href="{{ route('admin.purchases.edit', ['id' => $purchase->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
