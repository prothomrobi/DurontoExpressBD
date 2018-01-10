
@extends('backend.layouts.app')

@section('page-header')
    <h1>
        Show Career
        <small>Show Career</small>
    </h1>
@endsection
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                <h1>{{ $career->name }}  </h1> <p>details</p>
            </div>
        </div>

        <div class="panel-body">

            <div class="col-md-7">


                <div class="form-group">
                    <label for="">Content Name</label>
                    <p>{{ $career->name }}</p>
                </div>

                <div class="form-group">
                    <label for=""> Contact No</label>
                    <p>{{ $career->contact_no }}</p>
                </div>

                <div class="form-group">
                    <label for="">  Email </label>
                    <p> {{ $career->email or '' }} </p>
                </div>

                <div class="form-group">
                    <label for="">  Experience </label>
                    <p> {{ $career->experience or ''  }}</p>
                </div>

                <div class="form-group">
                    <label for=""> Position </label>
                    <p> {{ $career->position or ''  }}</p>
                </div>

                <div class="form-group">
                    <label for="">  Salary </label>
                    {{ $content->salary or '' }}
                </div>
                <div class="form-group">
                    <label for="">  Date Of Birth </label>
                    {{ $career->date_of_birth or '' }}
                </div>
                <div class="form-group">
                    <label for="">About</label>
                    {!! $career->about_me !!}
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Updated Date</label>
                    <p>{{  date('F j, Y', strtotime($career->created_at)) }}</p>
                </div>
            </div>

            <div class="col-md-5">
                
                <div class="form-group" style="margin-top: 50px;">
                    <label for="exampleInputFile">Cv Preview</label>
                   
                        <a href="{{ route('admin.download', $career->cv_path) }}" > Download</a>
                    </div>

                </div>
                
            </div>
        </div>
        <div class="panel-footer">
            <a class="btn btn-primary" style="font-size: 10px;  margin: 10px;" href="javascript: myFunction1(this.form);" >
                <i class="fa fa-undo" aria-hidden="true"></i>
                Back</a>
                <div class="col-md-4" style="float:right;">
                    <a href="" class="btn btn-danger button pull-right"  data-id="{{ $career->id }}">
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
            window.location.href = "{{ route('admin.careers.index') }}";
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

                            var URL = "{{ url('/admin/careers') }}" +'/'+ id;
                            $.ajax({
                                url: URL,
                                type: 'DELETE',
//                                dataType : JSON,
//                                success: swal 'Deleted!', 'The member was deleted successfully.'
                                success: swal("Deleted!", "Your imaginary file has been deleted.", "success")
                            });

                            window.location.href = "{{ route('admin.careers.index') }}";
                        });
            });
        });
    </script>


@endsection