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
                                                <th>First Title</th>
                                                <th>Second Title</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sliderlists as $sliderlist)
                                            <tr>
                                                <td scope="row">{{$sliderlist->id}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($sliderlist->image)}}">
                                                </td>
                                                <td>{{$sliderlist->ftitle}}</td>
                                                <td>{{$sliderlist->stitle}}</td>
                                                <td>{{$sliderlist->text}}</td>
                                                <td>
    												<a href="{{url('/deleteSlider/')}}/{{$sliderlist->id}}">
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
                                                <th>First Title</th>
                                                <th>Second Title</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection