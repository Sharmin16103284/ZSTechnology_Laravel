 <!-- admin.portfolio.addPortfolio.blade.php -->

 @extends('admin.layout') 
 
 @section('content') 
 
             <div class="page-wrapper">
            <div class="row">
                     <div class="col-md-12">
                         <div class="card">
 
                             <form action="{{route('insertSlider')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                             @csrf
 
                                 <div class="card-body">
                                     <h4 class="card-title">Add New Image</h4>
 
                                     <div class="form-group row">
                                         <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                         <div class="col-sm-9">
                                             <input name="image" type="file" class="form-control" id="image" >
                                         </div>
                                     </div>
 
                                     <div class="form-group row">
                                         <label for="ftitle" class="col-sm-3 text-right control-label col-form-label">first Title</label>
                                         <div class="col-sm-9">
                                             <input name="ftitle" type="text" class="form-control" id="ftitle" placeholder="first Title">
                                         </div>
                                     </div> 
 
                                     <div class="form-group row">
                                         <label for="stitle" class="col-sm-3 text-right control-label col-form-label">Second title</label>
                                         <div class="col-sm-9">
                                             <input name="stitle" type="text" class="form-control" id="stitle" placeholder="Second title">
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