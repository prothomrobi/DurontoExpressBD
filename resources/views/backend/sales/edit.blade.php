@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Edit Terms&Condition
        <small>Create Terms&Condition</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    Update Terms&Condition
                </div>
            </div>
            <div class="panel-body">
                {!! Form::model($salesman, ['route' => ['admin.terms.update', $salesman->id], 'method' => 'PUT']) !!}
                @include('backend.sales.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')


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

                            var URL = "{{ url('/admin/terms') }}" +'/'+ id;
                            $.ajax({
                                url: URL,
                                type: 'DELETE',
//                                dataType : JSON,
//                                success: swal 'Deleted!', 'The member was deleted successfully.'
                                success: swal("Deleted!", "Your imaginary file has been deleted.", "success")
                            });

                            window.location.href = "{{ route('admin.terms.index') }}";
                        });
            });
        });
    </script>

@endsection
