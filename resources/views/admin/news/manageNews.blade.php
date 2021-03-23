 <!-- admin.news.manageNews.blade.php -->

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
                                                <th>Date</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Aurthor's Name</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($newslists as $newslist) 
                                            <tr>
                                                <td scope="row">{{$newslist->id}}</td>
                                                <td>{{$newslist->date}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($newslist->image)}}">
                                                </td>
                                                <td>{{$newslist->title}}</td>
												<td>{{$newslist->name}}</td>
                                                <td>{{$newslist->text}}</td>
                                                <td>
    												<a href="{{url('/deleteNews/')}}/{{$newslist->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr> 
                                            @endforeach
                                                
                             
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Date</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Aurthor's Name</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection