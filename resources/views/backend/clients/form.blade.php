<div class="form-group">
    {{ Form::label('package_name', 'Package Name', ['class' => 'control-label']) }}
    {{ Form::text('client_name', old('client_name'), [ 'class' => 'form-control',
     'aria-describedby' => 'titleHelp',  'placeholder' => 'Package Name','required' =>'required']) }}
</div>
<div class="form-group">
    {{ Form::label('Description', 'Description', ['class' => 'control-label']) }}
    {{ Form::textarea('address', old('address'), [ 'class' => 'form-control', 'rows' => '3',
    'placeholder' =>'address']) }}
</div>
<div class="form-group">
    {{ Form::label('amount', 'Amount(per month)', ['class' => 'control-label']) }}
    {{ Form::text('amount', old('amount'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'amount']) }}
</div>
<div class="form-group">
    {{ Form::label('Package Type', 'Package Type', ['class' => 'control-label']) }}
    {{ Form::text('contact_no', old('contact_no'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'contact_no']) }}
</div>
<div class="box box-info">
    <div class="box-body">
        <div class="pull-left">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div><!--pull-left-->

        <div class="pull-right">
            {{ Form::reset('Cancel',  [ 'class' => 'btn btn-default' , 'style' => 'margin-left: 10px; float: right;']) }}
            @if(isset($client))
                {{ Form::submit('Update',  [ 'class' => 'btn btn-success']) }}
                <div class="col-md-4" style="float:right;">
                    <a href="" class="btn btn-danger button pull-right"  data-id="{{ $client->id }}">
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
