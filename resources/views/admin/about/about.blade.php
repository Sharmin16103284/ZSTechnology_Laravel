<!-- admin/about.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12"> 
                        <div class="card">

                            <form action="{{route('insert_about')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            
                            @csrf    

                                <div class="card-body">
                                    <h4 class="card-title">About Us</h4>

                                    <div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="image" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="headline" class="col-sm-3 text-right control-label col-form-label">Main Headline</label>
                                        <div class="col-sm-9">
                                            <input name="headline" type="text" class="form-control" id="headline" placeholder="Headline">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mtext" class="col-sm-3 text-right control-label col-form-label">Main text</label>
                                        <div class="col-sm-9">
                                            <input name="mtext" type="text" class="form-control" id="mtext" placeholder="Text">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>


                            {{-- about second part --}} 

                            <form action="{{route('insert_about_secondPart')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            
                                @csrf    
    
                                    <div class="card-body"> 
                                        <h4 class="card-title">Bottom Part</h4>
                                       
                                        <div class="form-group row">
                                            <label for="sheadline" class="col-sm-3 text-right control-label col-form-label">Second Headline</label>
                                            <div class="col-sm-9">
                                                <input name="sheadline" type="text" class="form-control" id="sheadline" placeholder="Second Headline">
                                            </div>
                                        </div>
    
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-3 text-right control-label col-form-label">Text</label>
                                            <div class="col-sm-9">
                                                <input name="text" type="text" class="form-control" id="text" placeholder="Text">
                                            </div>
                                        </div>
    
                                        
    
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
						</div>
                    </div>
                    </div>
                    </div>
                    

@endsection