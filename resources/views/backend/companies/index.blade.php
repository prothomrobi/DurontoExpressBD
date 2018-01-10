@extends('backend.layouts.app')
@section('page-header')
    <h1>
        Company Management
        <small>Company List</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-12">
        @if(Session::has('sms'))
            <div id="flash" class="alert alert-success"> {{ Session::get('sms') }}</div>
        @endif
        <fieldset>
            <legend>
                Company Name
                <a href="{{ route('admin.companies.create') }}" class="btn btn-info btn-xs pull-right">New Company</a>
            </legend>
            <table class="table table-bordered table-striped data-table" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>telephone</th>
                    <th>Cell Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($companies as $key => $company)


                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $company->company_name }}</td>
                        <td>{!! $company->address !!}</td>
                        <td> {{ $company->telephone or '' }} </td>
                        <td> {{ $company->cell_number or '' }} </td>
                        <td> {{ $company->e_mail  }} </td>


                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="EDIT" href="{{ route('admin.companies.edit', ['id' => $company->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
