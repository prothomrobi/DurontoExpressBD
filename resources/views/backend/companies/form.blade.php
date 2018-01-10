<div class="form-group">
    {{ Form::label('company_name', 'Company Name', ['class' => 'control-label']) }}
    {{ Form::text('company_name', old('company_name'), [ 'class' => 'form-control',
     'aria-describedby' => 'titleHelp',  'placeholder' => 'Company Name','required' =>'required']) }}
</div>

<div class="form-group">
    {{ Form::label('address', 'Address', ['class' => 'control-label']) }}
    {{ Form::textarea('address', old('address'), ['id' => 'editor1',  'class' => 'form-control', 'rows' => '3',
    'placeholder' =>'address']) }}
</div>
<div class="form-group">
    {{ Form::label('telephone', 'telephone', ['class' => 'control-label']) }}
    {{ Form::text('telephone', old('telephone'), ['class' => 'form-control',
     'aria-describedby' => 'description', 'placeholder' => 'telephone']) }}
</div>

<div class="form-group">
    {{ Form::label('contact_person_1', 'contact_person_1', ['class' => 'control-label']) }}
    {{ Form::text('contact_person_1', old('contact_person_1'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'contact_person_1']) }}
</div>

<div class="form-group">
    {{ Form::label('contact_person_2', 'contact_person_2', ['class' => 'control-label']) }}
    {{ Form::text('contact_person_2', old('contact_person_2'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'contact_person_2']) }}
</div>


<div class="form-group">
    {{ Form::label('cell_number', 'cell_number', ['class' => 'control-label']) }}
    {{ Form::text('cell_number', old('cell_number'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'cell_number']) }}
</div>


<div class="form-group">
    {{ Form::label('e_mail', 'Email', ['class' => 'control-label']) }}
    {{ Form::text('e_mail', old('e_mail'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'Email']) }}
</div>

<div class="form-group">
    {{ Form::label('web_address', 'web_address', ['class' => 'control-label']) }}
    {{ Form::text('web_address', old('web_address'), ['class' => 'form-control',
     'aria-describedby' => 'titleHelp', 'placeholder' => 'web_address']) }}
</div>
<div class="box box-info">
    <div class="box-body">
        <div class="pull-left">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div><!--pull-left-->

        <div class="pull-right">
            {{ Form::reset('Cancel',  [ 'class' => 'btn btn-default' , 'style' => 'margin-left: 10px; float: right;']) }}
            @if(isset($company))
                {{ Form::submit('Update',  [ 'class' => 'btn btn-success']) }}
                <div class="col-md-4" style="float:right;">
                    <a href="" class="btn btn-danger button pull-right"  data-id="{{ $company->id }}">
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
