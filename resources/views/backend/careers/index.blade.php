@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Package Management
        <small>Package List</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-12">
        @if(Session::has('sms'))
            <div id="flash" class="alert alert-success"> {{ Session::get('sms') }}</div>
        @endif
        <fieldset>
            <legend>
                package Name
                <!-- <a href="{{ route('admin.packages.create') }}" class="btn btn-info btn-xs pull-right">New package</a> -->
            </legend>
            <table class="table table-bordered table-striped data-table" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Career Name</th>
                    <th>Career Email</th>
                    <th>Contact No</th>
                    <!--<th>telephone</th>-->
                    <th>Date Of Birthdate</th>
                    <!--<th>Email</th>-->
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($careers as $key => $career)


                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $career->name }}</td>
                        <td>{!! $career->email !!}</td>
                        <td> {{ $career->contact_no  }} </td>
                        <td> {{ $career->date_of_birth or '' }} </td>


                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="Show" href="{{ route('admin.careers.show', ['id' => $career->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Show</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
