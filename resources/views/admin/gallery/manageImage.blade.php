<!-- admin/manageImage.blade.php -->

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
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($gallerylists as $gallerylist)
                                            <tr>
                                                <td scope="row">{{$gallerylist->id}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($gallerylist->image)}}">
                                                </td>
                                                <td>{{$gallerylist->title}}</td>
                                                <td>
    												<a href="{{url('/deleteImage/')}}/{{$gallerylist->id}}">
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
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection