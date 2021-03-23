<!-- admin.service.addServiceCategory.blade.php -->

@extends('admin.layout')

@section('content')


			<div class="page-wrapper"> 
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        	
                            <form action="{{route('insertServiceCat')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                           	

                                <div class="card-body">
                                    <h4 class="card-title">Add Service Category</h4>

                                    <div class="form-group row">
                                        <label for="service" class="col-sm-3 text-right control-label col-form-label">Service Name</label>
                                        <div class="col-sm-9">
                                            <input name="service" type="text" class="form-control" id="service" placeholder="Service Name Here">
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


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                              <h5 class="card-title">Service Category List</h5>
                              <div class="table-responsive">
                                  <table id="zero_config" class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>Id</th>
                                              <th>Service Name</th>
                                              <th>Action</th>
                                          </tr> 
                                      </thead>
                                      <tbody>

                          @foreach($serviceCategoryLists as $serviceCategoryList)
                  
                                          <tr>
                                              <td scope="row">{{$serviceCategoryList->id}}</td>
                                              <td>{{$serviceCategoryList->service}}</td>
                                              <td>
                                                  <a href="{{url('/deleteServiceCat/')}}/{{$serviceCategoryList->id}}">
                                                      <span><i class="fa fa-trash"></i></span>
                                                  </a>
                                              </td>
                                          </tr>
                          @endforeach  

                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <th>Id</th>
                                              <th>Service Name</th>
                                              <th>Action</th>
                                          </tr>
                                      </tfoot>
                                  </table>
                              </div>

                          </div>


                  </div>
                </div>
            </div>

@endsection