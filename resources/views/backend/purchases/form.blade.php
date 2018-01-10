<div class="form-group">
    {{ Form::label('entry_date', 'Entry date', ['class' => 'control-label']) }}
    {{ Form::text('entry_date', old('entry_date'), [ 'class' => 'form-control',
     'aria-describedby' => 'titleHelp',  'placeholder' => 'Entry date','required' =>'required']) }}
</div>
<div class="form-group">
            {{ Form::label('vendor_id', 'Vendor Name', ['class' => 'control-label']) }}
            {{ Form::select('vendor_id',['' =>'Select a Vendor'] + $vendors, old('vendor_id'),
            ['class' =>'form-control']) }}
</div>

<div class="form-group">
            {{ Form::label('product_id', 'product Name', ['class' => 'control-label']) }}
            {{ Form::select('product_id',['' =>'Select a product'] + $products, old('product_id'),
            ['class' =>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('stock_quantity_carton', 'stock_quantity_carton', ['class' => 'control-label']) }}
    {{ Form::text('stock_quantity_carton', old('stock_quantity_carton'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'stock_quantity_carton']) }}
</div>

<div class="form-group">
    {{ Form::label('stock_quantity_piece', 'stock_quantity_piece', ['class' => 'control-label']) }}
    {{ Form::text('stock_quantity_piece', old('stock_quantity_piece'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'stock_quantity_piece']) }}
</div>


<div class="form-group">
    {{ Form::label('stock_price_vendor', 'stock_price_vendor', ['class' => 'control-label']) }}
    {{ Form::text('stock_price_vendor', old('stock_price_vendor'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'stock_price_vendor']) }}
</div>


<div class="form-group">
    {{ Form::label('stock_price_client', 'stock_price_client', ['class' => 'control-label']) }}
    {{ Form::text('stock_price_client', old('stock_price_client'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'stock_price_client']) }}
</div>

<div class="box box-info">
    <div class="box-body">
        <div class="pull-left">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div><!--pull-left-->

        <div class="pull-right">
            {{ Form::reset('Cancel',  [ 'class' => 'btn btn-default' , 'style' => 'margin-left: 10px; float: right;']) }}
            @if(isset($purchase))
                {{ Form::submit('Update',  [ 'class' => 'btn btn-success']) }}
                <div class="col-md-4" style="float:right;">
                    <a href="" class="btn btn-danger button pull-right"  data-id="{{ $purchase->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i>Delete
                    </a>
                </div>
            @else
                {{ Form::submit('Save',  [ 'class' => 'btn btn-success pull-right']) }}
            @endif
        </div><!--pull-right-->

        <div class="clearfix"></div>
    </div><!-- /.box-body -->
</div>
