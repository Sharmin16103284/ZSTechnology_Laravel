<!-- admin/manageContact.blade.php -->

@extends('admin.layout')

@section('content')

	 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Contact</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Address</th>
                                                <th>Phone 1</th>
												<th>Phone 2</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 

                                            @foreach($contactlists as $contactlist)
                                            <tr>
                                                <td scope="row">{{$contactlist->id}}</td> 
                                                <td>{{$contactlist->address}}</td>
                                                <td>{{$contactlist->fphone}}</td>
												<td>{{$contactlist->sphone}}</td>
                                                <td>{{$contactlist->email}}</td>
                                                <td>
    												<a href="{{url('/editContact/')}}/{{$contactlist->id}}">
    												    <span><i class="fa fa-edit"></i></span>
    												</a>
    												<a href="{{url('/deleteContact/')}}/{{$contactlist->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                                        
                                            @endforeach 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Address</th>
                                                <th>Phone 1</th>
												<th>Phone 2</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection