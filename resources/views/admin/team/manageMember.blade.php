<!-- admin/team/manageMember.blade.php -->

@extends('admin.layout')

@section('content')

	 <div class="page-wrapper"> 
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage About</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
												<th>Designation</th>
                                                <th>Description</th>
                                                <th>Facebook</th>
                                                <th>Twitter</th>
                                                <th>Email</th>
                                                <th>Linkedin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($teamlists as $teamlist)
                                            <tr>
                                                <td scope="row">{{$teamlist->id}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($teamlist->image)}}">
                                                </td>
                                                <td>{{$teamlist->name}}</td>
												<td>{{$teamlist->designation}}</td>
                                                <td>{{$teamlist->text}}</td>
                                                <td>{{$teamlist->fb}}</td>
                                                <td>{{$teamlist->twitter}}</td>
                                                <td>{{$teamlist->email}}</td>
                                                <td>{{$teamlist->linkedin}}</td>
                                                <td>
    												<a href="{{url('/deleteTeam/')}}/{{$teamlist->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr> 
                                            @endforeach
                            
                                        </tbody> 
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
												<th>Designation</th>
                                                <th>Description</th>
                                                <th>Facebook</th>
                                                <th>Twitter</th>
                                                <th>Email</th>
                                                <th>Linkedin</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection