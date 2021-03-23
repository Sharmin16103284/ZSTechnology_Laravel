 <!-- admin/manageAbout.blade.php -->

@extends('admin.layout')

@section('content')

	 <div class="page-wrapper">
           <div class="card">
                            
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Testimonial</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                 
                                            @foreach($testimoniallists as $testimoniallist)
                                            <tr>
                                                <td scope="row">{{$testimoniallist->id}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($testimoniallist->image)}}">
                                                </td>
                                                <td>{{$testimoniallist->name}}</td>
												<td>{{$testimoniallist->address}}</td>
                                                <td>{{$testimoniallist->text}}</td>
                                                <td>
    												<a href="{{url('/deleteTestimonial/')}}/{{$testimoniallist->id}}">
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
                                                <th>Address</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

     </div>


@endsection