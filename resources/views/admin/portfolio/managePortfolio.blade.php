<!-- admin.portfolio.managePortfolio.blade.php -->

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
                                                <th>Main Title</th>
                                                <th>Sub-Title</th>
                                                <th>Text</th>
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($portfoliolists as $portfoliolist)
                                            <tr>
                                                <td scope="row">{{$portfoliolist->id}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($portfoliolist->image)}}">
                                                </td>
                                                <td>{{$portfoliolist->mtitle}}</td>
												<td>{{$portfoliolist->stitle}}</td>
                                                <td>{{$portfoliolist->text}}</td>
                                                <td>
    												<a href="{{url('/deletePortfolio/')}}/{{$portfoliolist->id}}">
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