

@extends('admin.layout')

@section('content')

	 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Services</h5> 
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($logos as $logo)
                                            <tr>
                                                
                                                <td scope="row">{{$logo->id}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($logo->image)}}">
                                                </td>
                                                <td>
    												<a href="{{url('/deleteLogo/')}}/{{$logo->id}}">
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
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection