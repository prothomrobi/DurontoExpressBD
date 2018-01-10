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
                <a href="{{ route('admin.packages.create') }}" class="btn btn-info btn-xs pull-right">New package</a>
            </legend>
            <table class="table table-bordered table-striped data-table" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Package Name</th>
                    <th>Package Description</th>
                    <th>Package Type</th>
                    <!--<th>telephone</th>-->
                    <th>Package Amount /Month</th>
                    <!--<th>Email</th>-->
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($clients as $key => $client)


                    <tr>

                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $client->client_name }}</td>
                        <td>{!! $client->address !!}</td>
                        <td> {{ $client->contact_no  }} </td>
                        <td> {{ $client->amount or '' }} </td>


                        <td><a class=" btn btn-info"  data-toggle="tooltip" title="EDIT" href="{{ route('admin.packages.edit', ['id' => $client->id] ) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </fieldset>
@endsection
