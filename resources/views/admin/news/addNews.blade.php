<!-- admin.news.addNews.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
 
                            <form action="{{route('insertNews')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf

                                <div class="card-body">
                                    <h4 class="card-title">Add New News</h4>


                                    <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-right control-label col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input name="date" type="date" class="form-control" id="date" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="image" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Reporter's Name</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="name" class="form-control" id="name" placeholder="Reporter's Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="text" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input name="text" type="text" class="form-control" id="text" placeholder="Description">
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