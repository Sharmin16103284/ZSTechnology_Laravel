<!-- admin.contact.editContact.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <form action="{{route('updateContact')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf

                                <div class="card-body">
                                    <h4 class="card-title">Contact Information</h4>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Address*</label>
                                        <div class="col-sm-9">
                                            <input name="address" type="text" class="form-control" id="address" value="{{$editcontacts->address}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fphone" class="col-sm-3 text-right control-label col-form-label">First Phone Number*</label>
                                        <div class="col-sm-9">
                                            <input name="fphone" type="number" class="form-control" id="fphone" value="{{$editcontacts->fphone}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sphone" class="col-sm-3 text-right control-label col-form-label">Second Phone Number</label>
                                        <div class="col-sm-9">
                                            <input name="sphone" type="number" class="form-control" id="sphone" value="{{$editcontacts->sphone}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email*</label>
                                        <div class="col-sm-9">
                                            <input name="email" type="email" class="form-control" id="email" value="{{$editcontacts->email}}">
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    

@endsection