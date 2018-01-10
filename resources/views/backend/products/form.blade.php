<div class="form-group">
            {{ Form::label('vendor_id', 'Vendor Name', ['class' => 'control-label']) }}
            {{ Form::select('vendor_id',['' =>'Select a Vendor'] + $vendors, old('vendor_id'),
            ['class' =>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('product_name', 'product Name', ['class' => 'control-label']) }}
    {{ Form::text('product_name', old('product_name'), [ 'class' => 'form-control',
     'aria-describedby' => 'titleHelp',  'placeholder' => 'product Name','required' =>'required']) }}
</div>

<div class="form-group">
    {{ Form::label('product_code', 'Product Code', ['class' => 'control-label']) }}
    {{ Form::text('product_code', old('product_code'), ['class' => 'form-control',
     'aria-describedby' => 'product_code', 'placeholder' => 'product_code']) }}
</div>

<div class="form-group">
    {{ Form::label('unit_system', 'unit_system', ['class' => 'control-label']) }}
    {{ Form::text('unit_system', old('unit_system'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'unit_system']) }}
</div>

<div class="form-group">
    {{ Form::label('unit_per_carton', 'unit_per_carton', ['class' => 'control-label']) }}
    {{ Form::text('unit_per_carton', old('unit_per_carton'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'unit_per_carton']) }}
</div>


<div class="form-group">
    {{ Form::label('unit_price_vendor', 'unit_Price_vendor', ['class' => 'control-label']) }}
    {{ Form::text('unit_price_vendor', old('unit_price_vendor'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'unit_Price_vendor']) }}
</div>


<div class="form-group">
    {{ Form::label('unit_price_client', 'Unit Price Client', ['class' => 'control-label']) }}
    {{ Form::text('unit_price_client', old('unit_price_client'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'Unit Price Client']) }}
</div>

<div class="box box-info">
    <div class="box-body">
        <div class="pull-left">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div><!--pull-left-->

        <div class="pull-right">
            {{ Form::reset('Cancel',  [ 'class' => 'btn btn-default' , 'style' => 'margin-left: 10px; float: right;']) }}
            @if(isset($product))
                {{ Form::submit('Update',  [ 'class' => 'btn btn-success']) }}
                <div class="col-md-4" style="float:right;">
                    <a href="" class="btn btn-danger button pull-right"  data-id="{{ $product->id }}">
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
