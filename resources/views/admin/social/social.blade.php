

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row"> 
                    <div class="col-md-12">
                        <div class="card">
 
                            <form action="{{route('insertSocial')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <h4 class="card-title">Add New Social Links</h4>

                                    <div class="form-group row">
                                        <label for="fb" class="col-sm-3 text-right control-label col-form-label">Facebook</label>
                                        <div class="col-sm-9">
                                            <input name="fb" type="text" class="form-control" id="fb" placeholder="Facebook">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="twitter" class="col-sm-3 text-right control-label col-form-label">Twitter</label>
                                        <div class="col-sm-9">
                                            <input name="twitter" type="text" class="form-control" id="twitter" placeholder="Twitter">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="linkedin" class="col-sm-3 text-right control-label col-form-label">Linkedin</label>
                                        <div class="col-sm-9">
                                            <input name="linkedin" type="text" class="form-control" id="linkedin" placeholder="Linkedin">
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