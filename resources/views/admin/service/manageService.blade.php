<!-- admin.portfolio.managePortfolio.blade.php -->

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
                                                <th>Service</th>
                                                <th>Image</th>
                                                <th>Main Title</th>
                                                <th>Sub-Title</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($serviceLists as $serviceList)
                                            <tr>
                                                
                                                <td scope="row">{{$serviceList->id}}</td>
                                                <td>{{$serviceList->relationBetweenServiceAndServiceCategory->service}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($serviceList->image)}}">
                                                </td>
                                                <td>{{$serviceList->mtitle}}</td>
                                                <td>{{$serviceList->stitle}}</td>
                                                <td>{{$serviceList->text}}</td>
                                                <td>
    												<a href="{{url('/deleteService/')}}/{{$serviceList->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                                            
                                            @endforeach   

                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Service</th>
                                                <th>Image</th>
                                                <th>Main Title</th>
                                                <th>Sub-Title</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection