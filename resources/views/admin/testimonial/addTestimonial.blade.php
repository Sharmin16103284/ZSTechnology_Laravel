 <!-- admin.portfolio.addService.blade.php -->

 @extends('admin.layout') 
 
 @section('content') 
 
             <div class="page-wrapper">
            <div class="row">
                     <div class="col-md-12">
                         <div class="card">
 

                             <form action="{{route('insertTestimonial')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                             @csrf
 
                                <div class="card-body">
                                    <h4 class="card-title">Add New Testimonial</h4>

                                     <div class="form-group row">
                                         <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                         <div class="col-sm-9">
                                             <input name="image" type="file" class="form-control" id="image" >
                                         </div>
                                     </div>
 
                                     <div class="form-group row">
                                         <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                         <div class="col-sm-9">
                                             <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                                         </div>
                                     </div> 
 
                                     <div class="form-group row">
                                         <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                         <div class="col-sm-9">
                                             <input name="address" type="text" class="form-control" id="address" placeholder="Address">
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