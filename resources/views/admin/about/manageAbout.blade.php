<!-- admin/manageAbout.blade.php -->

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
                                                <th>Main Headline</th>
												<th>Main text</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                 
                            @foreach($lists as $list)
                                            <tr>
                                                <td scope="row">{{$list->id}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($list->image)}}">
                                                </td>
                                                <td>{{$list->headline}}</td> 
												<td>{{$list->mtext}}</td>
                                                <td>
    												<a href="{{url('/deleteAbout/')}}/{{$list->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                        @endforeach          
                            
                                        </tbody>
                                        
                                    </table>
                                    <br>
                                </div>

                            </div>
                </div>


                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Bottom About</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Second Headline</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                 
                            @foreach($seccondlists as $seccondlist)
                                            <tr>
                                                <td scope="row">{{$seccondlist->id}}</td>
                                                <td>{{$seccondlist->sheadline}}</td>
                                                <td>{{$seccondlist->text}}</td> 
                                                <td>
    												<a href="{{url('/editBottomAbout/')}}/{{$seccondlist->id}}">
    												    <span><i class="fa fa-edit"></i></span>
    												</a>
    												<a href="{{url('/deleteBottomAbout/')}}/{{$seccondlist->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                        @endforeach          
                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Second Headline</th>
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