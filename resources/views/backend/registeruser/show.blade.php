@extends('backend.layouts.app')

@section('page-header')
    <h1>
        Show Register user
        <small>Show Register User</small>
    </h1>
@endsection
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                <h1>{{ $registeruser->name }}  </h1> <p>details</p>
            </div>
        </div>

        <div class="panel-body">

            <div class="col-md-6">
                

                <div class="form-group">
                    <label for=""> Name</label>
                    <p>{{ $registeruser->name }}</p>
                </div>

                <div class="form-group">
                    <label for=""> Contact No</label>
                    <p>{{ $registeruser->contact_no }}</p>
                </div>

                <div class="form-group">
                    <label for="">  Email </label>
                    <p> {{ $registeruser->email or '' }} </p>
                </div>
                
                <div class="form-group">
                    <label for=""> NID</label>
                    <p>{{ $registeruser->n_id }}</p>
                </div>
                
                <div class="form-group">
                    <label for="">  Father Name </label>
                    <p> {{ $registeruser->father_name or ''  }}</p>
                </div>

                <div class="form-group">
                    <label for=""> Mother Name </label>
                    <p> {{ $registeruser->mother_name or ''  }}</p>
                </div>

                <div class="form-group">
                    <label for="">  Address </label>
                    {{ $registeruser->address or '' }}
                </div>
                <div class="form-group">
                    <label for="">  Date Of Birth </label>
                    {{ $registeruser->date_of_birth or '' }}
                </div>
                <div class="form-group">
                    <label for="">Emergency Contact</label>
                    {!! $registeruser->emergency_contact !!}
                </div>
               
            </div>

            <div class="col-md-6">
                
                <div class="form-group">
                    <label for=""> business_name </label>
                    <p>{{ $registeruser->business_name or ''  }}</p>
                </div>

                <div class="form-group">
                    <label for=""> business_address</label>
                    <p>{{ $registeruser->business_address or '' }}</p>
                </div>

                <div class="form-group">
                    <label for="">  website </label>
                    <p> {{ $registeruser->website or '' }} </p>
                </div>

                <div class="form-group">
                    <label for="">  payment_method </label>
                    <p> {{ $registeruser->payment_method or ''  }}</p>
                </div>

                <div class="form-group">
                    <label for=""> bank  </label>
                    <p> {{ $registeruser->bank  or ''  }}</p>
                </div>

                <div class="form-group">
                    <label for="">  bank_account </label>
                    {{ $registeruser->bank_account or '' }}
                </div>
                <div class="form-group">
                    <label for="">  mobile_wallet </label>
                    {{ $registeruser->mobile_wallet or '' }}
                </div>
                <div class="form-group">
                    <label for="">wallet_type</label>
                    {!! $registeruser->wallet_type or '' !!}
                </div>

                </div>
                
            </div>
        </div>
        <div class="panel-footer">
            <a class="btn btn-primary" style="font-size: 10px;  margin: 10px;" href="javascript: myFunction1(this.form);" >
                <i class="fa fa-undo" aria-hidden="true"></i>
                Back</a>
                <div class="col-md-4" style="float:right;">
                    <a href="" class="btn btn-danger button pull-right"  data-id="{{ $registeruser->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </a>
        </div>
        </div>
        
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function myFunction1(f)
        {
            window.location.href = "{{ route('admin.registerusers.index') }}";
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('body').on('click', '.button', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                console.log(id);
                swal({
                            title: "Are you sure?",
                            text: "You will not be able to recover this imaginary file!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Yes, delete it!",
                            closeOnConfirm: false
                        },
                        function(){

                            var URL = "{{ url('/admin/registerusers') }}" +'/'+ id;
                            $.ajax({
                                url: URL,
                                type: 'DELETE',
//                                dataType : JSON,
//                                success: swal 'Deleted!', 'The member was deleted successfully.'
                                success: swal("Deleted!", "Your imaginary file has been deleted.", "success")
                            });

                            window.location.href = "{{ route('admin.registerusers.index') }}";
                        });
            });
        });
    </script>


@endsection