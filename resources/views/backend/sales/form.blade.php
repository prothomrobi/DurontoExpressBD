<div class="form-group">
    {{ Form::label('Term&Condition', 'Terms&condition Type', ['class' => 'control-label']) }}
     {{ Form::select('salesman_name',['' => 'Select a Terms Type', 'customer_term' => 'Customer terms & condition', 'franchising_term' => ' Franchising term & condition', 'about' => 'About'] , old('salesman_name'),
            ['class' =>'form-control', 'required'=>'required']) }}
</div>
<div class="form-group">
    {{ Form::label('Description', 'Description', ['class' => 'control-label']) }}
    {{ Form::textarea('contact_address', old('contact_address'), [ 'id' => 'editor1','class' => 'form-control',
    'placeholder' =>'Description']) }}
</div>
<!-- <div class="form-group">
    {{ Form::label('cell_number', 'cell_number', ['class' => 'control-label']) }}
    {{ Form::text('cell_number', old('cell_number'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'cell_number']) }}
</div> -->
<div class="box box-info">
    <div class="box-body">
        <div class="pull-left">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div><!--pull-left-->

        <div class="pull-right">
            {{ Form::reset('Cancel',  [ 'class' => 'btn btn-default' , 'style' => 'margin-left: 10px; float: right;']) }}
            @if(isset($salesman))
                {{ Form::submit('Update',  [ 'class' => 'btn btn-success']) }}
                <div class="col-md-4" style="float:right;">
                    <a href="" class="btn btn-danger button pull-right"  data-id="{{ $salesman->id }}">
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
