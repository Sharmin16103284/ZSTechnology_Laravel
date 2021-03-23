{{-- addServiceImage --}}

@extends('admin.layout') 
 
@section('content') 

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <form action="{{route('insertServiceImage')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf

                                <div class="card-body">
                                    <h4 class="card-title">Add New Image</h4>

                                    <div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="image" >
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div> 
                            </form>

                            @foreach($edits as $edit)
                            <form action="{{route('updateServiceImage')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf

                                    <input type="hidden" name="old_image"  value="{{$edit->image}}">

                                    <input name="id" type="hidden" class="form-control" id="fname" value="{{$edit->id}}">
    
                                    <div class="card-body">
                                        <h4 class="card-title">Update Image</h4>
    
                                        <div class="form-group row">
                                            <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                            <div class="col-sm-9">
                                                <img style="height: 110px; width: 100px" src="{{asset($edit->image)}}"> <br>
                                                <input name="image" type="file" class="form-control" id="image" >
                                            </div>
                                        </div>
    
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button name="submit" type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
						</div>
                    </div>
                    </div>
                    </div>
                    

@endsection